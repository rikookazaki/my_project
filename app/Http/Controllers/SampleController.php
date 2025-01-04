<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {

      // 参照
      $records = DB::connection('mysql')->select("select * from users");

      // 追加
      // $insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'aaa','user1','aaa')");
      // dd($insertResult);
      // $insertResult2 = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'bbb','user2','bbb')");
      // dd($insertResult2);
      // $insertResult3 = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'ccc','user2','ccc')");
      // dd($insertResult3);

      // 削除
      $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'user1'");
      dd($deleteResult);


      return view("sample/index", ["sampleValue" => $sampleValue]);
    }
}