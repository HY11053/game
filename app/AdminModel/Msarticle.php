<?php

namespace App\AdminModel;

use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Msarticle extends Model
{
    protected $guarded = ['xiongzhang','image','updatetime','input-image','topid'];
    protected $dates = ['published_at'];
    /**
     * 全局scope定义
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope());
    }
    /**
     * 文档入库之前的预选发布时间格式转换
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        if(!empty($date) && strpos($date,':')==false)
        {
            $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        }else{
            $this->attributes['published_at'] =$date?$date : Carbon::now();
        }
    }

    /**自定义文档属性去重排序
     * @param $flags
     */
    public function setFlagsAttribute($flags)
    {
        if (!empty($flags))
        {
            $flags=array_unique(explode(',',$flags));
            sort($flags);
            $newflags='';
            foreach ($flags as $flag)
            {
                $newflags.=$flag.',';
            }
            $this->attributes['flags']=trim($newflags,',');
        }

    }

    /**图片默认缩略图定义
     * @return mixed|string
     */
    public function getLitpicAttribute($litpic)
    {
        return $litpic?$litpic:'/mobile/images/nopic.png';
    }

    /**Eloquent ORM 栏目关联定义
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function msarctype()
    {
        return $this->belongsTo('App\AdminModel\Mscategory','typeid');
    }
}
