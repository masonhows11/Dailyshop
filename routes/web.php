<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPermAssignController;
use App\Http\Controllers\Admin\AdminRoleAssignController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Auth\AdminValidateController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\AdminBackEnd;
use App\Http\Livewire\Admin\AdminCategory;
use App\Http\Livewire\Admin\AdminMobile;
use App\Http\Livewire\Admin\AdminPerms;
use App\Http\Livewire\Admin\AdminProfile;
use App\Http\Livewire\Admin\AdminRoles;
use App\Http\Livewire\Admin\AdminTag;
use App\Http\Livewire\Admin\AdminUsers;
use App\Http\Livewire\Admin\ListUsersForPerm;
use App\Http\Livewire\Admin\ListUsersForRole;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/storage-link',function(){
    symlink(storage_path('app/public'),$_SERVER['DOCUMENT_ROOT'].'/storage');
});

// admin routes

Route::prefix('admin')->group(function () {
    Route::get('/login/form', [AdminAuthController::class, 'loginAdminForm'])->name('admin.login.form');
    Route::post('/login', [AdminAuthController::class, 'loginAdmin'])->name('admin.login');
    Route::get('/validate/mobile/form', [AdminValidateController::class, 'validateMobileForm'])->name('admin.validate.mobile.form');
    Route::post('/validate/mobile', [AdminValidateController::class, 'validateMobile'])->name('admin.validate.mobile');
    Route::post('/resend/code', [AdminValidateController::class, 'resendCode'])->name('admin.resend.code');
});

Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/logOut', [AdminAuthController::class, 'logOut'])->name('logOut');

});

Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/profile', AdminProfile::class)->name('profile');
    Route::get('/change/mobile', AdminMobile::class)->name('change.mobile');
});

// users
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/users', AdminUsers::class)->name('users');
});

// crud roles
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/roles', AdminRoles::class)->name('roles');
});
// assign roles
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/roles/list/users', ListUsersForRole::class)->name('role.list.users');
    Route::get('/roles/assign/form', [AdminRoleAssignController::class, 'create'])->name('roles.assign.form');
    Route::post('/roles/assign', [AdminRoleAssignController::class, 'store'])->name('roles.assign');
});
// crud perms
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/perms', AdminPerms::class)->name('perms');
});
// assign perms
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/perms/list/users', ListUsersForPerm::class)->name('perm.list.users');
    Route::get('/perms/assign/form', [AdminPermAssignController::class, 'create'])->name('perms.assign.form');
    Route::post('/perms/assign', [AdminPermAssignController::class, 'store'])->name('perms.assign');
});
// categories
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/category/index', AdminCategory::class)->name('category.list');
});
// tags
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/tags', AdminTag::class)->name('tags');
});

// articles
Route::prefix('admin')->name('admin.')->middleware(['web','auth:admin','verify_admin','role:admin|admin'])->group(function () {
    Route::get('/article/index', [AdminArticleController::class, 'index'])->name('article.index');
    Route::get('/article/create', [AdminArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [AdminArticleController::class, 'store'])->name('article.store');
    Route::get('/article/edit/{article}', [AdminArticleController::class, 'edit'])->name('article.edit');
    Route::post('/article/update', [AdminArticleController::class, 'update'])->name('article.update');
});
