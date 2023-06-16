<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CmsPageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BlogController;


Auth::routes();
Route::get('lang', [HomeController::class, 'lang_change'])->name('LangChange');

// Open routes section
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::post('user/loginpost', [HomeController::class, 'userloginpost'])->name('userLoginPost');
Route::get('logout', [HomeController::class, 'perform'])->name('logout.perform');
Route::get('blog-view', [HomeController::class, 'blogview'])->name('blogview');
Route::get('blog-single/{id}', [HomeController::class, 'blog_single'])->name('blog_single');
Route::get('portfolio-view', [HomeController::class, 'portfolioview'])->name('portfolioview');
Route::get('portfolio-single/{id}', [HomeController::class, 'portfolio_single'])->name('portfolio_single');
Route::resource('privacypolicy', PrivacyPolicyController::class);


// User Auth routes section
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
  Route::get('Coentact-Us', [HomeController::class, 'contactus'])->name('contactus');
  Route::resource('contactus', ContactUsController::class);
  Route::get('contactus/delete/{id}', [ContactUsController::class, 'delete'])->name('contactus.delete');



});


// Admin routes section
Route::get('/admin/login', [HomeController::class, 'adminlogin'])->name('adminlogin');
Route::post('admin/', [HomeController::class, 'adminloginpost'])->name('adminLoginPost');
Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {

  Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

  // User Controller
  Route::resource('users', UserController::class);
  Route::get('users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
  Route::get('users/status-update/{id}/{status}', [UserController::class, 'status_update'])->name('users.status_update');

  // Menu Controller
  Route::resource('menus', MenuController::class);
  Route::get('menus/delete/{id}', [MenuController::class, 'delete'])->name('menus.delete');
  Route::get('menus/status-update/{id}/{status}', [MenuController::class, 'status_update'])->name('menus.status_update');

  // Blog Controller
  Route::resource('blogs', BlogController::class);
  Route::get('blogs/delete/{id}', [BlogController::class, 'delete'])->name('blogs.delete');
  Route::get('blogs/blog_media_delete/{id}', [BlogController::class, 'blog_media_delete'])->name('blog_media.delete');
  Route::get('blogs/status-update/{id}/{status}', [BlogController::class, 'status_update'])->name('blogs.status_update');

  // Category Controller
  Route::resource('category', CategoryController::class);
  Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
  Route::get('category/status-update/{id}/{status}', [CategoryController::class, 'status_update'])->name('category.status_update');

  // Portfolio Controller
  Route::resource('portfolio', PortfolioController::class);
  Route::get('portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
  Route::get('portfolio/portfolio_media_delete/{id}', [PortfolioController::class, 'portfolio_media_delete'])->name('portfolio_media.delete');
  Route::get('portfolio/status-update/{id}/{status}', [PortfolioController::class, 'status_update'])->name('portfolio.status_update');

  // Cms Page Controller
  Route::resource('cmspage', CmsPageController::class);
  Route::get('cmspage/delete/{id}', [CmsPageController::class, 'delete'])->name('cmspage.delete');
  Route::get('cmspage/status-update/{id}/{status}', [CmsPageController::class, 'status_update'])->name('cmspage.status_update');




});