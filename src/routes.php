<?php
$usarmanagePath = Config::get('usermanage.usermanage_url');

Route::group(['middleware' => ['web','auth'] ,'prefix' => $usarmanagePath], function () {

  Route::get('/', '\Devuniverse\Usermanage\Controllers\UsermanageController@index')->name('usermanage.index');
  Route::get('add', function(){
    echo 'LALA';
  });

});
