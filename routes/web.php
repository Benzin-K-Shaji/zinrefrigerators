<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ucontroller;
use App\Http\Controllers\pcontroller;


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


Route::post('/login',[ucontroller::class,'store']);
Route::post('/logs',[ucontroller::class,'logs']);
Route::get('/logout',[ucontroller::class,'logout']);

Route::post('/app',[pcontroller::class,'store']);

Route::post('edit/update',[pcontroller::class,'update']);
Route::post('/destroy/{id}',[pcontroller::class,'destroy']);
Route::post('add_to_cart',[pcontroller::class,'addtocart']);
// Route::get('/cart',[pcontroller::class , 'cartview' ] );


Route::post('/psearch',[pcontroller::class,'search']);
Route::post('/usearch',[pcontroller::class,'usearch']);
Route::post('/orderplace',[pcontroller::class,'orderplace']);

route::post('/ordereditprocess/{id}',[pcontroller::class,'updateorder']);
Route::get('removecart/{id}',[pcontroller::class , 'removecart' ] );
route::get('/card', [pcontroller::class,'card']);
route::get('/cancelorder/{id}/{userid}', [pcontroller::class,'cancelorder']);
Route::get('/edit/{pid}',[pcontroller::class,'edit']);
Route::get('/delete/{id}',[pcontroller::class,'deleteview']);
Route::get('/cartadd/{pid}',[pcontroller::class,'cartadd']);
route::get('/order/{id}/edit', [pcontroller::class,'orderedit']);




Route::group(['middleware'=>['AuthCheck']],function(){

    
    Route::get('/cg',[ucontroller::class , 'cgallery' ] );
    Route::get('/cc',[ucontroller::class , 'ccontact' ] );
    Route::get('/',[ucontroller::class , 'chome' ] );
    Route::get('/l',[ucontroller::class , 'create' ] );
    Route::get('reg',[ucontroller::class , 'index' ] );
    Route::get('/ug',[ucontroller::class , 'ugallery' ] );
    Route::get('/uh',[ucontroller::class , 'uhome' ] );
    Route::get('/uc',[ucontroller::class , 'ucontact' ] );
    Route::get('/ah',[ucontroller::class , 'admin' ] );
    Route::get('/ap',[pcontroller::class , 'create' ] );
    Route::get('/pv',[pcontroller::class,'prodview']);
Route::get('/userview',[pcontroller::class , 'usrview' ] );

Route::get('/cartlist',[pcontroller::class , 'cartlist' ] );
Route::get('ordernow',[pcontroller::class , 'ordernow' ] );
Route::get('/myorders',[pcontroller::class,'myorder']);
Route::get('/vieworders',[pcontroller::class , 'vieworders' ] );


    




});






