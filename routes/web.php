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

Route::get('/', 'Frontend\PagesController@index')->name('frontend.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');



/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Manage Category Routes

Route::group(['prefix' => '/categories'], function(){
	Route::get('/manage', 'Backend\CategoryController@index')->name('manageCategory');
	//show create page and update after submit
	Route::get('/create', 'Backend\CategoryController@create')->name('createCategory');
	Route::post('/create', 'Backend\CategoryController@store')->name('storeCategory');
	// Show edit page and update after submit
	Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('editCategory');
	Route::post('/edit/{id}', 'Backend\CategoryController@update')->name('updateCategory');
	// Delete category from manage
	Route::post('/delete/{id}', 'Backend\CategoryController@destroy')->name('deleteCategory');
});

// Brand Routes
Route::group(['prefix' => '/brands'], function(){
	Route::get('/manage', 'Backend\BrandController@index')->name('manageBrand');
	//show create page and update after submit
	Route::get('/create', 'Backend\BrandController@create')->name('createBrand');
	Route::post('/create', 'Backend\BrandController@store')->name('storeBrand');
	// Show edit page and update after submit
	Route::get('/edit/{id}', 'Backend\BrandController@edit')->name('editBrand');
	Route::post('/edit/{id}', 'Backend\BrandController@update')->name('updateBrand');
	// Delete brand from manage
	Route::post('/delete/{id}', 'Backend\BrandController@destroy')->name('deleteBrand');
});

// Product Routes
Route::group(['prefix' => '/products'], function(){
	Route::get('/manage', 'Backend\ProductController@index')->name('manageProduct');
	//show create page and update after submit
	Route::get('/create', 'Backend\ProductController@create')->name('createProduct');
	Route::post('/create', 'Backend\ProductController@store')->name('storeProduct');
	// Show edit page and update after submit
	Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('editProduct');
	Route::post('/edit/{id}', 'Backend\ProductController@update')->name('updateProduct');
	// Delete product from manage
	Route::post('/delete/{id}', 'Backend\ProductController@destroy')->name('deleteProduct');
});

// Division Routes
Route::group(['prefix' => '/divisions'], function(){
	Route::get('/manage', 'Backend\DivisionController@index')->name('manageDivision');
	//show create page and update after submit
	Route::get('/create', 'Backend\DivisionController@create')->name('createDivision');
	Route::post('/create', 'Backend\DivisionController@store')->name('storeDivision');
	// Show edit page and update after submit
	Route::get('/edit/{id}', 'Backend\DivisionController@edit')->name('editDivision');
	Route::post('/edit/{id}', 'Backend\DivisionController@update')->name('updateDivision');
	// Delete product from manage
	Route::post('/delete/{id}', 'Backend\DivisionController@destroy')->name('deleteDivision');
});

// District Routes
Route::group(['prefix' => '/districts'], function(){
	Route::get('/manage', 'Backend\DistrictController@index')->name('manageDistrict');
	//show create page and update after submit
	Route::get('/create', 'Backend\DistrictController@create')->name('createDistrict');
	Route::post('/create', 'Backend\DistrictController@store')->name('storeDistrict');
	// Show edit page and update after submit
	Route::get('/edit/{id}', 'Backend\DistrictController@edit')->name('editDistrict');
	Route::post('/edit/{id}', 'Backend\DistrictController@update')->name('updateDistrict');
	// Delete product from manage
	Route::post('/delete/{id}', 'Backend\DistrictController@destroy')->name('deleteDistrict');
});

Route::group( ['prefix' => '/featured'], function(){
	Route::get('/manage', 'Backend\FeaturedController@index')->name('admin.product.index');
	Route::get('/create', 'Backend\FeaturedController@create')->name('admin.product.create');
	Route::post('/store', 'Backend\FeaturedController@store')->name('admin.product.store');
	Route::get('/edit', 'Backend\FeaturedController@edit')->name('admin.product.edit');
	Route::post('/update', 'Backend\FeaturedController@update')->name('admin.product.update');
	Route::get('/delete', 'Backend\FeaturedController@delete')->name('admin.product.delete');
});