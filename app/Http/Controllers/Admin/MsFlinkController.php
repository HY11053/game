<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Msflink;
use App\Http\Requests\FlinkValidationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MsFlinkController extends Controller
{
    /**友情链接列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index()
    {
        $links=Msflink::where('id','>',0)->paginate(30);
        return view('admin.msflink',compact('links'));
    }

    /** 创建友情链接
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    function CreateFlink()
    {
        return view('admin.msflink_create');
    }

    /**友情链接提交处理
     * @param FlinkValidationRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    function PostCreateFlink(FlinkValidationRequest $request)
    {
        Msflink::create($request->all());
        return redirect(action('Admin\MsFlinkController@Index'));

    }


    /**友情链接编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    function EditFlink($id)
    {
        $thislink=Msflink::find($id);
        return view('admin.msflink_edit',compact('thislink'));

    }

    /**友情链接编辑处理
     * @param FlinkValidationRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEditFlink(FlinkValidationRequest $request,$id)
    {
        Msflink::find($id)->update($request->all());
        return redirect(action('Admin\MsFlinkController@Index'));

    }

    /**友情链接删除
     * @param $id
     */
    function DeleteFlink($id)
    {
        Msflink::find($id)->delete();
        return redirect(action('Admin\MsFlinkController@Index'));
    }
}
