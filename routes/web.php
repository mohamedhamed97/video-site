<?php



Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/my_profile' ,'UserController@index')->name('my_profile');
Route::get('/complete_profile' ,'UserController@complete_profile')->name('complete_profile');
Route::post('/complete_profile' , 'UserController@complete_profile_data')->name('complete-profile_data');
Route::get('/add_skills' , 'UserController@add_skills')->name('add_skills');
Route::post('/add_user_skills' , 'UserController@add_user_skills')->name('add_user_skills');
Route::get('/dashboard' ,'DashboardController@index')->name('control-panel');
Route::post('/edit_user_info' , 'DashboardController@edit_user')->name('edit_user_info');
Route::post('/edit_user_skills' , 'DashboardController@edit_user_skills')->name('edit_user_skills');
Route::post('/search_for/' , 'DashboardController@search')->name('search');
Route::get('/worker_profile/{id}' , 'DashboardController@worker_profile')->name('worker_profile');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
