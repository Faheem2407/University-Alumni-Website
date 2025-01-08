<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;



Route::controller(HomeController::class)->group(function(){
	Route::get('/','home')->name('home');
	Route::get('/about','about')->name('about');
	Route::get('/contact','contact')->name('contact');
	Route::get('/news','news')->name('news');
	Route::get('/developer','developer')->name('developer');
});


Route::controller(AuthController::class)->group(function (){
	Route::post('/login','login')->name('auth.login');
	Route::get('/login','login')->name('auth.login');
	Route::get('/register','register')->name('auth.register');
});


Route::controller(MemberController::class)->group(function (){
	Route::post('/member-register-permission','seekPermissionCreateMember')->name('auth.member.seek-permission.register');
	Route::post('/create-member-by-admin','approved')->name('create.member.registration.byAdmin');
	Route::post('/seek-permission-create-member-cancel','PermissionCancel')->name('permission.member.cancel');
	
	Route::post('/member-login','LoginMember')->name('member.login');
	//Route::get('/member-login','LoginMember')->name('member.login');
	Route::get('/member-login',function(){
		return to_route('auth.login');
	});

});




Route::get('/admin-login',[AdminController::class,'adminLogin'])->name('auth.admin.login');

Route::post('/admin-login',[AdminController::class,'adminLogin'])->name('auth.admin.login');
Route::post('/admin-logout',[AdminController::class,'adminLogout'])->name('auth.admin.logout');

Route::get('/admin-register',[AdminController::class,'adminRegister'])->name('auth.admin.register');




Route::controller(AdminController::class)->group(function(){
	Route::get('/seek-permission-create-admin','adminLogin')->name('seek.permission.create.admin.registration');
	Route::post('/seek-permission-create-admin','seekPermissionCreateAdmin')->name('seek.permission.create.admin.registration');
	Route::post('/login-admin','LoginAdmin')->name('check.admin.login');
	//Route::get('/login-admin','adminLogin')->name('check.admin.login');
	Route::get('/login-admin',function(){
		return view('auth.admin.login');
	});
	
	
	Route::post('/create-admin-by-superadmin','approved')->name('create.admin.registration.bySuperadmin');
	Route::post('/seek-permission-create-admin-cancel','PermissionCancel')->name('permission.admin.cancel');
	Route::get('/seek-permission-create-admin-cancel','adminLogin')->name('permission.admin.cancel');	
});


Route::controller(HomeController::class)->group(function(){
	Route::get('/faculty-of-arts','arts')->name('arts');
	Route::get('/faculty-of-science-and-enginneering','science_and_enginneering')->name('science_and_enginneering');
	Route::get('/faculty-of-social-sciene','social_science')->name('social_science');
	Route::get('/faculty-of-business-administration','business_administration')->name('business_administration');
	Route::get('/faculty-of-fine-arts','fine_arts')->name('fine_arts');
	Route::get('/faculty-of-law','law')->name('law');
	
});




Route::controller(HomeController::class)->group(function (){
	Route::get('/advisiors','advisiors')->name('advisiors');
	Route::get('/executive-committee','executive_committee')->name('executive_committee');
	Route::get('/volunteers','volunteers')->name('volunteers');
	
});





























