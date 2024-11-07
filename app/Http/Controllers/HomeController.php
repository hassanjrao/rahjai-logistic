<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Models\CustomActivity;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use App\Notifications\ContactUsNotification;
use Database\Seeders\OrderSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }

    public function contact()
    {

        return view('front.contact');
    }

    public function about()
    {
        return view('front.about');
    }

    public function services()
    {
        return view('front.services');
    }

    public function serviceDetails()
    {
        return view('front.service-details');
    }

    public function track(Request $request)
    {
        $trackingNumber = $request->tid;

        $orderStatuses = [];
        $orderLogs = [];

        $order=null;

        $message=null;

        if ($trackingNumber) {

            $order = Order::where('tracking_number', $trackingNumber)->first();


            if ($order) {

                $orderStatuses = OrderStatus::all();


                $orderLogs = CustomActivity::where('subject_type', Order::class)->where('subject_id', $order->id)
                    ->with(['orderStatus'])
                    ->latest()
                    ->get();
            }
            else{
                $message='No Package found with this tracking number.';
            }
        }

        return view('front.track', compact('order', 'orderStatuses', 'orderLogs', 'message'));
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

       $cs= ContactSubmission::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // try{
        $admin=User::first();

        $admin->notify(new ContactUsNotification($cs));
        // }catch(\Exception $e){
        //     // do nothing
        //     Log::error('HomeController@contactSubmit: ',[
        //         'message'=>$e->getMessage(),
        //         'line'=>$e->getLine(),
        //         'stack'=>$e->getTraceAsString()
        //     ]);
        // }

        return redirect()->back()->withToastSuccess('Your message has been sent successfully, we will get back to you soon.');
    }
}
