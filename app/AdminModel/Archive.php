<?php

namespace App\AdminModel;

use App\Scopes\PublishedScope;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Archive extends Model
{
    protected $guarded = ['xiongzhang','image','updatetime','input-image','topid'];
    protected $dates = ['published_at'];
    /**
     * 全局scope定义
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PublishedScope);
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

    /**老路径转换
     * @return string
     */
    public function url()
    {
        $url = '/';
        if (is_null($this->oldtable)) {
            $url = route('article', ['id' => $this->id]);
        }
        switch ($this->oldtable) {
            case 'news':
                $url = route('article_onews', ['oid' => $this->oldid]).'/';
                break;
            case 'cnews':
                $url = route('article_cnews', ['oid' => $this->oldid]).'/';
                break;
            case 'tnews':
                $url = route('article_tnews', ['oid' => $this->oldid]).'/';
                break;
        }
        return $url;
    }
    /**Eloquent ORM 栏目关联定义
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arctype()
    {
        return $this->belongsTo('App\AdminModel\Arctype','typeid');
    }
    public function brandarticle()
    {
        return $this->belongsTo('App\AdminModel\Brandarticle','brandid');
    }

    /**Eloquent ORM 评论关联定义
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected function comments()
    {
        return $this->hasMany('App\AdminModel\Comments','id');
    }
}
