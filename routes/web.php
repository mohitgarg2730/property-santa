<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\Admin\DashboradController;
use App\Http\Controllers\Admin\InquieryController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\CallController;
use App\Http\Controllers\Forntend\CustomRateController;
use App\Http\Controllers\Forntend\BuildPackage;
use App\Http\Controllers\Forntend\BookedCallController;
use App\Http\Controllers\Forntend\TestController;
use App\Models\inquiryee;

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

Route::get('/', function () {
    return view('forntend.home');
})->name('home');

Route::get('/dashborad', function () {
    return view('forntend.dashboard');
})->name('home');


//app_dashboard Routes


Route::get('/forntendlogin' , [LoginController::class, 'forntendLogin']);

Route::get('/customRate' , [CustomRateController::class, 'index']);
Route::get('/cutomRateGetAdminPrice/{id}' , [CustomRateController::class, 'cutomRateGetAdminPrice']);
Route::get('/packageSelect' , [CustomRateController::class, 'packageSelect']);
Route::get('/BuildCustomePackage' , [BuildPackage::class, 'index']);
Route::get('/BuildCustomevactionalPackage' , [BuildPackage::class, 'vactional']);

Route::post('/forntendLoginVerify' , [LoginController::class, 'forntendLoginVerify']);
Route::post('/customRateForm' , [CustomRateController::class, 'customRateFormSetup']);
Route::post('/forntend/signup' , [LoginController::class, 'forntendSignup']);

//custom_login Routes

//custom_step1 Routes
Route::get('/vactionalsummray',function()
{
    return view('forntend.vactional.vactional_summray');
});
Route::get('/vactionaloffer',function()
{
    return view('forntend.vactional.vactional_offer');
});


Route::get('/lock_offer',function()
{
    return view('forntend.lock_offer');
})->name('lock_offer');

// Admin 
// web.php
Route::get('adminlogin',function()
{
    return view('backend.auth.login');
});

    Route::post('/adminValidtion' , [LoginController::class, 'adminValidtion']);

    Route::group(['prefix' => 'admin', 'middleware' => 'AdminIsLogin'], function () {
    Route::resource('dashborad', DashboradController::class);
    Route::resource('inquery', InquieryController::class);
    Route::get('/inqueryViewss/{id}', [InquieryController::class, 'inqueryViews']);
    Route::get('/inqueryDelete/{id}', [InquieryController::class, 'inqueryDelete']);
    Route::get('/getInqueryByAjax', [InquieryController::class, 'getInqueryByAjax']);
    Route::get('/questions' , [QuestionController::class, 'index']);
    Route::get('/questions/updateQuestion/{id}' , [QuestionController::class, 'updateQuestion']);
    Route::get('/furnishedrental' , [QuestionController::class, 'furnishedrental']);
    Route::get('/furnishedquestions/updateQuestion/{id}' , [QuestionController::class, 'furnisheUupdateQuestion']);
    Route::get('inqueryView/{id}', InquieryController::class,'inqueryView');
    Route::get('/vactionalHome' , [QuestionController::class, 'vactionalHome']);
    Route::get('/vactionalHomeQuestion/{id}' , [QuestionController::class, 'vactionalHomeQuestion']);
    Route::get('/CallController' , [CallController::class, 'index']);
    Route::post('/vactionalHomeQuestionUpdate/{id}' , [QuestionController::class, 'vactionalUpdateQuestionPost']);
    Route::post('/updateQuestionPost/{id}' , [QuestionController::class, 'updateQuestionPost']);
    Route::post('/inquerysetprice/{id}', [InquieryController::class, 'inquerySetPrice']);
    Route::post('/furnishedupdateQuestionPost/{id}' , [QuestionController::class, 'furnishedUpdateQuestionPost']);
    Route::post('/furnishedinquerysetprice/{id}', [InquieryController::class, 'FurnishedInquerySetPrice']);
    Route::get('/exportInquery', [InquieryController::class, 'exportInquery']);

});
Route::get('/hellosign', function () {
    return view('forntend.hellosign.hellosign');
     });

/// user login forntend 
        Route::group(['middleware' => 'UserIsLogin'], function () {
        Route::get('/cutomPackageQuestion' , [BuildPackage::class, 'cutomPackageQuestion']);
        Route::get('/cutomPackageFurnishedQuestion' , [BuildPackage::class, 'cutomFurnishedPackageQuestion']);
        });
      
        Route::get('/vactionslHomeQuestion' , [BuildPackage::class, 'vactionslHomeQuestion']);
        // Route::get('/vactionslHomeQuestion' , [BuildPackage::class, 'vactionslHomeQuestion']);
        Route::get('/bookedCall' , [BookedCallController::class, 'index']);
        Route::post('/bookedCall/store', [BookedCallController::class, 'storeSheduleCall']);
        Route::get('/testt' , [TestController::class, 'index']);
