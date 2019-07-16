<?php

namespace App\Http\Controllers\Admin;
use App\AdminModel\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\InvestmentType;
use App\AdminModel\Msarticle;
use App\AdminModel\Mscategory;
use App\AdminModel\Msflink;
use App\AdminModel\Production;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleTraslateController extends Controller
{

    /**
     * 品牌栏目迁移导入
     */
    public function getBrandarctypes()
    {
        $arctypes=DB::connection('anxjm')->select('SELECT * FROM category  WHERE id>?',[0]);
        foreach ($arctypes as $arctype)
        {
            $insertarctypes=[];
            $insertarctypes['id']=$arctype->id;
            $insertarctypes['reid']=0;
            $insertarctypes['topid']=0;
            $insertarctypes['typename']=$arctype->name;
            $insertarctypes['title']=$arctype->seo_title;
            $insertarctypes['keywords']=$arctype->seo_keywords;
            $insertarctypes['description']=$arctype->seo_description;
            $insertarctypes['typedir']=$arctype->realm;
            $insertarctypes['real_path']=$arctype->realm;
            $insertarctypes['mid']=1;
            $insertarctypes['is_write']=1;
            $insertarctypes['dirposition']=1;
            $insertarctypes['updated_at']=Carbon::now();
            $insertarctypes['created_at']=Carbon::now();
            Arctype::create($insertarctypes);
        }
        echo '导入成功';
    }

    public function getSonTypes()
    {
        $sonarctypes=DB::connection('anxjm')->select('SELECT * FROM category_x  WHERE id>?',[0]);
        foreach ($sonarctypes as $arctype)
        {
            $insertarctypes=[];
            $insertarctypes['id']=intval(19)+$arctype->id;
            $insertarctypes['reid']=$arctype->categoryId;
            $insertarctypes['topid']=$arctype->categoryId;
            $insertarctypes['typename']=$arctype->name;
            $insertarctypes['title']=$arctype->seo_title;
            $insertarctypes['keywords']=$arctype->seo_keywords;
            $insertarctypes['description']=$arctype->seo_description;
            $insertarctypes['typedir']=$arctype->id;
            $insertarctypes['real_path']=$arctype->id;
            $insertarctypes['mid']=1;
            $insertarctypes['is_write']=1;
            $insertarctypes['dirposition']=1;
            $insertarctypes['updated_at']=Carbon::now();
            $insertarctypes['created_at']=Carbon::now();
            Arctype::create($insertarctypes);
        }
        echo '子品牌栏目导入成功';
    }
    /**
     * 普通文档栏目迁移导入
     */
    public function getarctypes()
    {
        $arctypes=DB::connection('anxjm')->select('SELECT * FROM news_kind  WHERE id>?',[0]);
        foreach ($arctypes as $arctype)
        {
            $insertarctypes=[];
            $insertarctypes['id']=210+$arctype->id;
            $insertarctypes['reid']=0;
            $insertarctypes['topid']=0;
            $insertarctypes['typename']=$arctype->name;
            $insertarctypes['title']=$arctype->seo_title;
            $insertarctypes['keywords']=$arctype->seo_keywords;
            $insertarctypes['description']=$arctype->seo_description;
            $insertarctypes['typedir']='160'.$arctype->id;
            $insertarctypes['real_path']='160'.$arctype->id;
            $insertarctypes['mid']=0;
            $insertarctypes['is_write']=1;
            $insertarctypes['dirposition']=1;
            $insertarctypes['updated_at']=Carbon::now();
            $insertarctypes['created_at']=Carbon::now();
            Arctype::create($insertarctypes);
        }
        echo '普通栏目导入成功';
    }

    /**
     * 后台用户迁移导入
     */
    public function getAdmins()
    {
        $admins=DB::connection('anxjm')->select('SELECT * FROM admin  WHERE id>?',[1]);
        foreach ($admins as $admin) {
            $inserarticle=[];
            $inserarticle['name']=$admin->fullname?:'林田荣';
            $inserarticle['email']='liang5698'.rand(1,10000).'@hotmail.com';
            $inserarticle['password']=$admin->password;
            $inserarticle['created_at']=$admin->created_at;
            $inserarticle['updated_at']=$admin->updated_at;
            Admin::create($inserarticle);

        }
        echo '后台用户导入成功！';
    }

    /**
     * 品牌文档迁移导入
     */
    public function getBrandArticles()
    {
        set_time_limit(0);
        DB::connection('anxjm')->table('company_basicinfo')->where('id','>',0)->orderBy('id','desc')->chunk(100, function($articles) {
            foreach ($articles as $article) {
                $inserarticle = [];
                $inserarticle['id'] = $article->id;
                $inserarticle['brandgroup'] = $article->companyName;
                $inserarticle['brandorigin'] = $article->birthLand;
                $inserarticle['genre'] = $article->property;
                $inserarticle['topid'] = $article->categoryId;
                $inserarticle['typeid'] = intval(19)+$article->xcategoryId;
                $inserarticle['brandaddr'] = $article->address;
                $inserarticle['tzid'] = $article->invest;
                $inserarticle['brandnum'] = $article->shopNum;
                $inserarticle['brandarea'] = $article->joinArea;
                $inserarticle['brandmoshi'] = $article->managementMode;
                $inserarticle['branddevelop'] = $article->developMode;
                $inserarticle['created_at']=$article->created_at;
                $inserarticle['published_at']=$article->created_at;
                $inserarticle['updated_at']=$article->updated_at;
                $inserarticle['brandname']=$article->brandName;
                $inserarticle['brandpsp']=$article->slogan;
                $inserarticle['contentindex']=$article->contentindex;
                $inserarticle['index_status']=$article->index_status;
                $inserarticle['imagepics']='';
                if (count(DB::connection('anxjm')->table('company_photo')->where('companyId',$article->id)->pluck('pictureName')))
                {
                    foreach (DB::connection('anxjm')->table('company_photo')->where('companyId',$article->id)->pluck('pictureName') as $pic)
                    $inserarticle['imagepics'].=$pic.',';
                }
                $inserarticle['imagepics']=trim($inserarticle['imagepics'],',');
                $inserarticle['click']=$article->hits;
                $inserarticle['indexpic']=$article->logo;
                $inserarticle['litpic']=$article->logo;
                $inserarticle['brandperson']=$article->crowd;
                $inserarticle['registeredcapital']=$article->registeredCapital;
                $inserarticle['dutyadmin']=$article->author_id?:1;
                $inserarticle['title']=$article->seo_title;
                $inserarticle['keywords']=$article->seo_keywords;
                $inserarticle['description']=$article->seo_description;
                $inserarticle['ismake'] = 1;
                $inserarticle['write']=Admin::where('id',$article->author_id)->value('name')?:'梁李良';
                $inserarticle['mid'] = 1;
                $articles2=DB::connection('anxjm')->table('company_detailsinfo')->where('companyId',$article->id)->first();
                if (!empty($articles2))
                {
                    $inserarticle['body'] ='';
                    if (!empty($articles2->intro_title)){
                        $inserarticle['body'] .='<h2>'.$articles2->intro_title.'</h2>'.$articles2->intro;
                    }elseif(mb_strlen(str_replace(['&nbsp;',' ','　',PHP_EOL,"\t","\r"],'',strip_tags(htmlspecialchars_decode($articles2->intro)))) >5 || stripos($articles2->intro,'img')){
                        $inserarticle['body'] .='<h2>'.str_replace('加盟','',$article->brandName).'加盟品牌介绍'.'</h2>'.str_replace(['<h2>','</h2>'],['<strong>','</strong>'],$articles2->intro);
                    }
                    if (!empty($articles2->joinCost_title))
                    {
                        $inserarticle['body'] .= '<h2>'.$articles2->joinCost_title.'</h2>'.$articles2->joinCost;
                    }elseif(mb_strlen(str_replace(['&nbsp;',' ','　',PHP_EOL,"\t","\r"],'',strip_tags(htmlspecialchars_decode($articles2->joinCost)))) >5  || stripos($articles2->joinCost,'img')){
                        $inserarticle['body'] .='<h2>'.str_replace('加盟','',$article->brandName).'加盟费用'.'</h2>'.str_replace(['<h2>','</h2>'],['<strong>','</strong>'],$articles2->joinCost);
                    }
                    if (!empty($articles2->joinCondition_title))
                    {
                        $inserarticle['body'] .= '<h2>'.$articles2->joinCondition_title.'</h2>'.$articles2->joinCondition;
                    }elseif(mb_strlen(str_replace(['&nbsp;',' ','　',PHP_EOL,"\t","\r"],'',strip_tags(htmlspecialchars_decode($articles2->joinCondition)))) >5  || stripos($articles2->joinCondition,'img')){
                        $inserarticle['body'] .='<h2>'.str_replace('加盟','',$article->brandName).'加盟条件'.'</h2>'.str_replace(['<h2>','</h2>'],['<strong>','</strong>'],$articles2->joinCondition);
                    }
                    if (!empty($articles2->joinAdvantage_title))
                    {
                        $inserarticle['body'] .= '<h2>'.$articles2->joinAdvantage_title.'</h2>'.$articles2->joinAdvantage;
                    }elseif(mb_strlen(str_replace(['&nbsp;',' ','　',PHP_EOL,"\t","\r"],'',strip_tags(htmlspecialchars_decode($articles2->joinAdvantage)))) >5   || stripos($articles2->joinAdvantage,'img')){
                        $inserarticle['body'] .='<h2>'.str_replace('加盟','',$article->brandName).'加盟优势'.'</h2>'.str_replace(['<h2>','</h2>'],['<strong>','</strong>'],$articles2->joinAdvantage);
                    }
                    if (!empty($articles2->joinProcess_title)){
                        $inserarticle['body'] .= '<h2>'.$articles2->joinProcess_title.'</h2>'.$articles2->joinProcess;
                    }elseif(mb_strlen(str_replace(['&nbsp;',' ','　',PHP_EOL,"\t","\r"],'',strip_tags(htmlspecialchars_decode($articles2->joinProcess)))) >5  || stripos($articles2->joinProcess,'img')){
                        $inserarticle['body'] .='<h2>'.str_replace('加盟','',$article->brandName).'加盟流程'.'</h2>'.str_replace(['<h2>','</h2>'],['<strong>','</strong>'],$articles2->joinProcess);
                    }

                }

                if(!Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$inserarticle['id'])->value('id') && empty($article->deleted_at))
                {
                    Brandarticle::create($inserarticle);
                }
            }
        });
        echo '品牌数据导入成功！！！';
    }

    /**
     * 普通文档迁移导入
     */
    public function getArticles()
    {
        set_time_limit(0);
        DB::connection('anxjm')->table('news')->orderBy('id','desc')->chunk(100, function($articles) {
            foreach ($articles as $article)
            {
                $inserarticle=[];
                $inserarticle['id']=$article->id;
                $inserarticle['typeid']=210+$article->newsKindId;
                $inserarticle['brandcid']=$article->categoryId;
                $inserarticle['oldid']=$article->oldid;
                $inserarticle['oldtable']=$article->oldtable;
                $inserarticle['brandtypeid']=19+$article->xcategoryId;
                $inserarticle['brandid']=$article->companyId;
                $inserarticle['title']=$article->title;
                $inserarticle['body']=$article->content;
                $inserarticle['click']=$article->hits;
                $inserarticle['keywords']=$article->seo_keywords;
                $inserarticle['description']=$article->seo_description;
                $inserarticle['dutyadmin']=$article->admin_id ? $article->admin_id :1;
                $inserarticle['ismake']=$article->status_at?:0;
                $inserarticle['mid']=0;
                $inserarticle['write']=Admin::where('id',$article->admin_id)->value('name')?:'梁李良';
                $inserarticle['created_at']=$article->created_at;
                $inserarticle['updated_at']=$article->updated_at;
                $inserarticle['published_at']=$inserarticle['created_at'];
                if(!Archive::withoutGlobalScope(PublishedScope::class)->where('id',$inserarticle['id'])->value('id') && empty($article->deleted_at))
                {
                    Archive::create($inserarticle);
                }
            }
        });
        echo '普通文档导入成功！';
    }

    /**
     * 地区数据迁移导入
     */
    public function getAreas()
    {
        DB::connection('u88')->table('areas')->where('area_id','>',0)->orderBy('area_id','asc')->chunk(1000, function($areas) {
            foreach ($areas as $area)
            {
                $areainsert=[];
                $areainsert['id']=$area->area_id;
                $areainsert['parentid']=$area->parent_area_id;
                $areainsert['name']=$area->name;
                $areainsert['name_cn']=$area->name_cn;
                $areainsert['deep']=$area->deep;
                $areainsert['id_path']=$area->id_path;
                $areainsert['name_path']=$area->name_path;
                $areainsert['status']=$area->status;
                $areainsert['sort']=$area->sort;
                if(!Area::where('id',$areainsert['id'])->value('id')) {
                    Area::create($areainsert);
                }
            }
        });
        echo '地区信息导入成功';
    }

    /**
     * 友情链接迁移导入
     */
    public function getFlinks()
    {
        DB::connection('anxjm')->table('frilink')->where('status_at','>',0)->orderBy('id','asc')->chunk(1000, function($flinks) {
            foreach ($flinks as $flink)
            {
                $flinkinsert=[];
                $flinkinsert['id']=$flink->id;
                $flinkinsert['webname']=$flink->title;
                $flinkinsert['weburl']=$flink->url;
                $flinkinsert['created_at']=$flink->created_at;
                $flinkinsert['updated_at']=$flink->updated_at;
                if(!flink::where('id',$flinkinsert['id'])->value('id') && !flink::where('weburl',$flinkinsert['weburl'])->value('weburl') ) {
                    flink::create($flinkinsert);
                }
            }
        });
        echo '友情链接导入成功';
    }

    /**
     * 投资分类批量生成
     */
    public function createInverment()
    {
        InvestmentType::create(['id'=>1,'type'=>'1万元以下','url'=>'0_1','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        InvestmentType::create(['id'=>2,'type'=>'1-5万元','url'=>'1_5','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        InvestmentType::create(['id'=>3,'type'=>'5-10万元','url'=>'5_10','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        InvestmentType::create(['id'=>4,'type'=>'10-20万元','url'=>'10_20','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        InvestmentType::create(['id'=>5,'type'=>'20-50万元','url'=>'20_50','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        InvestmentType::create(['id'=>6,'type'=>'50-100万元','url'=>'50_100','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        InvestmentType::create(['id'=>7,'type'=>'100万以上','url'=>'100-200','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        echo '投资分类生成成功！';
    }

    public function getmsarctype()
    {
        DB::connection('anxjm')->table('zz_news_type')->where('id','>',3)->orderBy('id','asc')->chunk(1000, function($mscategorys) {
            foreach ($mscategorys as $index=>$mscategory)
            {
                $cateinsert=[];
                $cateinsert['typename']=$mscategory->name;
                $cateinsert['typedir']=$mscategory->sname;
                $cateinsert['title']=$mscategory->seo_title;
                $cateinsert['keywords']=$mscategory->seo_keywords;
                $cateinsert['sortrank']=$index+1;
                $cateinsert['mid']=0;
                $cateinsert['description']=$mscategory->seo_description;
                $cateinsert['created_at']=$mscategory->created_at;
                $cateinsert['updated_at']=$mscategory->updated_at;
                if(!Mscategory::where('id',$mscategory->id)->value('id') ) {
                    Mscategory::create($cateinsert);
                }
            }
        });

        /**
         * 美食品牌信息栏目分类导入
         */
        DB::connection('anxjm')->table('zz_type')->where('id','>',3)->orderBy('id','asc')->chunk(1000, function($mscategory2s) {
            foreach ($mscategory2s as $index=>$mscategory2)
            {
                if ($mscategory2->id==4 || $mscategory2->pid==4)
                {
                    $cateinsert=[];
                    $cateinsert['typename']=$mscategory2->name;
                    $cateinsert['typedir']=$mscategory2->realm;
                    $cateinsert['title']=$mscategory2->seo_title;
                    $cateinsert['keywords']=$mscategory2->seo_keywords;
                    $cateinsert['sortrank']=$index+1;
                    if ($mscategory2->id==4)
                    {
                        $cateinsert['reid']=0;
                        $cateinsert['topid']=0;
                    }else{
                        $cateinsert['reid']=8;
                        $cateinsert['topid']=8;
                    }
                    $cateinsert['is_write']=0;
                    $cateinsert['mid']=1;
                    $cateinsert['description']=$mscategory2->seo_description;
                    $cateinsert['created_at']=$mscategory2->created_at;
                    $cateinsert['updated_at']=$mscategory2->updated_at;
                    if(!$mscategory2->deleted_at) {
                        Mscategory::create($cateinsert);
                    }
                }

            }
        });
        echo '美食栏目导入成功';
    }

    public function getMsarticles()
    {
        set_time_limit(0);
        DB::connection('anxjm')->table('zz_news')->orderBy('id','desc')->chunk(100, function($articles) {
            foreach ($articles as $article)
            {
                $inserarticle=[];
                $inserarticle['id']=$article->id;
                $inserarticle['typeid']=intval($article->news_type)-3;
                $inserarticle['title']=$article->title;
                $proid=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('id');
                if ($proid)
                {
                    $inserarticle['brandname']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('title');
                    $inserarticle['brandcid']=8;
                    $inserarticle['brandtypeid']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('xcategoryId');
                    switch ($inserarticle['brandtypeid'])
                    {
                        case 5:
                            $inserarticle['brandtypeid']= 9;
                            break;
                        case 6:
                            $inserarticle['brandtypeid']= 10;
                            break;
                        case 7:
                            $inserarticle['brandtypeid']= 11;
                            break;
                        case 8:
                            $inserarticle['brandtypeid']= 12;
                            break;
                        case 9:
                            $inserarticle['brandtypeid']= 13;
                            break;
                        case 10:
                            $inserarticle['brandtypeid']= 14;
                            break;
                        case 11:
                            $inserarticle['brandtypeid']= 15;
                            break;
                        case 12:
                            $inserarticle['brandtypeid']= 16;
                            break;
                        case 13:
                            $inserarticle['brandtypeid']= 17;
                            break;
                        case 14:
                            $inserarticle['brandtypeid']= 18;
                            break;
                        case 15:
                            $inserarticle['brandtypeid']= 19;
                            break;
                        case 16:
                            $inserarticle['brandtypeid']= 20;
                            break;
                        case 17:
                            $inserarticle['brandtypeid']= 21;
                            break;
                        case 18:
                            $inserarticle['brandtypeid']= 22;
                            break;
                        case 19:
                            $inserarticle['brandtypeid']= 23;
                            break;
                        case 20:
                            $inserarticle['brandtypeid']= 24;
                            break;
                        case 21:
                            $inserarticle['brandtypeid']= 25;
                            break;
                        case 22:
                            $inserarticle['brandtypeid']= 26;
                            break;
                        case 23:
                            $inserarticle['brandtypeid']= 27;
                            break;
                        case 24:
                            $inserarticle['brandtypeid']= 28;
                            break;
                        case 173:
                            $inserarticle['brandtypeid']= 29;
                            break;
                        case 174:
                            $inserarticle['brandtypeid']= 30;
                            break;
                        case 175:
                            $inserarticle['brandtypeid']= 31;
                            break;
                        case 186:
                            $inserarticle['brandtypeid']= 32;
                            break;
                    }
                    $inserarticle['litpic']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('logo');
                    $inserarticle['production']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('product');
                    $inserarticle['brandpay']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('invest');
                    $inserarticle['brandnum']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('league');
                    $inserarticle['branddev']=DB::connection('anxjm')->table('zz_project')->where('id',$article->projectId)->value('crowd');
                }
                $cmpid=DB::connection('anxjm')->table('zz_company')->where('id',$article->companyId)->value('id');
                if ($cmpid)
                {
                    $inserarticle['brandcompany']=DB::connection('anxjm')->table('zz_company')->where('id',$article->companyId)->value('companyName');
                    $inserarticle['brandaddress']=DB::connection('anxjm')->table('zz_company')->where('id',$article->companyId)->value('address');
                }
                $inserarticle['body']=$article->content;
                $inserarticle['click']=rand(1000,3000);
                $inserarticle['keywords']=$article->seo_keywords;
                $inserarticle['description']=$article->seo_description;
                $inserarticle['dutyadmin']=$article->admin_id ? $article->admin_id :1;
                $inserarticle['ismake']=$article->status_at?:0;
                $inserarticle['write']=Admin::where('id',$article->admin_id)->value('name')?:'梁李良';
                $inserarticle['created_at']=$article->created_at;
                $inserarticle['updated_at']=$article->updated_at;
                $inserarticle['published_at']=$inserarticle['created_at'];
                if(!Msarticle::withoutGlobalScope(PublishedScope::class)->where('id',$inserarticle['id'])->value('id') && empty($article->deleted_at))
                {
                    Msarticle::create($inserarticle);
                }
            }
        });
        echo '普通文档导入成功！';
    }

    public function getMsflinks()
    {
        DB::connection('anxjm')->table('zz_frilink')->where('id','>',0)->orderBy('id','asc')->chunk(1000, function($msflink2) {
            foreach ($msflink2 as $index=>$msflink)
            {
                $msflinks=[];
                $msflinks['id']=$msflink->id;
                $msflinks['webname']=$msflink->title;
                $msflinks['weburl']=$msflink->url;
                $msflinks['created_at']=$msflink->created_at;
                $msflinks['updated_at']=$msflink->updated_at;
                if(!Msflink::where('id',$msflinks['id'])->value('id'))
                {
                    Msflink::create($msflinks);
                }
            }
        });
    }



    /**
     * 普通文档缩略图提取
     */
    public function getLitpic()
    {
        $ids=Archive::pluck('id');
        foreach ($ids as $id)
        {
            $thispic=Archive::where('id',$id)->value('litpic');
            if (empty($thispic) || $thispic=='/frontend/images/nopic.png')
            {
                if(preg_match('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',Archive::where('id',$id)->value('body'),$match)) {
                    Archive::where('id',$id)->update(['litpic'=> $match[1]]);
                }
            }
        }
        echo '缩略图提取完成';
    }

    public function updateIndexpic()
    {
        Admin::whereIn('id',[1,30])->update(['type'=>1]);
    }
}
