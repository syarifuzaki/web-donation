<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CampaignController;
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

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::group([
  'prefix' => 'account',
  'as' => 'account.',
], function () {
  Route::get('', [ProfileController::class, 'profile'])->name('profile');
  Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
});


Route::group([
  'prefix' => 'campaign',
  'as' => 'campaign.'
], function() {
  Route::get('{slug}', [CampaignController::class, 'detail'])->name('detail');
  Route::get('{slug}/donation', [CampaignController::class, 'donation'])->name('donation');
  Route::get('{slug}/payment', [CampaignController::class, 'payment'])->name('payment');
  Route::get('{slug}/confirm', [CampaignController::class, 'confirm'])->name('confirm');
});

Route::group([
  'prefix' => 'my-donation',
  'as' => 'my-donation.',
], function () {
  Route::get('', [DonationController::class, 'me'])->name('me');
  Route::get('{id}', [DonationController::class, 'detail'])->name('detail');
  Route::get('{id}/instruction', [DonationController::class, 'instruction'])->name('instruction');
});

Route::group([
  'prefix' => 'fundraising',
  'as' => 'fundraising.'
], function() {
  Route::get('', [FrontController::class, 'fundraising'])->name('me');
  Route::get('add', [FrontController::class, 'fundraisingAdd'])->name('add');
});

Route::group([
  'prefix' => 'agent',
  'as' => 'agent.',
], function() {
  Route::get('', [AgentController::class, 'front'])->name('front');
  Route::get('menu', [AgentController::class, 'menu'])->name('menu');
  Route::get('register', [AgentController::class, 'register'])->name('register');
  Route::get('topup', [AgentController::class, 'topup'])->name('topup');
  Route::get('topup/{id}/instruction', [AgentController::class, 'instruction'])->name('topup-instruction');
  Route::get('withdrawal', [AgentController::class, 'withdrawal'])->name('withdrawal');
  Route::get('history', [AgentController::class, 'history'])->name('history');
});

Route::group([
 'prefix' => 'auth',
 'as' => 'auth.',
], function() {
  Route::get('login', [AuthController::class, 'loginView'])->name('login');
  Route::post('logout', [AuthController::class, 'logout']);
  Route::get('register', [AuthController::class, 'registerView'])->name('register');
  Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
  Route::get('reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');
});

Route::group([
  'prefix' => 'admin',
  'as' => 'admin.'
], function () {
  Route::get('', function() {
    return view('admin.dashboard');
  })->name('dashboard');

  Route::group([
    'prefix' => 'user',
    'as' => 'user.'
  ], function() {
    Route::get('', function() {
      return view('admin.user.list');
    })->name('list');

    Route::get('{id}/detail', function() {
      return view('admin.user.detail');
    })->name('detail');
  });

  Route::get('penggalangan-dana', function() {
    return view('admin.penggalangan-dana');
  })->name('penggalangan-dana');

  Route::get('agent', function() {
    return view('admin.agent');
  })->name('agent');

  Route::get('donasi', function() {
    return view('admin.donasi');
  })->name('donasi');
});