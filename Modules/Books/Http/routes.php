<?php

Route::group(['middleware' => 'web', 'prefix' => 'books', 'namespace' => 'Modules\Books\Http\Controllers'],
    function () {
        Route::get('/', 'BooksController@index');
    });
