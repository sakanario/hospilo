<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    protected $guarded = [];

    //space memiliki photos
    public function photos()
    {
        return $this->hasMany(SpacePhoto::class,'space_id','id');
        //space_id -> foreign key di table spacephotos
        //id -> local key di table spaces
    }

    //space dimiliki oleh user
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
        // user_id itu sebagai foreign key di dlm table spaces
        // id itu local key di dlm table user
    }
}
