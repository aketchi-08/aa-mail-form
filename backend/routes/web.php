<?php

use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\FormController as AdminFormController;

use App\Http\Controllers\User\FormController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ユーザー認証済みルート
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    // プロフィール関連
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ダッシュボード
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // フォーム管理（resource ルートに user. 接頭辞を付与）
    Route::resource('forms', FormController::class);
});

// 管理者ルート
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login']);
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // ユーザー管理（一覧・削除）
        Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('users/{user}', [AdminUserController::class, 'show'])->name('admin.users.show');
        Route::delete('users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

        // フォーム管理（閲覧のみ）
        Route::get('forms', [AdminFormController::class, 'index'])->name('admin.forms.index');
        Route::get('forms/{form}', [AdminFormController::class, 'show'])->name('admin.forms.show');
    });
});

require __DIR__.'/auth.php';
