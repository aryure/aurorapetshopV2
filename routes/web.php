<?php

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

// Route::get('/', function () {
//     return view('Pengguna.Beranda');
// });


// Admin
Route::post('/postlogin_admin', [App\Http\Controllers\Login_AdminController::class, 'postlogin_admin'])->name('postlogin_admin');
Route::get('/logout', [App\Http\Controllers\Login_AdminController::class, 'postlogout_admin'])->name('postlogout_admin');

Route::get('/login-admin', function () {
    return view('Admin.Login_Admin');
})->name('login-admin');

// Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
//     Route::get('/pesanan-barang', [App\Http\Controllers\DashboardController::class, 'pesanan_barang']);
//     Route::get('/pesanan-titipan', [App\Http\Controllers\DashboardController::class, 'pesanan_titipan']);
//     Route::get('/stok-barang', [App\Http\Controllers\DashboardController::class, 'stok_barang']);
// });

Route::group(['middleware' => ['auth','ceklevel:1']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('/pesanan-barang', [App\Http\Controllers\DashboardPesananController::class, 'indexPesananBarang']);
    Route::get('/edit-pesanan-barang/{id}', [App\Http\Controllers\DashboardPesananController::class, 'editPesananBarang']);
    Route::post('/update-pesanan-barang/{id}', [App\Http\Controllers\DashboardPesananController::class, 'updatePesananBarang']);

    Route::get('/pesanan-titipan', [App\Http\Controllers\DashboardPesananController::class, 'indexPesananTitipan']);
    Route::get('/edit-pesanan-titipan/{id}', [App\Http\Controllers\DashboardPesananController::class, 'editPesananTitipan']);
    Route::post('/update-pesanan-titipan/{id}', [App\Http\Controllers\DashboardPesananController::class, 'updatePesananTitipan']);
    Route::get('/detail-pesanan-titipan/{id}', [App\Http\Controllers\DashboardPesananController::class, 'detailPesananTitipan']);

    Route::get('/product', [App\Http\Controllers\DashboardProductController::class, 'index']);
    Route::get('/create-product', [App\Http\Controllers\DashboardProductController::class, 'create']);
    Route::post('/simpan-create-product', [App\Http\Controllers\DashboardProductController::class, 'store']);
    Route::get('/edit-product/{id}', [App\Http\Controllers\DashboardProductController::class, 'edit'])->name('edit-product');
    Route::post('/update-product/{id}', [App\Http\Controllers\DashboardProductController::class, 'update'])->name('update-product');
    Route::get('/delete-product/{id}', [App\Http\Controllers\DashboardProductController::class, 'destroy'])->name('delete-product');

    Route::get('/cage', [App\Http\Controllers\DashboardCageController::class, 'index']);
    Route::get('/create-cage', [App\Http\Controllers\DashboardCageController::class, 'create']);
    Route::post('/simpan-create-cage', [App\Http\Controllers\DashboardCageController::class, 'store']);
    Route::get('/edit-cage/{id}', [App\Http\Controllers\DashboardCageController::class, 'edit'])->name('edit-cage');
    Route::post('/update-cage/{id}', [App\Http\Controllers\DashboardCageController::class, 'update'])->name('update-cage');
    Route::get('/delete-cage/{id}', [App\Http\Controllers\DashboardCageController::class, 'destroy'])->name('delete-cage');

    Route::get('/user-admin', [App\Http\Controllers\DashboardAdminController::class, 'index'])->name('user-admin');
    Route::get('/create-admin', [App\Http\Controllers\DashboardAdminController::class, 'create']);
    Route::post('/simpan-create-admin', [App\Http\Controllers\DashboardAdminController::class, 'store']);
    Route::get('/edit-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'edit'])->name('edit-admin');
    Route::post('/update-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'update'])->name('update-admin');
    Route::get('/delete-admin/{id}', [App\Http\Controllers\DashboardAdminController::class, 'destroy'])->name('delete-admin');

    Route::get('/user-pengguna', [App\Http\Controllers\DashboardUserController::class, 'index']);
    Route::get('/create-pengguna', [App\Http\Controllers\DashboardUserController::class, 'create']);
    Route::post('/simpan-create-pengguna', [App\Http\Controllers\DashboardUserController::class, 'store']);
    Route::get('/edit-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'edit'])->name('edit-pengguna');
    Route::get('/change-password-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'changePasswordPengguna'])->name('change-password-pengguna');
    Route::post('/update-password-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'updatePasswordPengguna'])->name('update-password-pengguna');
    Route::post('/update-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'update'])->name('update-pengguna');
    Route::get('/delete-pengguna/{id}', [App\Http\Controllers\DashboardUserController::class, 'destroy'])->name('delete-pengguna');

    Route::get('/report', [App\Http\Controllers\DashboardReportController::class, 'index']);
    Route::get('/download-report', [App\Http\Controllers\DashboardReportController::class, 'reportExportExel'])->name('download-report');
});

Route::group(['middleware' => ['auth','ceklevel:1,2']], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
});


//Pengguna

Route::get('/register', [App\Http\Controllers\PenggunaRegister::class, 'create']);
Route::post('/simpan-create-user', [App\Http\Controllers\PenggunaRegister::class, 'store']);

// Route::get('/password/forgot', [App\Http\Controllers\ResetPasswordController::class, 'indexForgot']);
// Route::get('/password/reset', [App\Http\Controllers\ResetPasswordController::class, 'indexReset']);

Route::get('/login', [App\Http\Controllers\PenggunaLogin::class, 'index'])->name('login');
Route::post('/postlogin_user', [App\Http\Controllers\Login_UserController::class, 'postlogin_user'])->name('postlogin_user');
Route::get('/logout_user', [App\Http\Controllers\Login_UserController::class, 'postlogout_user'])->name('postlogout_user');

Route::get('/profile', [App\Http\Controllers\PenggunaProfile::class, 'index'])->name('profile');
// Route::get('/profile/history-order-shop/{id}', [App\Http\Controllers\PenggunaProfile::class, 'indexHistoryDetailOrderShop']);
Route::get('/profile/history-order-petcare/{id}', [App\Http\Controllers\PenggunaProfile::class, 'indexHistoryDetailOrderPetCare']);

Route::get('/beranda', [App\Http\Controllers\PenggunaBeranda::class, 'index']);
Route::get('/', [App\Http\Controllers\PenggunaBeranda::class, 'index']);

Route::get('/about', [App\Http\Controllers\PenggunaAbout::class, 'index']);

Route::get('/petcare', [App\Http\Controllers\PenggunaPetCare::class, 'index']);
Route::get('/detail-petcare/{id}', [App\Http\Controllers\PenggunaPetCare::class, 'detail']);
Route::get('/petcare/order', [App\Http\Controllers\PenggunaPetCare::class, 'indexOrder']);

// Route::get('/shop', [App\Http\Controllers\PenggunaShop::class, 'index']);
// Route::get('/detail-shop/{id}', [App\Http\Controllers\PenggunaShop::class, 'detail']);

// Route::get('/cart', [App\Http\Controllers\PenggunaTransaksi::class, 'index']);
// Route::post('/add-cart', [App\Http\Controllers\PenggunaTransaksi::class, 'addToCart']);
// Route::get('/delete-cart/{id}', [App\Http\Controllers\PenggunaTransaksi::class, 'destroy']);

// Route::get('/cart/shipment', [App\Http\Controllers\PenggunaTransaksi::class, 'indexShipment']);
// Route::post('/add-order-shop', [App\Http\Controllers\PenggunaTransaksi::class, 'addToOrderShop']);
Route::post('/add-order-petcare', [App\Http\Controllers\PenggunaTransaksi::class, 'addToOrderPetCare']);