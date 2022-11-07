<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/','latihan01@index');
Route::get('/',function () {
    return view('latihan01');
});

route::get('/produk', function(){
    echo "List nama Barang yang tersedia";
});
route::get('/produk/minuman', function(){
    echo "List nama minuman yang Tersedia";
});
route::get('/produk/produk-{kodeproduk?}',function($kodeproduk=3){
    echo "<h3>Produk ID: ".$kodeproduk."</h3>";
});
route::get('/prd/{id?}',function($id){
    $produkn= "";
    if($id == '1' ){
        $produk = "kacang garuda";
    }
    else {
        if ($id == '2'){
            $produk = "Kacang Duo Kelinci";
        }
        else{
            if ($id == '3'){
                $produk = "Kacang Rosta";
            }
        }
    }
    echo "Nama Produk: ".$produk;
})->where('id','[0-9]+');

route :: get('/prdswitch/{id?}', function($id=0){
    $produk= " ";
    switch($id){
        case "1";
            $produk = "puspa";
            break;
        case "2";
            $produk = "arhys";
            break;
        case "3";
            $produk = "dewik";
            break;
        default:
            $produk = "alfa";
            break;
    }
    echo "nama mantan: ".$produk;
});
route :: get ("/mantan_saya",function(){
    return view("coba");
});

route::view ('/list_mantan','coba');


route::get('/mantan/{teman}',function($nama){
    return view('teman',compact('nama'));
});