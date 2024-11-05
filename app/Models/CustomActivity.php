<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\Activitylog\Contracts\Activity;

class CustomActivity extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table='activity_log';


    public function orderStatus(){
        return $this->belongsTo(OrderStatus::class,'order_status_code','code')->withDefault();
    }


}
