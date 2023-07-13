<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\JoinNowController;
use App\Http\Controllers\PeopleLandingController;
use App\Http\Controllers\JopsLandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\CompanyDashboardController;
use App\Http\Controllers\JopDashboardController;
use App\Http\Controllers\PostDashboardController;
use App\Http\Controllers\UniversityDashboardController;
use App\Http\Controllers\MajorDashboardController;
use App\Http\Controllers\FeedDashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\LogoutController;


use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');
Route::get('/sign-in', [SignInController::class, 'signIn'])->name('signIn');
Route::post('/login', [SignInController::class, 'login'])->name('login');
Route::post('/login', [SignInController::class, 'login'])->name('login');
Route::get('/join-now', [JoinNowController::class, 'joinNow'])->name('joinNow');
Route::post('/register', [JoinNowController::class, 'register'])->name('register');
Route::get('/people-landing', [PeopleLandingController::class, 'peopleLanding'])->name('people-landing');
Route::get('/jops-landing', [JopsLandingController::class, 'jopsLanding'])->name('jops-landing');
Route::get('/filter', [JopsLandingController::class, 'jopsLanding'])->name('filter');
Route::post('/search-users', [PeopleLandingController::class, 'searchUsers'])->name('searchUsers');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');






Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('layoutDash.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.layoutDash.index');
Route::delete('/users/{id}', [DashboardController::class, 'deleteUser'])->name('userdashboard.destroy');
Route::delete('/companies/{id}', [DashboardController::class, 'deleteCompany'])->name('companydashboard.destroy');
Route::delete('/joplistings/{id}', [DashboardController::class, 'deleteJopListing'])->name('jopdashboard.destroy');
Route::delete('/posts/{id}', [DashboardController::class, 'deletePost'])->name('postdashboard.destroy');
Route::delete('/universitydashboard/university/{id}',[DashboardController::class,'deleteuniversity'])->name('universitydashboard.destroy');

Route::get('/userdashboard/user', [UserDashboardController::class, 'index'])->name('userdashboard.user');
Route::get('/userdashboard/user/create', [UserDashboardController::class, 'create'])->name('userdashboard.add-user');
Route::post('/companydashboard/company/store', [UserDashboardController::class, 'store'])->name('companydashboard.store');
Route::post('/dashboard/store', [UserDashboardController::class, 'store'])->name('dashboard.store');
Route::get('/userdashboard/user', [UserDashboardController::class, 'index'])->name('userdashboard.user');
Route::get('/userdashboard/user/create', [UserDashboardController::class, 'create'])->name('userdashboard.add-user');
Route::post('/dashboard/store', [UserDashboardController::class, 'store'])->name('dashboard.store');
Route::get('/userdashboard/user/edit/{id}', [UserDashboardController::class, 'edit'])->name('userdashboard.edit-user');
Route::match(['PUT', 'POST'], '/userdashboard/user/update/{id}', [UserDashboardController::class, 'update'])->name('userdashboard.update');
Route::delete('/userdashboard/user/delete/{id}', [UserDashboardController::class, 'destroy'])->name('userdashboard.destroy');

Route::get('/companydashboard/company', [CompanyDashboardController::class, 'index'])->name('companydashboard.company');
Route::get('/companydashboard/company/create', [CompanyDashboardController::class, 'create'])->name('companydashboard.add-company');
Route::post('/companydashboard/company/store', [CompanyDashboardController::class, 'store'])->name('companydashboard.store');
Route::get('/companydashboard/company/edit/{id}', [CompanyDashboardController::class, 'edit'])->name('companydashboard.edit-company');
Route::put('/companydashboard/company/update/{id}', [CompanyDashboardController::class, 'update'])->name('companydashboard.update');
Route::delete('/companydashboard/company/delete/{id}', [CompanyDashboardController::class, 'destroy'])->name('companydashboard.destroy');

Route::get('/jopdashboard/jops', [JopDashboardController::class, 'index'])->name('jopdashboard.jops');
Route::delete('/jopdashboard/jops/{id}', [JopDashboardController::class, 'destroy'])->name('jopdashboard.destroy');

Route::get('/postdashboard/post', [PostDashboardController::class, 'index'])->name('postdashboard.post');
Route::delete('/postdashboard/post/{id}', [PostDashboardController::class, 'destroy'])->name('postdashboard.destroy');

Route::get('/universitydashboard/university', [UniversityDashboardController::class, 'index'])->name('universitydashboard.university');
Route::get('/universitydashboard/add-university', [UniversityDashboardController::class, 'create'])->name('universitydashboard.add-university');
Route::post('/universitydashboard/university', [UniversityDashboardController::class, 'store'])->name('universitydashboard.store');
Route::get('/universitydashboard/university/edit/{id}', [UniversityDashboardController::class, 'edit'])->name('universitydashboard.edit-university');
Route::put('/universitydashboard/university/{id}', [UniversityDashboardController::class, 'update'])->name('universitydashboard.update');

Route::delete('/universitydashboard/university/{id}', [UniversityDashboardController::class, 'destroy'])->name('universitydashboard.destroy');


Route::group(['prefix' => 'majordashboard'], function () {
    Route::get('/', [MajorDashboardController::class, 'index'])->name('majordashboard.index');
    Route::get('/major', [MajorDashboardController::class, 'index'])->name('majordashboard.major');
    Route::get('/add-major', [MajorDashboardController::class, 'create'])->name('majordashboard.add-major');
    Route::post('/store', [MajorDashboardController::class, 'store'])->name('majordashboard.store');
    Route::get('/edit-major/{major}', [MajorDashboardController::class, 'edit'])->name('majordashboard.edit-major');
    Route::put('/update-major/{major}', [MajorDashboardController::class, 'update'])->name('majordashboard.update-major');
    Route::delete('/delete-major/{major}', [MajorDashboardController::class, 'destroy'])->name('majordashboard.destroy-major');
});



Route::get('/dashboard/feedback', [FeedDashboardController::class, 'index'])->name('feeddashboard.feedback');
Route::get('/feedback', [FeedDashboardController::class, 'index'])->name('feedbackdashboard.feedback');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-profile', [AdminProfileController::class, 'show'])->name('admin-profile.show');
    Route::get('/admin-profile/edit', [AdminProfileController::class, 'edit'])->name('admin-profile.edit');
    Route::put('/admin-profile/update', [AdminProfileController::class, 'update'])->name('admin-profile.update');
});

Route::get('/admindashboard/profile/admin', [AdminProfileController::class, 'profile'])->name('admindashboard.profile-admin');
