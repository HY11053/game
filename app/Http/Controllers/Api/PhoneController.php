<?php

namespace App\Http\Controllers\Api;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Notifications\MailSendNotification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{
    function phoneComplate(Request $request)
    {
        if(empty(Phonemanage::where('phoneno',$request->input('phoneno'))->value('phoneno')))
        {
            $request['ip']=$request->getClientIp();
            $request['host']=$request->input('host');
            $request['referer']='百度小程序';
            Phonemanage::create($request->all());
            Admin::first()->notify(new MailSendNotification(Phonemanage::latest() ->first()));
            echo '电话提交成功！我们将尽快与您联系';
        }else{
            echo '电话号码已存在，请点击在线咨询客服';
        }
    }
}
