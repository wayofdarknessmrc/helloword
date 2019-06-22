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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-word/{name}/{first_Name}', function($name, $first_Name){
  return view('hello-word', [
    "name" => $name,
    "first_Name" =>$first_Name
  ]);
});

Route::get('/seed/customers', function(){
    $faker = Faker\Factory::create();
    $limit = 1000;
    $customers = [];
    for ($i = 0; $i < $limit; $i++) {
        $customers[$i] = [
            'Họ và tên'     => $faker->name,
            'Email'         => $faker->unique()->email,
            'Số điện thoại' => $faker->phoneNumber,
            'Website'       => $faker->domainName,
            'Tuổi'          => $faker->numberBetween(20,100),
            'Địa chỉ'       => $faker->address
        ];
    }
    return response()->json($customers);
});

Route::get('/role',[
   'middleware' => 'role:superadmin',
   'uses' => 'MainController@checkRole',
]);

Route::get('category/laravel-nang-cao', 'MainController@uriTest');

Route::get('user-info', 'MainController@getUserInfo');
//Contact
Route::get('contact', 'ContactController@showContactForm');
Route::post('contact', 'ContactController@insertMessage');
//Register
Route::post('register', 'UserController@storeUser');
Route::get('register', 'UserController@showRegisterForm');

//Product
Route::get('product', 'ProductController@index');
Route::get('product/create', 'ProductController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
