<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Admin;
use App\AdminModel\Phonemanage;
use App\Notifications\MailSendNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class PhoneController extends Controller
{
    /**pc 移动电话提交转发
     * @param Request $request
     */
    function phoneComplate(Request $request)
    {
        if($this->regTel($request->input('phoneno'))  && count(Phonemanage::where('ip',$request->ip())->where('created_at','>',Carbon::today())->pluck('id'))<5)
        {
            $request['phoneno']=$request->input('phoneno');
            $request['name']=$request->input('name')?$request->input('name'):'未提供';
            $request['ip']=$request->ip();
            $request['host']=$request->input('host');
            $request['referer']=str_limit($request->session()->all()['referer'],100,'');
            $request['note']=$request['note'];
            Phonemanage::create($request->all());
            $url="https://i.u88.com/store";
            $post_data = array(
                "realm" => 'www.anxjm.com',
                "job" => 'guestbook',
                "resolution" => 'resolution',
                "title" => $request['title'],
                "cla" => $request['cla'],
                "combrand" => $request['combrand'],
                "username" => $request['name'],
                "iphone" => $request['phoneno'],
                "content" => $request['note'],
                "project_id" => $request['project_id'],
                "real_useraddr" => $request->ip(),
                "real_httpurl" => $request['host']
            );
            $header=[
                "Accept-Language: zh-CN,zh;q=0.9",
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
            ];
            $response = $this->curl_https($url, $post_data,$header);
            if ($response==200)
            {
                $phoneid=Phonemanage::latest()->value('id');
                Phonemanage::where('id',$phoneid)->update(["status"=>1]);
                $info='电话提交成功，我们将尽快与您联系';
            }else{
                Log::info($response);
                $info='未知错误,请拨打电话直接咨询';
            }
            echo $info;
        }else{
            $info='电话已存在，请直接点击咨询';
            echo $info;
        }
    }

    /**mip电话提交转发
     * @param Request $request
     */
    function ButtonPhoneComplate(Request $request)
    {
        if($this->regTel($request->input('iphone'))  && count(Phonemanage::where('ip',$request->ip())->where('created_at','>',Carbon::today())->pluck('id'))<5)
        {
            $request['phoneno']=$request->input('iphone');
            $request['ip']=$request->ip();
            $request['referer']=str_limit($request->session()->all()['referer'],100,'');
            $request['name']=$request->input('username')?$request->input('username'):'未提供';
            $request['note']=$request['content'];
            Phonemanage::create($request->all());
            $url="https://i.u88.com/store";
            $post_data = array(
                "realm" => 'www.anxjm.com',
                "job" => 'guestbook',
                "resolution" => 'resolution',
                "title" => $request['title'],
                "cla" => $request['cla'],
                "combrand" => $request['combrand'],
                "username" => $request['username'],
                "iphone" => $request['iphone'],
                "content" => $request['note'],
                "project_id" => $request['project_id'],
                "real_useraddr" => $request['ip'],
                "real_httpurl" => $request['host']
            );
            $header=[
                "Accept-Language: zh-CN,zh;q=0.9",
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
            ];
            $response = $this->curl_https($url, $post_data,$header);
            if ($response==200)
            {
                $phoneid=Phonemanage::latest()->value('id');
                Phonemanage::where('id',$phoneid)->update(["status"=>1]);
                $info= '<script> alert("提交成功，我们将尽快与您联系");
                        window.location="'.str_replace(['?ref=buttom','?ref=tanchuang'],'',$request['host']).'";
                        </script>';
            }else{
                $info='未知错误';
                Log::info($response);
            }
            echo $info;
        }else{
            $info= '<script> alert("电话已存在，请直接点击咨询");
                        window.location="'.str_replace(['?ref=buttom','?ref=tanchuang'],'',$request['host']).'";
                        </script>';
            echo $info;
        }

    }


    /**mip电话提交转发
     * @param Request $request
     */
    function TopPhoneComplate(Request $request)
    {
        if($this->regTel($request->input('iphone2'))  && count(Phonemanage::where('ip',$request->ip())->where('created_at','>',Carbon::today())->pluck('id'))<5)
        {
            $request['phoneno']=$request->input('iphone2');
            $request['ip']=$request->ip();
            $request['host']=$request->input('host2');
            $request['referer']=str_limit($request->session()->all()['referer'],100,'');
            $request['name']=$request->input('username2')?$request->input('username2'):'未提供';
            Phonemanage::create($request->all());
            $url="https://i.u88.com/store";
            $post_data = array(
                "realm" => 'www.anxjm.com',
                "job" => 'guestbook',
                "resolution" => 'resolution',
                "title" => $request['title2'],
                "cla" => $request['cla2'],
                "combrand" => $request['combrand2'],
                "username" => $request['username2'],
                "iphone" => $request['iphone2'],
                "project_id" => $request['project_id2'],
                "real_useraddr" => $request['ip'],
                "real_httpurl" => $request['host2']
            );
            $header=[
                "Accept-Language: zh-CN,zh;q=0.9",
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36",
            ];
            $response = $this->curl_https($url, $post_data,$header);
            if ($response==200)
            {
                $phoneid=Phonemanage::latest()->value('id');
                Phonemanage::where('id',$phoneid)->update(["status"=>1]);
                $info= '<script> alert("提交成功，我们将尽快与您联系");
                        window.location="'.str_replace(['?ref=buttom','?ref=tanchuang'],'',$request['host2']).'";
                        </script>';
            }else{
                $info='未知错误';
                Log::info($response);
            }
            echo $info;
        }else{
            $info= '<script> alert("电话已存在，请直接点击咨询");
                        window.location="'.str_replace(['?ref=buttom','?ref=tanchuang'],'',$request['host2']).'";
                        </script>';
            echo $info;
        }

    }

    /**curlHTTPS请求转发
     * @param $url
     * @param array $data
     * @param array $header
     * @param int $timeout
     * @param bool $debug
     * @return mixed
     */
    function curl_https($url, $data=array(), $header=array(), $timeout=30, $debug=true){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt ($ch, CURLOPT_REFERER, $data['real_httpurl']);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
        if($error=curl_error($ch)){
            die($error);
        }
        curl_close($ch);
        return $httpCode;
    }

    /**获取实际ip地址
     * @param Request $request
     * @return array|mixed|null|string
     */
    function get_realIp(Request $request)
    {
        $ip=$request->server('HTTP_X_FORWARDED_FOR');
        if (empty($ip))
        {
            $ip=$request->getClientIp();
        }
        if (count(explode(',',$ip))>1)
        {
            $ip=explode(',',$ip);
            $ip=$ip[0];
        }
        return $ip;
    }
    private function regTel($phone)
    {
        $telRegex = "/^1[34578]\d{9}$/";
        if ( preg_match( $telRegex, $phone ) ) {
            return true;
        } else {
            return false;
        }
    }
}
