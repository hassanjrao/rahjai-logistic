<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $appends=['image_url'];

    // create a random unique tracking number

    public function generateTrackingNumber(){
        $prefix='TR';

        // generate 12 digit random number
        $random = mt_rand(100000000000, 999999999999);
        $trackingNum=$prefix.$random.$this->id;

        return $trackingNum;
    }

    public function getImageUrlAttribute(){
        return $this->image_path ? Storage::url($this->image_path) : null;
    }




    public function orderStatus(){
        //
        return $this->belongsTo(OrderStatus::class,'order_status_code','code')->withDefault();
    }

}
