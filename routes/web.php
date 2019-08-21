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


Route::get('/', 'PageController@main')->name('main');
Route::get('/category', 'PageController@index')->name('category');
Route::get('/categorydetails/{id}', 'PageController@categorydetails')->name('men-category');
Route::get('/product_details/{id}/{name}', 'PageController@showsingleproduct')->name('product_details');
Route::get('/product_checkout', 'PageController@showproductcheckout')->name('product_checkout');
Route::get('/confermation', 'PageController@showconfermationpage')->name('confermation');
/*cart*/
Route::get('/cart/show', 'CartController@showcartpage')->name('cart');
Route::post('/cart/add', 'CartController@addToCart')->name('add-to-cart');
Route::get('/cart/delete/{id}','CartController@deleteCart')->name('delete-cart-item');
Route::post('/cart/update','CartController@updateCart')->name('update-cart');
/*Cart*/
Route::get('/blog', 'PageController@showblogpage')->name('blog');
Route::get('/single_blog', 'PageController@showsingleblogpage')->name('single_blog');
/*check-out login*/
Route::get('/userlogin', 'CustomerController@showloginpage')->name('userlogin');
Route::get('/user_register', 'CustomerController@showregisterpage')->name('user_register');
Route::post('/customer/sign-up','CustomerController@customerSignUp')->name('new-customer');
Route::post('/checkout/customer-log-in','CustomerController@customerLoginCheck')->name('customer-login');
Route::post('/checkout/customer-logout','CustomerController@customerLogout')->name('customer-logout');
/*check-out login*/
/*shipping*/
Route::get('/checkout/shipping','CustomerController@shippingForm')->name('checkout-shipping');
Route::post('/shipping/save','CustomerController@saveShippingInfo')->name('new-shipping');
/*shipping*/
/*payment*/
Route::get('/checkout/payment','CustomerController@paymentForm')->name('checkout-payment');
/*payment*/
/*order*/
Route::post('/checkout/order','CustomerController@newOrder')->name('new-order');
//Route::get('/complete/order','CustomerController@completeOrder')->name('complete-order');

/*order*/
/*customer-login*/
Route::get('/newcustomer/log-in','CustomerController@newCustomerLogin')->name('new-customer-login');
Route::post('/newcustomer/registration','CustomerController@newcustomerSignUp')->name('new-customer-reg');
Route::post('/new/customer/login','CustomerController@newCustomerLoginCheck')->name('new-customer-login-form');

/*customer-login*/

Route::get('/track', 'PageController@showtrackpage')->name('track');
Route::get('/contact', 'PageController@showcontactpage')->name('contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin
Route::get('/category/add','CategoryController@index')->name('add_category');
Route::post('/category/save' ,'CategoryController@saveCategory')->name('insert-category');
Route::get('/category/manage' ,'CategoryController@manageCategory')->name('manage_category');
Route::get('/category/unpublished/{id}' ,'CategoryController@unpublishedCategory')->name('unpublished-category');
Route::get('/category/published/{id}' ,'CategoryController@publishedCategory')->name('published-category');
Route::get('/category/edit/{id}','CategoryController@editCategory')->name('edit-category');
Route::post('/category/update','CategoryController@updateCategory')->name('update-category');
Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('delete-category');
/*brand*/
Route::get('/brand/add', 'BrandController@index')->name('add-brand');
Route::post('/brand/new','BrandController@saveBrand')->name('new-brand');
Route::get('/brand/manage' ,'BrandController@manageBrand')->name('manage_brand');
Route::get('/brand/unpublished/{id}' ,'BrandController@unpublishedBrand')->name('unpublished-brand');
Route::get('/brand/published/{id}' ,'BrandController@publishedBrand')->name('published-brand');
Route::get('/brand/edit/{id}','BrandController@editBrand')->name('edit-brand');
Route::post('/brand/update','BrandController@updateBrand')->name('update-brand');
Route::get('/brand/delete/{id}','BrandController@deleteBrand')->name('delete-brand');
/*brand*/
/*contact*/
Route::get('/contact/add', 'ContactController@index')->name('add-contact');
Route::post('/contact/new','ContactController@saveContact')->name('new-contact');
Route::get('/contact/manage' ,'ContactController@manageContact')->name('manage-contact');
Route::get('/contact/unpublished/{id}' ,'ContactController@unpublishedContact')->name('unpublished-contact');
Route::get('/contact/published/{id}' ,'ContactController@publishedContact')->name('published-contact');
Route::get('/contact/edit/{id}','ContactController@editContact')->name('edit-contact');
Route::post('/contact/update','ContactController@updateContact')->name('update-contact');
Route::get('/contact/delete/{id}','ContactController@deleteContact')->name('delete-contact');
/*contact*/
/*product*/
Route::get('/product/add','ProductController@index')->name('add-product');
Route::post('/product/save','ProductController@saveProduct')->name('new-product');
Route::get('/product/manage','ProductController@manageProduct')->name('manage-product');
Route::get('/product/edit/{id}','ProductController@editProduct')->name('edit-product');
Route::post('/product/update','ProductController@updateProduct')->name('update-product');
Route::get('/product/delete/{id}','ProductController@deleteProduct')->name('delete-product');
/*product*/

/*order*/
Route::get('/order/manage-orders','OrderController@manageOrder')->name('manage-orders');
Route::get('/order/view-order-detail/{id}','OrderController@viewOrderDetails')->name('view-order-detail');
Route::get('/order/view-order-invoice/{id}','OrderController@viewOrderInvoice')->name('view-order-invoice');
Route::get('/order/download-order-invoice/{id}','OrderController@downloadOrderInvoice')->name('download-invoice');
/*order*/


