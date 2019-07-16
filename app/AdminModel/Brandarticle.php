<?php

namespace App\AdminModel;

use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Brandarticle extends Model
{
    protected $guarded = ['imagepic','xiongzhang','updatetime','image','indexlitpic','input-image','topid'];

    /**
     * 文档入库之前的时间格式转换
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

    public function getLitpicAttribute($litpic)
    {
        return $litpic?$litpic:'/mobile/images/nopic.png';
    }

    public function getBrandareaAttribute($brandarea)
    {
        return $brandarea?$brandarea:'全国';
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
    /**
     * 全局scope定义
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope);
    }
    /**栏目关联定义
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
    public function area()
    {
        return $this->belongsTo('App\AdminModel\Area','province_id');
    }
    public function investment()
    {
        return $this->belongsTo('App\AdminModel\InvestmentType','tzid');
    }
}
