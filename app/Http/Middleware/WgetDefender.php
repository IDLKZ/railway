<?php


namespace App\Http\Middleware;
use Closure;

class WgetDefender
{
    public function handle($request, Closure $next)
    {
        $agent=" ". $_SERVER['HTTP_USER_AGENT'];
        if (strpos($agent,"disco pump") ||
            strpos($agent,"offline explorer") ||
            strpos($agent,"teleport") ||
            strpos($agent,"webzip") ||
            strpos($agent,"webcopier") ||
            strpos($agent,"wget") ||
            strpos($agent,"flashget") ||
            strpos($agent,"cis te") ||
            strpos($agent,"dts agent") ||
            strpos($agent,"webreaper") ||
            strpos($agent,"httrack") ||
            strpos($agent,"web downloader")) {
            die("access denied");
        }
        return $next($request);
    }
}
