<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class ProductsController extends Controller
{
    //
    public function searchRedis(Request $request)
    {
        error_log("Search redis begin". microtime(true) );
        $name = $request->name;
        $redis = Redis::connection();
        $result = $redis->hget(Constant::KEY, $name);
        error_log($result);
        $redis->quit();
        error_log("search redis end". microtime(true));
        return $result;
    }

    public function searchMysql(Request $request)
    {
//        error_log("searchMysql begin".  time());
        error_log("searchMysql begin".  microtime(true));
        //
        $name = $request->name;
        error_log($name);
        $product = DB::table('products')->where('name',$name)->get();
//        dd($product);
        error_log("end ...". microtime(true));
        error_log($product->first()->weight);
        return $product->first()->weight;
    }

    public function indexRedis()
    {
        error_log("Index redis");
        error_log("begin  ". time());
        $arr_product = DB::table('products')->limit(10000)->get();
//        dd($arr_product);
        $redis = Redis::connection();

//        dd($redis);
        $arr_product->map(function ($product) use ($redis){
            $redis->hset(Constant::KEY, $product->name, $product->weight);
        });
         $redis->quit();
        error_log("end index  ". time());
        return "succcess";
    }
}
