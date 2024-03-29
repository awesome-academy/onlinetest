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

Route::get('admin/login', 'Auth\LoginController@getLoginAdmin')->name('admin.getLogin');
Route::post('admin/login', 'Auth\LoginController@login')->name('admin.postLogin');

Route::get('admin/first-login', 'FirstLoginController@getFirstLoginAdmin')->name('admin.getFirstLogin');
Route::post('admin/first-login', 'FirstLoginController@postFirstLogin')->name('admin.postFirstLogin');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'checkFirstLogin']], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('admin.users.index');

        Route::get('profile/{id?}', 'UserController@profile')->name('admin.users.profile');

        Route::get('edit/{id?}', 'UserController@edit')->name('admin.users.edit');
        Route::post('edit/{id?}', 'UserController@update')->name('admin.users.update');

        Route::get('delete/{id}', 'UserController@delete')->name('admin.users.delete');

        Route::get('role_tests/{user_id}', 'UserController@getRoleTest')->name('admin.users.role_tests');
        Route::post('role_tests/{user_id}', 'UserController@postRoleTest')->name('admin.users.postRoleTest');
    });

    Route::resource('categories', 'CategoryController')->except(['show']);

    Route::group(['prefix' => 'tests'], function () {
        Route::get('choose-add-question/{test_id}', 'TestController@getChooseAddQuestion')
            ->name('admin.questions.chooseAddQuestion');
        Route::post('choose-add-question/{test_id}', 'TestController@postChooseAddQuestion')
            ->name('admin.questions.postChooseAddQuestion');
        Route::get('search_question', 'QuestionController@getSearchQuestion')->name('admin.question.search');

        Route::get('getTests', 'TestController@getTests')->name('admin.test.getTests');
    });
    Route::resource('tests', 'TestController');

    Route::group(['prefix' => 'questions'], function () {
        Route::get('getQuestions', 'QuestionController@getQuestions')->name('admin.questions.getQuestions');

        Route::get('import', 'QuestionController@getImport')->name('admin.questions.getImport');
        Route::post('import', 'QuestionController@postImport')->name('admin.questions.postImport');
    });
    Route::resource('questions', 'QuestionController');

    Route::resource('comments', 'CommentController')->except(['show', 'edit', 'update', 'create']);
    Route::get('getComments', 'CommentController@getComments')->name('admin.comments.getComments');
});
