<?php

namespace App\Http\Controllers;

use App\Models\CustomActivity;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderStatuses = OrderStatus::all();

        $order = null;


        return view('admin.orders.add_edit', compact('orderStatuses', 'order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|exists:order_statuses,code',
            'sender_name' => 'required',
            'sender_phone' => 'required',
            'sender_email' => 'required',
            'receiver_name' => 'required',
            'receiver_phone' => 'required',
            'receiver_email' => 'required',
            'image' => 'required|image',
        ]);

        $orderObj = new Order();

        $order = Order::create([
            'order_status_code' => $request->status,
            'tracking_number' => $orderObj->generateTrackingNumber(),
            'sender_name' => $request->sender_name,
            'sender_phone' => $request->sender_phone,
            'sender_email' => $request->sender_email,
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'receiver_email' => $request->receiver_email,
            'image_path' => $request->file('image')->store('orders')
        ]);


        activity()
            ->causedBy(auth()->user())
            ->performedOn($order)
            ->log($order->orderStatus->description);

        return redirect()->route('admin.orders.index')->withToastSuccess('Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderStatuses = OrderStatus::all();

        $order = Order::findOrFail($id);


        $orderLogs=CustomActivity::where('subject_type',Order::class)->where('subject_id',$order->id)
        ->with(['orderStatus'])
        ->latest()
        ->get();

        return view('admin.orders.add_edit', compact('orderStatuses', 'order','orderLogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order=Order::findOrFail($id);

        $request->validate([
            'status' => 'required|exists:order_statuses,code',
            'sender_name' => 'required',
            'sender_phone' => 'required',
            'sender_email' => 'required',
            'receiver_name' => 'required',
            'receiver_phone' => 'required',
            'receiver_email' => 'required',
            'image' => 'nullable|image',
        ]);

        $order->update([
            'order_status_code' => $request->status,
            'sender_name' => $request->sender_name,
            'sender_phone' => $request->sender_phone,
            'sender_email' => $request->sender_email,
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'receiver_email' => $request->receiver_email,
        ]);

        if($request->image){
            $order->update([
                'image_path' => $request->file('image')->store('orders')
        ]);
        }

        activity()
            ->causedBy(auth()->user())
            ->performedOn($order)
            ->tap(function(Activity $activity) use($request){
                $activity->order_status_code=$request->status;
            })
            ->log($order->orderStatus->description);


        return redirect()->route('admin.orders.index')->withToastSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();

        return redirect()->route('admin.orders.index')->withToastSuccess('Deleted successfully');
    }
}
