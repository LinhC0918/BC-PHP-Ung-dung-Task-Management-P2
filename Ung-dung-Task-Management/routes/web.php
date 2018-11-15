<?php

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

Route::prefix('customer')->group(function () {
    Route::get('index', 'CustomerController@index');

    Route::get('xem1', function () {
        // Hiển thị Form tạo khách hàng
        return view('xem1');
    })->name('xem1');

    Route::get('xem2', function () {
        // Hiển thị Form tạo khách hàng
        return view('xem2');
    })->name('xem2');

    Route::get('xem3', function () {
        // Hiển thị Form tạo khách hàng
        return view('xem3');
    })->name('xem3');

    Route::get('xem4', function () {
        // Hiển thị Form tạo khách hàng
        return view('xem4');
    })->name('xem4');

    Route::get('xem5', function () {
        // Hiển thị Form tạo khách hàng
        return view('xem5');
    })->name('xem5');

    Route::get('sua', function () {
        // Hiển thị Form tạo khách hàng
        return view('sua');
    })->name('sua');

    Route::get('xoa', function () {
        // Hiển thị Form tạo khách hàng
        return view('xoa');
    })->name('xoa');

    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });

    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    });

    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    });

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('delete/{id?}', function () {
        // Xóa thông tin dữ liệu khách hàng
        return view('delete');
    });
});



