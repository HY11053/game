<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Phonemanage extends Model
{
    use Notifiable;

    protected $fillable=['phoneno','name','address','ip','note','host','referer','status'];
    public function setPhonenoAttribute($phoneno)
    {
        $this->attributes['phoneno']=encrypt($phoneno);
    }
}
