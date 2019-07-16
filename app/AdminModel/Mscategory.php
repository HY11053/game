<?php

namespace App\AdminModel;

use Illuminate\Database\Eloquent\Model;

class Mscategory extends Model
{
    protected $guarded =['input-image','image','selectd'];
    /**
     * Eloquent ORM 关联定义
     * @param
     *
     * @return arraydatas
     */
    protected function msarticles()
    {
        return $this->hasMany('App\AdminModel\Msarticle','typeid');
    }
}
