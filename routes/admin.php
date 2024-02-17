<?php
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CityController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\LinkController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\SupervisorController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\UserAddressController;
use App\Http\Controllers\Backend\ShippingCompanyController;
use App\Http\Controllers\Backend\PaymentMethodController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\QuestionnaireController;
use App\Http\Controllers\Backend\faqController;
use App\Http\Controllers\Backend\PageSettingController;
use App\Http\Controllers\Backend\BlogCatController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\reviewsController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\affiliateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes(['verify' => true]);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
    Route::get('/forgot-password', [AdminAuthController::class, 'forgotPassword'])->name('forgot_password');
});

Route::group(['middleware' => ['roles']], function () {
    Route::get('/', [BackendController::class, 'index'])->name('index');
    Route::get('/account-settings', [AdminAuthController::class, 'accountSetting'])->name('account_setting');
    Route::patch('/account-settings', [AdminAuthController::class, 'updateAccount'])->name('account_setting.update');
    Route::get('/categories/{category}/remove-image', [CategoryController::class, 'removeImage'])->name('categories.remove_image');
    Route::resource('categories', CategoryController::class);
    Route::post('/products/remove-image', [ProductController::class, 'removeImage'])->name('products.remove_image');
    Route::resource('products', ProductController::class);
    Route::resource('tags', TagController::class);
    Route::resource('coupons', CouponController::class);
    Route::resource('reviews', ReviewController::class);
    Route::get('/supervisors/{supervisor}/remove-image', [SupervisorController::class, 'removeImage'])->name('supervisors.remove_image');
    Route::resource('supervisors', SupervisorController::class);
    Route::resource('countries', CountryController::class);
    Route::get('/states/get-states', [StateController::class, 'get_states'])->name('states.get_states');
    Route::resource('states', StateController::class);
    Route::get('/cities/get-cities', [CityController::class, 'get_cities'])->name('cities.get_cities');
    Route::resource('cities', CityController::class);
    Route::get('users/get-users', [UserController::class, 'get_users'])->name('users.get_users');
    Route::resource('users', UserController::class);
    Route::resource('user_addresses', UserAddressController::class);
    Route::resource('shipping_companies', ShippingCompanyController::class);
    Route::resource('payment_methods', PaymentMethodController::class);
    Route::resource('orders', OrderController::class)->except('create', 'edit');
    Route::resource('settings', SettingController::class)->only('index', 'update');
    Route::resource('contacts', ContactController::class)->except('create', 'edit', 'update');
    Route::resource('links', LinkController::class)->except('show');
    Route::resource('pages', PageController::class);
    Route::any('/order-qn', [OrderController::class, 'QN'])->name('order.qn');


    Route::get('questioners/', [QuestionnaireController::class, 'index'])->name('questioners.index');
    Route::get('questioners/create', [QuestionnaireController::class, 'create'])->name('questioners.create');
    Route::post('questioners/addQuestion', [QuestionnaireController::class, 'addQuestion'])->name('questioners.addQuestion');
    Route::get('questioners/edit/{id}', [QuestionnaireController::class, 'editaQues'])->name('questioners.edit');
    Route::patch('questioners/updateaQuestion', [QuestionnaireController::class, 'updateaQuestion'])->name('questioners.updateaQuestion');
    Route::delete('questioners/destroyaQuestion/{id}', [QuestionnaireController::class, 'destroyAQues'])->name('questioners.destroyAQues');
    Route::get('/questioners/list',[QuestionnaireController::class,'list'])->name('questionerList.index');
    Route::get('/questioners/show',[QuestionnaireController::class,'show'])->name('questionerList.show');
    
    //faq routes
    Route::get('faq/', [faqController::class, 'index'])->name('faq.index');
    Route::get('faq/create', [faqController::class, 'create'])->name('faq.create');
    Route::post('faq/store', [faqController::class, 'store'])->name('faq.store');
    Route::get('faq/edit/{id}', [faqController::class, 'editfaq'])->name('faq.edit');
    Route::patch('faq/updateafaq', [faqController::class, 'updateafaq'])->name('faq.updateafaq');
    Route::get('faq/destroyafaq/{id}', [faqController::class, 'destroyfaq'])->name('faq.destroyfaq');
    
    //blogcategory route
    Route::get('blogcategories/', [BlogCatController::class, 'index'])->name('blogcategories.index');
    Route::get('blogcategories/create', [BlogCatController::class, 'create'])->name('blogcategories.create');
    Route::post('blogcategories/store', [BlogCatController::class, 'store'])->name('blogcategories.store');  
    Route::get('blogcategories/edit/{id}', [BlogCatController::class, 'editablogcat'])->name('blogcategories.edit');
    Route::patch('blogcategories/updateBlogCatgeory', [BlogCatController::class, 'updateBlogCatgeory'])->name('blogcategories.updateBlogCatgeory');
    Route::get('blogcategories/destroyBlogCatgeory/{id}', [BlogCatController::class, 'destroyBlogCatgeory'])->name('blogcategories.destroyBlogCatgeory');
   
    //blogs route
    Route::get('blogs/', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs/store', [BlogController::class, 'store'])->name('blogs.store');  
    Route::get('blogs/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::patch('blogs/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::get('blogs/destroy/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    //ratingnreviews route
    Route::get('reviews/', [reviewsController::class, 'index'])->name('reviewsnratings.index');
    Route::get('reviews/create', [reviewsController::class, 'create'])->name('reviewsnratings.create');
    Route::post('reviews/store', [reviewsController::class, 'store'])->name('reviewsnratings.store');  
    Route::get('reviews/edit/{id}', [reviewsController::class, 'edit'])->name('reviewsnratings.edit');
    Route::post('reviews/update', [reviewsController::class, 'update'])->name('reviewsnratings.update');
    Route::get('reviews/destroy/{id}', [reviewsController::class, 'destroy'])->name('reviewsnratings.destroy');

    // Settings Page Route  
    Route::get('pagesetting/', [PageSettingController::class, 'page_list'])->name('pagesetting.page_list');
    Route::get('/pagesetting/edit/{page_type}', [PageSettingController::class, 'edit'])->name('pagesetting.edit_page');
    Route::post('/pagesetting/edit/{page_type}', [PageSettingController::class, 'update'])->name('pagesetting.update_page');
    
    /*patient routes */
    Route::get('/patient/patient_history', [PatientController::class, 'patient_history'])->name('patient_history');

    /* route for notification reminder*/
    Route::get('/reminder', [PatientController::class, 'reminder'])->name('reminder');
    Route::get('/send_notification/{id}', [PatientController::class, 'send_notification'])->name('send_notification');

    /* shipment */
    Route::post('/shipment',[OrderController::class, 'order_shipment'])->name('orders.order_shipment');
    Route::any('/delivery/{id}',[OrderController::class, 'delivery'])->name('orders.delivery');
    
    //affiliate
    Route::any('/affiliates', [affiliateController::class, 'admin_list'])->name('affiliate.index');
    Route::any('/affiliates-create', [affiliateController::class, 'create'])->name('affiliate.create');
    Route::any('/affiliates-edit/{user}', [affiliateController::class, 'edit'])->name('affiliate_edit');
    Route::any('/affiliate_update/{user}', [affiliateController::class, 'update'])->name('affiliate_update');
    Route::any('/affiliate_delete/{user}', [affiliateController::class, 'destroy'])->name('affiliate_delete');
    Route::any('/assignCoupon/{user}', [affiliateController::class, 'assignCoupon'])->name('assign.coupon');
    Route::any('/affiliate-assigncoupon', [affiliateController::class, 'affiliateassign'])->name('affiliateassign.coupon');
    Route::any('/affiliates-coupon-show', [affiliateController::class, 'affiliateCouponShow'])->name('affiliate.affiliateCouponShow');
    Route::any('/affiliates-coupon', [affiliateController::class, 'affiliatecoupon'])->name('affiliate.affiliatecoupon');
    Route::any('/affiliates-coupon-create', [affiliateController::class, 'affiliatecoupon_create'])->name('affiliate.affiliatecoupon_create');
    Route::any('/assignCouponlist/{user}', [affiliateController::class, 'assignCouponList'])->name('assign.couponlist');
    Route::any('/affiliateCouponUsers/{user}', [affiliateController::class, 'affiliateCouponUsers'])->name('affiliateCouponUsers');
    Route::any('/affiliatePayment/{id}', [affiliateController::class, 'affiliatePayment'])->name('affiliatePayment');
    Route::any('/update/{user}', [affiliateController::class, 'update_request'])->name('update.request');
    Route::any('/accept_payment_request/{user}', [affiliateController::class, 'accept_payment_request'])->name('accept.payment.request');
    Route::any('/accept_payment', [affiliateController::class, 'accept_payment'])->name('accept.payment');
    Route::any('/final-update/{id}', [affiliateController::class, 'final_request'])->name('final.request');

     //affiliate coupon
     Route::any('/affiliate_coup_delete/{id}', [affiliateController::class, 'affiliate_coup_delete'])->name('affiliate_coup_delete');
     Route::any('/affiliate_coup_edit/{id}', [affiliateController::class, 'affiliate_coup_edit'])->name('affiliate_coup_edit');
     Route::post('/affiliate_coup_update', [affiliateController::class, 'affiliate_coup_update'])->name('affiliate_coup_update'); 

});

