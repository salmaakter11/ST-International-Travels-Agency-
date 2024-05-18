<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InvoiceCancelController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceFinalizedController;
use App\Http\Controllers\InvoiceProcesedController;
use App\Http\Controllers\InvoiceProcessingController;
use App\Http\Controllers\LanguageTestController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ResultTypeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\User_Auth\AdminController;
use App\Http\Controllers\User_Auth\AdminManageController;
use App\Http\Controllers\User_Auth\AdminProfileController;
use App\Http\Controllers\User_Auth\UserController;
use App\Http\Controllers\User_Auth\UserManageController;
use Illuminate\Support\Facades\Route;

//Frontend
Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/service', [FrontendController::class, 'service'])->name('frontend.service');
Route::get('/visa-consultancy', [FrontendController::class, 'service_one'])->name('frontend.service_one');
Route::get('/e-visa-processing', [FrontendController::class, 'service_two'])->name('frontend.service_two');
Route::get('/one-way-collection', [FrontendController::class, 'service_three'])->name('frontend.service_three');
Route::get('/document-legalization', [FrontendController::class, 'service_four'])->name('frontend.service_four');
Route::get('/about-us', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/team-member', [FrontendController::class, 'team'])->name('frontend.team');
Route::get('/partner', [FrontendController::class, 'partner'])->name('frontend.partner');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/md-message', [FrontendController::class, 'mdmessage'])->name('frontend.mdmessage');
Route::get('/notice', [FrontendController::class, 'notice'])->name('frontend.notice');
Route::get('/dubai', [FrontendController::class, 'dubai'])->name('frontend.dubai');
Route::get('/india', [FrontendController::class, 'india'])->name('frontend.india');
Route::get('/china', [FrontendController::class, 'china'])->name('frontend.china');
Route::get('/qatar', [FrontendController::class, 'qatar'])->name('frontend.qatar');
Route::get('/schengen', [FrontendController::class, 'schengen'])->name('frontend.schengen');

//User Login
Route::middleware(['guest:web', 'PreventBackHistory'])->Group(function () {
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::get('/reload-captcha', [AdminController::class, 'reloadCaptcha'])->name('reloadCaptcha');
    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'register_store'])->name('register_store');
    Route::post('login', [UserController::class, 'login_check'])->name('login_check');
});

// User dashboard
Route::middleware(['auth:web', 'PreventBackHistory'])->Group(function () {

    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
//User End

//Admin Login
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->Group(function () {
        Route::get('/login', [AdminController::class, 'login'])->name('login');
        Route::get('/reload-captcha', [AdminController::class, 'reloadCaptcha'])->name('reloadCaptcha');
        Route::post('/login_check', [AdminController::class, 'login_check'])->name('login_check');
    });
//Admin dashboard
    Route::middleware(['auth:admin', 'PreventBackHistory'])->Group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
//Admin End

//Manage Admin Start
Route::prefix('admin')->name('admin.')->middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
    //Admin Frofile Manage
    Route::get('/profile/view/{id}', [AdminProfileController::class, 'view'])->name('profile.view');
    Route::get('/profile/edit/{id}', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update/{id}', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change_password/{id}', [AdminProfileController::class, 'change_password'])->name('profile.change_password');
    Route::post('/profile/update_password/{id}', [AdminProfileController::class, 'update_Password'])->name('profile.update_password');
    Route::get('/profile/print/{id}', [AdminProfileController::class, 'profile_print'])->name('profile_print');

    // Manage Admin Start
    Route::get('/manage-admin/list', [AdminManageController::class, 'admin_list'])->name('admin_list');
    Route::get('/manage-admin/create', [AdminManageController::class, 'create'])->name('admin_create');
    Route::post('/manage-admin/store', [AdminManageController::class, 'store'])->name('admin_store');
    Route::get('/manage-admin/edit/{id}', [AdminManageController::class, 'edit'])->name('admin_edit');
    Route::post('/manage-admin/update/{id}', [AdminManageController::class, 'update'])->name('admin_update');
    Route::get('/manage-admin/delete/{id}', [AdminManageController::class, 'delete'])->name('admin_delete');
    // Manage Admin End

    // Manage Client Start
    Route::get('/manage-user/list', [UserManageController::class, 'list'])->name('user_list');
    Route::get('/manage-user/view/{id}', [UserManageController::class, 'view'])->name('user_view');
    Route::get('/manage-user/apply_service/{id}', [UserManageController::class, 'apply_service'])->name('user_apply_service');
    Route::post('/manage-user/apply_service', [UserManageController::class, 'apply_service_store'])->name('user_apply_service_store');
    Route::get('/manage-user/create', [UserManageController::class, 'create'])->name('user_create');
    Route::post('/manage-user/store', [UserManageController::class, 'store'])->name('user_store');
    Route::get('/manage-user/edit/{id}', [UserManageController::class, 'edit'])->name('user_edit');
    Route::post('/manage-user/update/{id}', [UserManageController::class, 'update'])->name('user_update');
    Route::get('/manage-user/delete/{id}', [UserManageController::class, 'delete'])->name('user_delete');
    Route::get('/manage-user/print/{id}', [UserManageController::class, 'print'])->name('user_print');
    // Manage Client End

    // Manage Service
    //Pending List
    Route::get('/manage_service/pending_list', [InvoiceController::class, 'pending_list'])->name('pending_list');
    Route::get('/manage_service/pending_list_show', [InvoiceController::class, 'pending_list_show'])->name('pending_list_show');
    Route::get('/manage_service/pending_details_print/{id}', [InvoiceController::class, 'pending_details_print'])->name('pending_details_print');
    Route::get('/manage_service/pending_details/{id}', [InvoiceController::class, 'pending_details'])->name('pending_details');
    Route::get('/manage_service/pending_process/{id}', [InvoiceController::class, 'pending_process'])->name('pending_process');
    Route::post('/manage_service/pending_search', [InvoiceController::class, 'pending_search'])->name('pending_search');
    Route::post('/manage_service/pending_search_print', [InvoiceController::class, 'pending_search_print'])->name('pending_search_print');

    //Processing List
    Route::get('/manage_service/processing_list', [InvoiceProcessingController::class, 'processing_list'])->name('processing_list');
    Route::get('/manage_service/processing_list_show', [InvoiceProcessingController::class, 'processing_list_show'])->name('processing_list_show');
    Route::get('/manage_service/processing_details_print/{id}', [InvoiceProcessingController::class, 'processing_details_print'])->name('processing_details_print');
    Route::get('/manage_service/processing_details/{id}', [InvoiceProcessingController::class, 'processing_details'])->name('processing_details');
    Route::get('/manage_service/processing_process/{id}', [InvoiceProcessingController::class, 'processing_process'])->name('processing_process');
    Route::post('/manage_service/processing_search', [InvoiceProcessingController::class, 'processing_search'])->name('processing_search');
    Route::post('/manage_service/processing_search_print', [InvoiceProcessingController::class, 'processing_search_print'])->name('processing_search_print');

    //Procesed List
    Route::get('/manage_service/procesed_list', [InvoiceProcesedController::class, 'procesed_list'])->name('procesed_list');
    Route::get('/manage_service/procesed_list_show', [InvoiceProcesedController::class, 'procesed_list_show'])->name('procesed_list_show');
    Route::get('/manage_service/procesed_details_print/{id}', [InvoiceProcesedController::class, 'procesed_details_print'])->name('procesed_details_print');
    Route::get('/manage_service/procesed_details/{id}', [InvoiceProcesedController::class, 'procesed_details'])->name('procesed_details');
    Route::get('/manage_service/procesed_process/{id}', [InvoiceProcesedController::class, 'procesed_process'])->name('procesed_process');
    Route::post('/manage_service/procesed_search', [InvoiceProcesedController::class, 'procesed_search'])->name('procesed_search');
    Route::post('/manage_service/procesed_search_print', [InvoiceProcesedController::class, 'procesed_search_print'])->name('procesed_search_print');

    //Finalized List
    Route::get('/manage_service/finalized_list', [InvoiceFinalizedController::class, 'finalized_list'])->name('finalized_list');
    Route::get('/manage_service/finalized_list_show', [InvoiceFinalizedController::class, 'finalized_list_show'])->name('finalized_list_show');
    Route::get('/manage_service/finalized_details_print/{id}', [InvoiceFinalizedController::class, 'finalized_details_print'])->name('finalized_details_print');
    Route::get('/manage_service/finalized_details/{id}', [InvoiceFinalizedController::class, 'finalized_details'])->name('finalized_details');
    Route::post('/manage_service/finalized_search', [InvoiceFinalizedController::class, 'finalized_search'])->name('finalized_search');
    Route::post('/manage_service/finalized_search_print', [InvoiceFinalizedController::class, 'finalized_search_print'])->name('finalized_search_print');

    //Cancel List
    Route::get('/manage_service/cancel_list', [InvoiceCancelController::class, 'cancel_list'])->name('cancel_list');
    Route::get('/manage_service/pending_cancel/{id}', [InvoiceCancelController::class, 'pending_cancel'])->name('pending_cancel');
    Route::get('/manage_service/cancel_list_show', [InvoiceCancelController::class, 'cancel_list_show'])->name('cancel_list_show');
    Route::get('/manage_service/cancel_details_print/{id}', [InvoiceCancelController::class, 'cancel_details_print'])->name('cancel_details_print');
    Route::get('/manage_service/cancel_details/{id}', [InvoiceCancelController::class, 'cancel_details'])->name('cancel_details');
    Route::post('/manage_service/cancel_search', [InvoiceCancelController::class, 'cancel_search'])->name('cancel_search');
    Route::post('/manage_service/cancel_search_print', [InvoiceCancelController::class, 'cancel_search_print'])->name('cancel_search_print');

    // settings

    // preferred-Country Start
    Route::get('/preferred-Country/list', [CountryController::class, 'list'])->name('country_list');
    Route::get('/preferred-Country/create', [CountryController::class, 'create'])->name('country_create');
    Route::post('/preferred-Country/store', [CountryController::class, 'store'])->name('country_store');
    Route::get('/preferred-Country/edit/{id}', [CountryController::class, 'edit'])->name('country_edit');
    Route::post('/preferred-Country/update/{id}', [CountryController::class, 'update'])->name('country_update');
    Route::get('/preferred-Country/delete/{id}', [CountryController::class, 'delete'])->name('country_delete');
    // preferred-Country End

    // education-level Start
    Route::get('/education-level/list', [EducationController::class, 'list'])->name('education_list');
    Route::get('/education-level/create', [EducationController::class, 'create'])->name('education_create');
    Route::post('/education-level/store', [EducationController::class, 'store'])->name('education_store');
    Route::get('/education-level/edit/{id}', [EducationController::class, 'edit'])->name('education_edit');
    Route::post('/education-level/update/{id}', [EducationController::class, 'update'])->name('education_update');
    Route::get('/education-level/delete/{id}', [EducationController::class, 'delete'])->name('education_delete');
    // education-level End

    // Result Type  Start
    Route::get('/result-type/list', [ResultTypeController::class, 'list'])->name('result_list');
    Route::get('/result-type/create', [ResultTypeController::class, 'create'])->name('result_create');
    Route::post('/result-type/store', [ResultTypeController::class, 'store'])->name('result_store');
    Route::get('/result-type/edit/{id}', [ResultTypeController::class, 'edit'])->name('result_edit');
    Route::post('/result-type/update/{id}', [ResultTypeController::class, 'update'])->name('result_update');
    Route::get('/result-type/delete/{id}', [ResultTypeController::class, 'delete'])->name('result_delete');
    // Result Type  End

    // language test Start
    Route::get('/language-test/list', [LanguageTestController::class, 'list'])->name('language_list');
    Route::get('/language-test/create', [LanguageTestController::class, 'create'])->name('language_create');
    Route::post('/language-test/store', [LanguageTestController::class, 'store'])->name('language_store');
    Route::get('/language-test/edit/{id}', [LanguageTestController::class, 'edit'])->name('language_edit');
    Route::post('/language-test/update/{id}', [LanguageTestController::class, 'update'])->name('language_update');
    Route::get('/language-test/delete/{id}', [LanguageTestController::class, 'delete'])->name('language_delete');
    // language test End

    // service Start
    Route::get('/service/list', [ServiceController::class, 'list'])->name('service_list');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service_create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service_store');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service_edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service_update');
    Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service_delete');
    // service End

    //Social media
    Route::get('/social/list', [SocialController::class, 'list'])->name('social_list');
    Route::get('/social/create', [SocialController::class, 'create_social'])->name('social_create');
    Route::post('/social/store', [SocialController::class, 'store'])->name('social_store');
    Route::get('/social/edit/{id}', [SocialController::class, 'edit'])->name('social_edit');
    Route::post('/social/update/{id}', [SocialController::class, 'update'])->name('social_update');
    Route::get('/social/delete/{id}', [SocialController::class, 'delete'])->name('social_delete');

    // Manage logo Start
    Route::get('logo/list', [LogoController::class, 'list'])->name('logo_list');
    Route::get('logo/create', [LogoController::class, 'create'])->name('logo_create');
    Route::post('logo/store', [LogoController::class, 'store'])->name('logo_store');
    Route::get('logo/edit/{id}', [LogoController::class, 'edit'])->name('logo_edit');
    Route::post('logo/update/{id}', [LogoController::class, 'update'])->name('logo_update');
    Route::get('logo/delete/{id}', [LogoController::class, 'delete'])->name('logo_delete');
    // Manage logo End

});
//Manage Admin End
