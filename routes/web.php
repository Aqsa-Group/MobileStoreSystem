<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Mobile\UserForm2;
use App\Livewire\Mobile\DeviceForm2;
use App\Livewire\Mobile\Welcome;
use App\Livewire\Mobile\Support;
use App\Livewire\Mobile\DeviceRepair;

// dashboard
Route::get('/', Welcome::class)->name('dashboard');

// Login
Route::get('/login', function () {
    return view('Mobile.Auth.login');
});

// User List
Route::get('/userList', function () {
    return view('Mobile.shop.userList');
})->name('user.list');

// userForm1
Route::get('/user-form', function () {
    return view('Mobile.shop.userform');
})->name('user.form');


// userForm2
Route::get('/user-Information2', function () {
    return view('Mobile.shop.userInformation2');
});


// userForm3
Route::get('/user-Information', function () {
    return view('Mobile.shop.userInformation');
});

// Customer list
Route::get('/customers', function () {
    return view('Mobile.shop.customers');
})->name('customers');

//Customer form1
Route::get('/customer', function () {
    return view('Mobile.shop.customer');
})->name('customer');

// customer form2
Route::get('/customer-Information', function () {
    return view('Mobile.shop.customerInformation');
});

// Reports
Route::get('/reports', function () {
    return view('Mobile.shop.reports');
})->name('reports');

//Inventory
Route::get('/inventory', function () {
    return view('Mobile.shop.inventory');
})->name('inventory');

//Inventory2
Route::get('/inventory2', function () {
    return view('Mobile.shop.inventory2');
})->name('inventory2');

//Sell
Route::get('/sell', function () {
    return view('Mobile.shop.sell');
})->name('sell');

//SalaryWorkers
Route::get('/salaryworkers', function () {
    return view('Mobile.shop.salaryworkers');
})->name('salaryworkers');

// deviceForm1
Route::get('/device-Form', function () {
    return view('Mobile.shop.deviceForm');
})->name('device.form');

// deviceForm2
Route::get('/device-form2', DeviceForm2::class)
    ->name('device.form2');

//deviceForm3
Route::get('/device-Information', function () {
    return view('Mobile.shop.deviceInformation');
})->name('device.form3');

// borrowings
Route::get('/borrowings-page', function () {
    return view('Mobile.shop.borrowings-page');
})->name('borrowings');

// Repair
Route::get('/device-repair', function () {
    return view('Mobile.shop.device-repair'); // نام فایل و فولدر دقیقاً همسان با این باشد
})->name('device.repair');

Route::get('/accounts-page', function () {
    return view('Mobile.shop.accounts-page'); // این فایل ویو باید وجود داشته باشد
})->name('accounts');

// suppprt
Route::get('/support', Support::class)->name('support');
