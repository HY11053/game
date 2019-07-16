<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Mscategory;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MsCategotyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**栏目展现
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index(){
        $topnavs=Mscategory::where('reid',0)->pluck('typename','id');
        return view('admin.ms_category',compact('topnavs'));
    }

    /**栏目创建界面
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Create($id=0)
    {
        $thisnavinfos=Mscategory::find($id);
        $allnavinfos=Mscategory::pluck('typename','id');
        if($id!=0)
        {
            $topid=empty(Mscategory::where('id',$id)->value('topid'))?$thisnavinfos->id:Mscategory::where('id',$id)->value('topid');
        }
        return view('admin.ms_category_create',compact('id','thisnavinfos','allnavinfos','topid'));
    }

    /**栏目创建提交数据处理
     * @param StoreCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostCreate(StoreCategoryRequest $request){
        Mscategory::create($request->all());
        return redirect(action('Admin\MsCategotyController@Index'));
    }
    /**栏目编辑界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Edit($id){
        $typeinfos=Mscategory::findOrFail($id);
        $thisnavinfos=Mscategory::find($id);
        $allnavinfos=Mscategory::pluck('typename','id');
        $topid=Mscategory::where('id',$id)->value('topid');
        $reid=Mscategory::where('id',$id)->value('reid');
        return view('admin.ms_category_edit',compact('typeinfos','thisnavinfos','allnavinfos','topid','id','reid'));
    }

    /**栏目更改数据提交处理界面
     * @param StoreCategoryRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(StoreCategoryRequest $request,$id)
    {
        $requestdata=$request->all();
        Mscategory::findOrFail($id)->update($requestdata);
        return redirect(action('Admin\MsCategotyController@Index'));
    }

    /**栏目删除 暂不启用
     * @param Request $request
     * @param $id
     * @return string
     */
    function DeleteCategory(Request $request,$id){
        if(empty(Mscategory::where('reid',$id)->value('id')))
        {
            Mscategory::findOrFail($id)->delete();
            return '栏目删除成功';
        }
    }

}
