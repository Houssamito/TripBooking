<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Name;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => ['web']], function ()  {
    Route::resource('/menu', \App\Http\Controllers\web\MenuController::class);
    Route::get('/', [\App\Http\Controllers\web\MenuController::class, 'index']  )->name('menu');
    Route::get('/Contact', [\App\Http\Controllers\web\ContactController::class, 'index']  )->name('Contact');
    Route::get('/MenuUtilisateur', [\App\Http\Controllers\web\MenuUtilisateurController::class, 'index']  )->name('MenuUtilisateur');
    Route::get('/LoginPage', [\App\Http\Controllers\web\LoginController::class, 'login']  )->name('login');
    Route::get('/RegisterPage', [\App\Http\Controllers\web\LoginController::class, 'register']  )->name('register');
    Route::post('/LoginPost', [\App\Http\Controllers\web\LoginController::class, 'loginPost']  )->name('login.post');
    Route::post('/RegisterPost', [\App\Http\Controllers\web\LoginController::class, 'registerPost']  )->name('register.post');
    Route::get('/logout', [\App\Http\Controllers\web\LoginController::class, 'logout']  )->name('logout');
Route::get('ShoppingcartServiceProvider', function () {
    return view('ShoppingcartServiceProvider');
});

Route::get('all', function () {
    return view('admin.all');
});
Route::get('checkout/{id}/{prix}', [\App\Http\Controllers\web\checkoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/store', [\App\Http\Controllers\web\checkoutController::class, 'store']  )->name('checkout.store');
Route::get('/success', [\App\Http\Controllers\web\checkoutController::class, 'success']  )->name('checkout.success');
Route::get('/cancel', [\App\Http\Controllers\web\checkoutController::class, 'cancel']  )->name('checkout.cancel');
Route::post('/prez/sendData/{id}/{prix}', [\App\Http\Controllers\web\PrezController::class, 'sendData']  )->name('prez.sendData');
Route::get('/prez/{id}', [\App\Http\Controllers\web\PrezController::class, 'index']  )->name('prez');
Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
Route::get('/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index']  )->name('categories');
Route::get('/messages', [\App\Http\Controllers\Admin\MessagesController::class, 'index']  )->name('Admin.messages');
Route::get('/categories/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create']  )->name('categories.create');
Route::post('/categories/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store']  )->name('categories.store');
Route::get('/categories/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']  )->name('categories.edit');
Route::get('/categories/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show']  )->name('categories.show');
Route::put('/categories/{category}/update', [\App\Http\Controllers\Admin\CategoryController::class, 'update']  )->name('categories.update');
Route::delete('/categories/{category}/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']  )->name('categories.destroy');
Route::resource('/Activity', \App\Http\Controllers\Admin\ActivityController::class);
Route::get('/Réservations', [\App\Http\Controllers\Admin\RéservationController::class, 'index']  )->name('Réservations');
Route::get('/Utilisateurs', [\App\Http\Controllers\Admin\UsersController::class, 'index']  )->name('Utilisateurs');

Route::get('/successPaypal', [\App\Http\Controllers\web\checkoutController::class, 'successPaypal']  )->name('checkout.success.paypal');
Route::get('/cancelPaypal', [\App\Http\Controllers\web\checkoutController::class, 'cancelPaypal']  )->name('checkout.cancel.paypal');
Route::post('/Profile/AddToFavoris/{id}', [\App\Http\Controllers\web\ProfileController::class, 'AddToFavoris']  )->name('Profile.addToFavoris');
Route::get('/Profile/{id}', [\App\Http\Controllers\web\ProfileController::class, 'index']  )->name('Profile');
Route::get('/Reels', [\App\Http\Controllers\web\ReelsController::class, 'index']  )->name('Reels');
Route::get('/Admin/Reels', [\App\Http\Controllers\Admin\ReelsController::class, 'index']  )->name('Admin.Reels');
Route::get('/Admin/Reels/create', [\App\Http\Controllers\Admin\ReelsController::class, 'create']  )->name('Reels.create');
Route::post('/Admin/Reels/store', [\App\Http\Controllers\Admin\ReelsController::class, 'store']  )->name('Reels.store');
Route::post('/Messages/store', [\App\Http\Controllers\web\MessagesController::class, 'store']  )->name('Messages.store');
});
