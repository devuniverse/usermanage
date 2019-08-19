<?php
$usarmanagePath = Config::get('usermanage.usermanage_url');

Route::group(['middleware' => ['web','auth'] ,'prefix' => $usarmanagePath], function () {

  Route::get('/', '\Devuniverse\Usermanage\Controllers\UsermanageController@index')->name('usermanage.index');
  Route::get('edit','\Devuniverse\Usermanage\Controllers\UsermanageController@edit')->name('usermanage.edit');

});
