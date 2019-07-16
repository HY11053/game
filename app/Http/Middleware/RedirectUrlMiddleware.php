<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Facades\Agent;
use Log;
class RedirectUrlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * Log::info($request->url());
        Log::info($request->server());
        Log::info('--------------------------------------------');
         */
        //旧链接访问跳转兼容 普通文档页
        if (preg_match('#\/article\/(\w+)-(\d+)\.html#',$request->server()['REQUEST_URI'],$matches))
        {
            $redirecturl='https://'.$request->server()['SERVER_NAME'].'/article/'.$matches[2].'.html';
            if (str_contains($request->url(),'www.'))
            {
                $redirecturl=config('app.url').'/article/'.$matches[2].'.html';
            }elseif(str_contains($request->url(),'m.')){
                $redirecturl=str_replace('www.','m.',config('app.url')).'/article/'.$matches[2].'.html';
            }elseif(str_contains($request->url(),'mip.'))
            {
                $redirecturl=str_replace('www.','mip.',config('app.url')).'/article/'.$matches[2].'.html';
            }
            return redirect($redirecturl,301);
        }
        //旧链接访问跳转兼容 品牌页
        if (preg_match('#\/xiangmu\/(\w+)-(\d+).html#',$request->server()['REQUEST_URI'],$matches))
        {
            if (str_contains($request->url(),'www.'))
            {
                $redirecturl=config('app.url').'/xiangmu/'.$matches[2].'.html';
            }elseif(str_contains($request->url(),'m.')){
                $redirecturl=str_replace('www.','m.',config('app.url')).'/xiangmu/'.$matches[2].'.html';
            }elseif(str_contains($request->url(),'mip.')){
                $redirecturl=str_replace('www.','mip.',config('app.url')).'/xiangmu/'.$matches[2].'.html';
            }
            return redirect($redirecturl,301);
        }


        //移动端设备判断跳转适配
        if (preg_match('#(.*)/$#',$_SERVER['REQUEST_URI'],$matches) || str_contains($request->url(),'.html' ))
        {
            if ((str_contains($request->url(),'www.')) && Agent::isMobile())
            {
                $redirecturl=str_replace('www.','m.',config('app.url').$_SERVER['REQUEST_URI']);
                return redirect($redirecturl,302);
            }
            return $next($request);
        }else{
            //对无‘/’结尾的目录补全‘/’跳转
            if ((str_contains($request->url(),'complate')) ||  (str_contains($request->url(),'crosscomplate')) || str_contains($request->url(),'captcha') || str_contains($request->url(),'.html'))
            {
                return $next($request);
            }else{
                preg_match('#(.*)[^/]$#',$_SERVER['REQUEST_URI'],$matches);
                if (str_contains($request->url(),'www.'))
                {
                    $redirecturl=config('app.url').$matches[0].'/';
                }elseif (str_contains($request->url(),'m.')){
                    $redirecturl=str_replace('www.','m.',config('app.url')).$matches[0].'/';
                }elseif (str_contains($request->url(),'mip.')){
                    $redirecturl=str_replace('www.','mip.',config('app.url')).$matches[0].'/';
                }
                return redirect($redirecturl,301);
            }
        }
        return $next($request);
    }
}
