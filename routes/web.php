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


Route::match(['get','post'],'/admin/forget_password', [App\Http\Controllers\Admin\AdminController::class,"forget_password"])->name('admin.forget_password');


Route::match(['get','post'],'/admin/slider', [App\Http\Controllers\Admin\AdminController::class,"index"])->name('admin.slider.index');

Route::group(['middleware'=>['admin']],function(){
Route::name('admin.')->prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class,"dashboard"])->name('dashboard');
    Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class,"logout"]);

       //AdminAccount start 
       Route::get('/account',[App\Http\Controllers\Admin\AdminController::class,'account_setting'])->name('account_setting');
       Route::get('/account/setting',[App\Http\Controllers\Admin\AdminController::class,'setting'])->name('setting');
       Route::post('/account/update',[App\Http\Controllers\Admin\AdminController::class,'account_update'])->name('account.update');
       Route::get('/password/setting',[App\Http\Controllers\Admin\AdminController::class,'password_setting'] )->name('password.setting');
       Route::get('/check-pwd', [App\Http\Controllers\Admin\AdminController::class,'checkPass'])->name('admin.checkPass');
       Route::post('/admin/update-pwd',[App\Http\Controllers\Admin\AdminController::class,'updatePassword'])->name('password.updatePassword');
       //AdminAccount End
   

    //UserController Start 
    Route::get('/user/{id?}',[App\Http\Controllers\Admin\UserController::class,'index'])->name('user');
    Route::post('/user/edit/{id}',[App\Http\Controllers\Admin\UserController::class,'edit'])->name('user.edit');
Route::get('/delete-user/{id}',[App\Http\Controllers\Admin\UserController::class,'delete'])->name('user.delete');
    //UserController End


    
//EMailControllerStart 
Route::post('/user/sendMail',[App\Http\Controllers\Admin\EmailController::class,'userEmail'])->name('user.sendMail');
Route::post('/all_user/sendMail',[App\Http\Controllers\Admin\EmailController::class,'all_user'])->name('all_user.sendMail');
//EMailCOntroller End

//ModuleControllerStart 

Route::get('/module', [App\Http\Controllers\Admin\ModuleController::class,"index"])->name('module');
Route::post('/module/insert/{id?}', [App\Http\Controllers\Admin\ModuleController::class,"insert"])->name('module.insert');
Route::get('/delete-module/{id}',[App\Http\Controllers\Admin\ModuleController::class,'delete'])->name('module.delete');
//ModuleController End


//CategoryControllerStart 

Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class,"index"])->name('category');
Route::get('/application/category', [App\Http\Controllers\Admin\CategoryController::class,"application"])->name('application.category');
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

//OrderController STart

Route::get('/order', [App\Http\Controllers\Admin\OrderController::class,"index"])->name('order');
Route::get('/order/details/{id}', [App\Http\Controllers\Admin\OrderController::class,"details"])->name('order.details');
Route::get('/delete-order/{id}',[App\Http\Controllers\Admin\OrderController::class,'delete'])->name('order.delete');
Route::post('/order/update-status/{id}',[App\Http\Controllers\Admin\OrderController::class,'order_status'])->name('order.update.status');
Route::get('/invoice/{id}',[App\Http\Controllers\Admin\OrderController::class,'invoice'])->name('order.invoice');

//OrderController End

//WallController Start
Route::get('/wall', [App\Http\Controllers\Admin\WallController::class,"index"])->name('wall');
Route::post('/wall/insert/{id?}', [App\Http\Controllers\Admin\WallController::class,"insert"])->name('wall.insert');
Route::get('/delete-wall/{id}',[App\Http\Controllers\Admin\WallController::class,'delete'])->name('wall.delete');
//WallController End
//FloorController Start
Route::get('/floor', [App\Http\Controllers\Admin\FloorController::class,"index"])->name('floor');
Route::post('/floor/insert/{id?}', [App\Http\Controllers\Admin\FloorController::class,"insert"])->name('floor.insert');
Route::get('/delete-floor/{id}',[App\Http\Controllers\Admin\FloorController::class,'delete'])->name('floor.delete');
//FloorController End
//ColorCategoryController Start
Route::get('/colorCategory', [App\Http\Controllers\Admin\ColorCategoryController::class,"index"])->name('colorCategory');
Route::post('/colorCategory/insert/{id?}', [App\Http\Controllers\Admin\ColorCategoryController::class,"insert"])->name('colorCategory.insert');
Route::get('/delete-colorCategory/{id}',[App\Http\Controllers\Admin\ColorCategoryController::class,'delete'])->name('colorCategory.delete');
//ColorCategoryController End

//ColorCategoryController Start
Route::get('/colorShade', [App\Http\Controllers\Admin\ColorShadeController::class,"index"])->name('colorShade');
Route::post('/colorShade/insert/{id?}', [App\Http\Controllers\Admin\ColorShadeController::class,"insert"])->name('colorShade.insert');
Route::get('/delete-colorShade/{id}',[App\Http\Controllers\Admin\ColorShadeController::class,'delete'])->name('colorShade.delete');
//ColorCategoryController End

//ColorCategoryController Start
Route::get('/colorShadeImage', [App\Http\Controllers\Admin\ColorShadeImageController::class,"index"])->name('colorShadeImage');
Route::post('/colorShadeImage/insert/{id?}', [App\Http\Controllers\Admin\ColorShadeImageController::class,"insert"])->name('colorShadeImage.insert');
Route::get('/delete-colorShadeImage/{id}',[App\Http\Controllers\Admin\ColorShadeImageController::class,'delete'])->name('colorShadeImage.delete');
//ColorCategoryController End

//BranchController Start
Route::get('/branch', [App\Http\Controllers\Admin\BranchController::class,"index"])->name('branch');
Route::post('/branch/insert/{id?}', [App\Http\Controllers\Admin\BranchController::class,"insert"])->name('branch.insert');
Route::get('/delete-branch/{id}',[App\Http\Controllers\Admin\BranchController::class,'delete'])->name('branch.delete');
//BranchController ENd

//NewController Start 
Route::get('/news', [App\Http\Controllers\Admin\NewsController::class,"index"])->name('news');
Route::post('/news/insert/{id?}', [App\Http\Controllers\Admin\NewsController::class,"insert"])->name('news.insert');
Route::get('/delete-news/{id}',[App\Http\Controllers\Admin\NewsController::class,'delete'])->name('news.delete');
//NewController End

//NewController Start 
Route::get('/videoGallery', [App\Http\Controllers\Admin\VideoGalleryController::class,"index"])->name('videoGallery');
Route::post('/videoGallery/insert/{id?}', [App\Http\Controllers\Admin\VideoGalleryController::class,"insert"])->name('videoGallery.insert');
Route::get('/delete-videoGallery/{id}',[App\Http\Controllers\Admin\VideoGalleryController::class,'delete'])->name('videoGallery.delete');
//NewController End

//NewController Start 
Route::get('/imageGallery', [App\Http\Controllers\Admin\ImageGalleryController::class,"index"])->name('imageGallery');
Route::post('/imageGallery/insert/{id?}', [App\Http\Controllers\Admin\ImageGalleryController::class,"insert"])->name('imageGallery.insert');
Route::get('/delete-imageGallery/{id}',[App\Http\Controllers\Admin\ImageGalleryController::class,'delete'])->name('imageGallery.delete');
//NewController End

//AboutusController start 
Route::match(['get','post'],'/about', [App\Http\Controllers\Admin\AboutusController::class,"about_us"])->name('about_us');

//AboutusController End

//ApplicationController start 

Route::get('/application', [App\Http\Controllers\Admin\ApplicationController::class,"index"])->name('application');
Route::match(['get','post'],'/application/insert/{id?}', [App\Http\Controllers\Admin\ApplicationController::class,"insert"])->name('application.insert');
Route::get('/delete-application/{id}',[App\Http\Controllers\Admin\ApplicationController::class,'delete'])->name('application.delete');
//Application Controller End


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
});



//UserSider

Route::get('/', [App\Http\Controllers\Front\IndexController::class,'index']);
Route::match(['get','post'],'/user/search', [App\Http\Controllers\Front\IndexController::class,'searchProducts'])->name('front.search');

Route::get('/products/{slug?}', [App\Http\Controllers\Front\IndexController::class,'category_product']);
Route::post('/get-product-price', [App\Http\Controllers\Front\IndexController::class,'getProductPrice'])->name('get_price');

Route::get('/color-shades/{slug?}', [App\Http\Controllers\Front\ColorController::class,'color']);
Route::get('/color-shades/color-shades', [App\Http\Controllers\Front\ColorController::class,'color_shade']);
Route::get('/color-shades/wall', [App\Http\Controllers\Front\ColorController::class,'wall']);
Route::get('/color-shades/floor', [App\Http\Controllers\Front\ColorController::class,'floor']);
Route::match(['get','post'],'/color-shades-seacrh/color-shade-search', [App\Http\Controllers\Front\ColorController::class,'color_search']);
Route::match(['get','post'],'/color-shades-seacrh/color-shade-search/color-serach', [App\Http\Controllers\Front\ColorController::class,'search']);
Route::get('/color-shades-seacrh/color-shade-search/color-serach-details/{id}', [App\Http\Controllers\Front\ColorController::class,'search_details']);
Route::get('/color-shades-samples/sample-service', [App\Http\Controllers\Front\ColorController::class,'sample_service']);
Route::get('/user/get_subcategory',[App\Http\Controllers\Front\ColorController::class,'get_subcat'])->name('user.get_subcategory');
// ApplicationController


Route::get('/applications/interior-design/{slug}', [App\Http\Controllers\Front\ApplicationController::class,'interior_design']);

//CompanyController 

Route::get('/company/about-us', [App\Http\Controllers\Front\CompanyController::class,'about_us']);
Route::get('/company/news', [App\Http\Controllers\Front\CompanyController::class,'news']);
Route::get('/company/news/details/{slug}', [App\Http\Controllers\Front\CompanyController::class,'news_details']);
Route::get('/company/brances', [App\Http\Controllers\Front\CompanyController::class,'brances']);


Route::get('/media/library', [App\Http\Controllers\Front\CompanyController::class,'mediya_library']);
Route::get('/media/library/image', [App\Http\Controllers\Front\CompanyController::class,'image']);
Route::get('/media/library/video', [App\Http\Controllers\Front\CompanyController::class,'video']);

//UserCOntrollerstart 

Route::match(['get','post'],'user/registration', [App\Http\Controllers\User\UserController::class,'registration'])->name('user.registration');
Route::match(['get','post'],'user/login', [App\Http\Controllers\User\UserController::class,'login'])->name('user.login');
Route::match(['get','post'],'user/forget-password', [App\Http\Controllers\User\UserController::class,'forget_password'])->name('user.forget-password');
Route::get('confirm/{code}' ,[App\Http\Controllers\User\UserController::class,'confirmAccount'])->name('user.confirm');

//userCpntroller End

//CartController Start 
Route::match(['get','post'],'/user/cart', [App\Http\Controllers\User\CartController::class,'cart'])->name('cart');
Route::match(['get','post'],'/add-cart', [App\Http\Controllers\User\CartController::class,'addtocart'])->name('add-cart');
Route::get('/cart/update-quantity/{id}/{quantity}', [App\Http\Controllers\User\CartController::class,'updateCartQuantity'])->name('cart.update');
Route::match(['get','post'],'/cart/delete-product/{id}', [App\Http\Controllers\User\CartController::class,'deleteCartProduct'])->name('cart.delete');
//CartController End

Route::group(['middleware'=>['auth']],function(){
    Route::get('/logout', [App\Http\Controllers\User\UserController::class,'logout'])->name('user.logout');
    Route::match(['get','post'],'/order', [App\Http\Controllers\User\OrderController::class,'order'])->name('order');
        Route::match(['get','post'],'/checkout', [App\Http\Controllers\User\OrderController::class,'checkout'])->name('user.checkout');
        Route::get('user/order/details', [App\Http\Controllers\User\OrderController::class,'order_details'])->name('user.order.details');
});

//Extra Work

Route::get('setting/legal-notice', [App\Http\Controllers\GeneralSettingController::class,'legal_notice']);
Route::get('setting/privacy-policy', [App\Http\Controllers\GeneralSettingController::class,'privacy_policy']);