<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});



Route::get('/admin/login', [App\Http\Controllers\Admin\AdminController::class,"login"])->name('admin.login');
Route::post('/adminlogin', [App\Http\Controllers\Admin\AdminController::class,"adminlogin"]);

Route::get('/admin/logout', [App\Http\Controllers\Admin\AdminController::class,"logout"]);
Route::match(['get','post'],'/admin/forget_password', [App\Http\Controllers\Admin\AdminController::class,"forget_password"])->name('admin.forget_password');


Route::match(['get','post'],'/admin/slider', [App\Http\Controllers\Admin\AdminController::class,"index"])->name('admin.slider.index');
Route::name('admin.')->prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class,"dashboard"])->name('dashboard');

//ModuleControllerStart 

Route::get('/module', [App\Http\Controllers\Admin\ModuleController::class,"index"])->name('module');
Route::post('/module/insert/{id?}', [App\Http\Controllers\Admin\ModuleController::class,"insert"])->name('module.insert');
Route::get('/delete-module/{id}',[App\Http\Controllers\Admin\ModuleController::class,'delete'])->name('module.delete');
//ModuleController End


//CategoryControllerStart 

Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class,"index"])->name('category');
Route::post('/category/insert/{id?}', [App\Http\Controllers\Admin\CategoryController::class,"insert"])->name('category.insert');
Route::get('/delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'delete'])->name('category.delete');
//CategoryController End


//SubCategoryControllerStart 

Route::get('/subcategory', [App\Http\Controllers\Admin\SubCategoryController::class,"index"])->name('subcategory');
Route::post('/subcategory/insert/{id?}', [App\Http\Controllers\Admin\SubCategoryController::class,"insert"])->name('subcategory.insert');
Route::get('/delete-subcategory/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'delete'])->name('subcategory.delete');
//SubCategoryController End
//ProductController Start
Route::get('/product', [App\Http\Controllers\Admin\ProductController::class,"index"])->name('product');

Route::get('/get_subcategory',[App\Http\Controllers\Admin\ProductController::class,'get_subcat'])->name('get_subcategory');
Route::match(['get','post'],'/product/insert/{id?}', [App\Http\Controllers\Admin\ProductController::class,"insert"])->name('product.insert');
Route::get('/delete-product/{id}',[App\Http\Controllers\Admin\ProductController::class,'delete'])->name('product.delete');
//ProductControllerEnd

//SliderControllerStart 

Route::get('/slider', [App\Http\Controllers\Admin\SliderController::class,"index"])->name('slider');
Route::post('/slider/insert/{id?}', [App\Http\Controllers\Admin\SliderController::class,"insert"])->name('slider.insert');
Route::get('/delete-slider/{id}',[App\Http\Controllers\Admin\SliderController::class,'delete'])->name('slider.delete');
//SliderController End
//LinkController Start 

Route::get('/link', [App\Http\Controllers\Admin\LinkController::class,"index"])->name('link');
Route::post('/link/insert/{id?}', [App\Http\Controllers\Admin\LinkController::class,"insert"])->name('link.insert');
Route::get('/delete-link/{id}',[App\Http\Controllers\Admin\LinkController::class,'delete'])->name('link.delete');

//LinkController End



Route::get('/cache/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return redirect()->route('admin.dashboard')->with('flash_message_success','System Cache Has Been Removed.');
  })->name('admin-cache-clear');

    Route::match(['get','post'],'/genera_seeting', [App\Http\Controllers\GeneralSettingController::class,"general_setting"])->name('general_setting');
    Route::get('setting/mail_setting', [App\Http\Controllers\GeneralSettingController::class,'mailSetting'])->name('general.mail');
    Route::post('setting/mail_setting_store',[App\Http\Controllers\GeneralSettingController::class,'mailSettingStore'])->name('setting.mailStore');
    Route::get('setting/empty-database', [App\Http\Controllers\GeneralSettingController::class,'emptyDatabase'])->name('setting.emptyDatabase');

});



//UserSider

Route::get('/', [App\Http\Controllers\Front\IndexController::class,'index']);
Route::get('/products/{slug?}', [App\Http\Controllers\Front\IndexController::class,'category_product']);

Route::get('/color-shades/{slug?}', [App\Http\Controllers\Front\ColorController::class,'color']);