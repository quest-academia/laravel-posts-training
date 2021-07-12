<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // utf8mb4のキャラクタセットだとデータを格納する際、1文字当たり4byteの領域が必要
        // MySQLのVer5.7.7以前の場合、テーブルのIndexに指定できるデータ長は最大767byte
        // 191文字と指定することで「191*4=764」で767byte以下になるため
        \Schema::defaultStringLength(191);
    }
}
