<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\Payment\PaypalController;
use App\Http\Controllers\Frontend\Payment\TapController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShopTagController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\AddAdress;
use App\Http\Controllers\Frontend\StripeController;
use App\Http\Controllers\Frontend\QuestionnaireController;
use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\GooglePayController;
use App\Http\Livewire\Addtocart;
use Illuminate\Support\Facades\Artisan;
use Livewire\Livewire;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\MailChimpController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\Questionnaire\Questionnaire;

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hair-photo-guide',function() {
    return view('frontend.pages.photo_guide');
});
Route::get('/beard-photo-guide',function() {
    return view('frontend.pages.photo_guide_beard');
});
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/shop', [ShopController::class, 'home'])->name('shop.home');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('page.contactus');
Route::post('/post/contact-us', [PageController::class, 'postContactus'])->name('page.post.contactus');
// Route::post('/post/contact-us', [MailChimpController::class, 'index'])->name('page.post.contactus');
/* 10may23 */
Route::get('/faq', [PageController::class, 'faq'])->name('page.showfaq');
Route::get('/aboutus', [PageController::class, 'pageaboutus'])->name('page.aboutus');
Route::get('/faqsearch', [PageController::class, 'faqsearch'])->name('faqsearch');
Route::get('/agent_health', [PageController::class, 'agent_health'])->name('agent_health');

/* 18may23 */
Route::get('/blog_list', [PageController::class, 'blog_list'])->name('blog_list');
Route::get('/blog_detail/{id}', [PageController::class, 'blog_detail'])->name('blog_detail');
//19may23
Route::get('/doctor/signaturepad', [SignaturePadController::class, 'index']);
Route::post('/doctor/signaturepad', [SignaturePadController::class, 'upload'])->name('signaturepad.upload');
//generate e-pdf
Route::get('generate-pdf/{id}/{catid}/{session_id}', [PDFController::class, 'generatePDF'])->name('generate.epdf');

Route::get('/downloadPDF/{id}','PDFController@downloadPDF');

Route::post('prescription/submit', [PDFController::class, 'prescription'])->name('prescription.submit');

Route::get('/questionnaireCat', function(){
    return view('frontend.questionnaire.mainPage');
});


Route::get('/sexMain', function(){
    return view('frontend.product.sexMainPage');
});

Route::get('/shop/{slug?}', [ShopController::class, 'index'])->name('shop.index');

Route::get('/shop/tag/{slug}', [ShopTagController::class, 'index'])->name('shop.tag');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
//(26jun23)
Route::get('/product/{slug?}', [ProductController::class, 'show'])->name('product.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/page/{slug}', [PageController::class, 'show'])->name('page.show');


// Login by social media [ Facebook - Twitter - Google ]
Route::get('login/{provider}', [LoginController::class, 'redirectToProvider'])->name('social_login');
Route::get('login/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('social_login_callback');
Route::get('dem_test', [LoginController::class, 'handleProviderCallback'])->name('social_login_callback');


Route::get('/product_test', ['as'=>'testing',function() {
    return view('frontend.product.beard-growth');
 }]);

 Route::get('/product_test2', ['as'=>'testing',function() {
    return view('frontend.product.hair-loss');
 }]);
Route::get('/product_test3', ['as'=>'testing',function() {
    return view('frontend.product.pre-mature');
 }]);



Route::middleware(['middleware' => 'auth', 'verified','user-rolecheck'])->group(function() {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::patch('/user/profile', [UserController::class, 'updateProfile'])->name('user.update_profile');
    Route::get('/user/profile/remove-image', [UserController::class, 'removeImage'])->name('user.remove_image');
    Route::get('/user/addresses', [UserController::class, 'addresses'])->name('user.addresses');
    Route::get('/user/orders', [UserController::class, 'orders'])->name('user.orders');
    Route::get('/user/order_detail/{id}', [UserController::class, 'order_detail'])->name('order.detail');
    Route::get('/user/cancel_order/{id}', [UserController::class, 'cancel_order'])->name('cancel.order');
    Route::post('/update_address', [UserController::class, 'update_address'])->name('update.address');
    Route::post('/update_bill_address', [UserController::class, 'update_bill_address'])->name('update.bill.address');
    Route::get('/delete_address/{id}', [UserController::class, 'delete_address'])->name('address.delete');

});

Route::get('page_ques', [UserController::class, 'page_ques'])->name('page.ques');

Route::get('/questionnaire/store',[QuestionnaireController::class,'storeAquestion'])->name('questionnaire.storeAquestion');
Route::get('/questionnaire/storeBeared',[QuestionnaireController::class,'storeBeared'])->name('questionnaire.storeBeared');
Route::get('/questionnaire/storeHairLoss',[QuestionnaireController::class,'storeHairLoss'])->name('questionnaire.storeHairLoss');
Route::get('/questionnaire/storeerectiledysfunction',[QuestionnaireController::class,'storeerectiledysfunction'])->name('questionnaire.storeerectiledysfunction');
Route::get('/questionnaire/storeApremature',[QuestionnaireController::class,'storeApremature'])->name('questionnaire.storeApremature');
Route::get('/user/email/{email}',[UserController::class,'isExist'])->name('user.exist');
Route::post('/temp/email',[CheckoutController::class,'setTempEmail'])->name('temp_email');


Route::get('/questionnaire/{id}',[QuestionnaireController::class,'index'])->name('questionnaire.index');
Route::get('/abortQuestion',[QuestionnaireController::class,'abortQuestionnaire'])->name('questionnaire.abortQuestionnaire');



Route::middleware(['middleware' => 'auth', 'verified','doctor-rolecheck'])->group(function() {
    Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
    Route::get('/doctor/profile', [DoctorController::class, 'profile'])->name('doctor.profile');
    Route::patch('/doctor/profile', [DoctorController::class, 'updateProfile'])->name('doctor.update_profile');
    Route::get('/doctor/profile/remove-image', [DoctorController::class, 'removeImage'])->name('doctor.remove_image');
    Route::get('/doctor/orders', [DoctorController::class, 'orders'])->name('doctor.orders');
    Route::get('/doctor/patient_history', [DoctorController::class, 'patient_history'])->name('doctor.patient_history');
    Route::get('/doctor/patient_profile/{id}', [DoctorController::class, 'patient_profile'])->name('doctor.patient_profile');
    Route::get('/doctor/patient_detail/', [DoctorController::class, 'patient_detail'])->name('doctor.patient_patient_detail');
    Route::get('/doctor/new_patient_history', [DoctorController::class, 'new_patient_history'])->name('doctor.new_patient_history');
    Route::get('doctor/patient/questionnaire', [DoctorController::class, 'patient_questionnaire'])->name('doctor.patient.questionnaire');
    Route::get('doctor/patient/all-orders', [DoctorController::class, 'patient_allorders'])->name('doctor.patient.all-orders');
});



Route::any('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::any('checkout/final', [CheckoutController::class, 'final_checkout'])->name('final.checkout');
Route::any('checkout/place_order', [CheckoutController::class, 'place_order'])->name('place.order');
Route::get('checkout/payment-page', [CheckoutController::class, 'payment_page'])->name('payment.page');
Route::any('checkout/success1', [CheckoutController::class, 'success'])->name('checkout.success1');
Route::post('checkout/applycoupon', [CheckoutController::class, 'apply_coupon'])->name('checkout.applycoupon');
Route::get('checkout/getcoupon/{code}', [CheckoutController::class, 'get_coupon'])->name('checkout.getcoupon');
Route::post('checkout/subscription_update', [CheckoutController::class, 'subscription_update'])->name('subscription.update');
Route::post('/google-payment', [GooglePayController::class, 'store'])->name('googlepayment.store');
Route::post('googlepay-config', [GooglePayController::class, 'setConfig'])->name('googlepay.config');

Route::middleware(['middleware' => 'auth', 'checkCart'])->group(function() {
    //google pay gateway



    // PayPal gateway
    Route::post('/payment', [PaypalController::class, 'store'])->name('payment.store');
    Route::get('/payment/{orderId}/cancelled', [PaypalController::class, 'cancelled'])->name('payment.cancelled');
    Route::get('/payment/{orderId}/completed', [PaypalController::class, 'completed'])->name('payment.completed');
    Route::get('/payment/webhook/{order?}/{env?}', [PaypalController::class, 'webhook'])->name('payment.webhook.ipn');
    // Tap gateway
    Route::get('/payment/charge-request', [TapController::class, 'chargeRequest'])->name('checkout.charge_request');
    Route::get('/payment/charge-update', [TapController::class, 'chargeUpdate'])->name('checkout.charge_update');
    Route::get('pay', [StripeController::class,'index']);
    Route::post('stripe', [StripeController::class, 'payment'])->name('stripe.post');
});



 Route::get('/product/{slug?}', [ProductController::class, 'product_detail'])->name('product.detail');
 Route::any('/register-new', [HomeController::class, 'RegisterNew'])->name('register_new');

//code to save address
 Route::post('/delivery_address', [HomeController::class, 'delivery_address'])->name('delivery_address');
 Route::post('/billing_address', [HomeController::class, 'save_bill_address'])->name('save.bill.address');

//route for after questuonnair complete
Route::any('/cart_product', [CheckoutController::class, 'cart_product'])->name('cart_product');

//rooutes fro affiliates
Route::any('/affiliate/index', [AffiliateController::class, 'index'])->name('affiliate.index');
Route::any('/affiliate/signup', [AffiliateController::class, 'signup_page'])->name('affiliate.signup.page');
Route::any('/affiliate/create', [AffiliateController::class, 'create'])->name('affiliate.create');
Route::any('affiliate/dashboard', [AffiliateController::class, 'dashboard'])->name('affiliate.dashboard');
Route::any('affiliate/profile', [AffiliateController::class, 'affiliate_profile'])->name('affiliate.profile');
Route::any('affiliate/update', [AffiliateController::class, 'affiliate_update'])->name('affiliate.update');
Route::any('affiliate/wallet', [AffiliateController::class, 'affiliate_wallet'])->name('affiliate.wallet');
Route::any('affiliate/payment/{array?}', [AffiliateController::class, 'payment_request'])->name('affiliate.payment');
Route::any('affiliate/users', [AffiliateController::class, 'affiliate_users'])->name('affiliate.users');
Route::post('affiliate/affiliate_change_req', [AffiliateController::class, 'affiliate_change_req'])->name('affiliate.change.req');
Route::any('affiliate/wallet_list', [AffiliateController::class, 'wallet_list'])->name('wallet.list');


Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    echo "Cache has been cleared.";
});
