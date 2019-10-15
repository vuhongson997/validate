<?php

namespace App\Providers;
use Validator;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
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
        //
        Validator::extend('in_phone',function ($attribute,$value,$parameters){
            return substr($value,0,3)=='+84';
        });

        Validator::extend('date_birthday', function($attribute, $value, $parameters, $validator) {
            $inserted = Carbon::parse($value)->year;
            return  $inserted<= Carbon::now()->year-10;
        });
        Validator::extend('id_number',function ($attribute,$value,$parameters){
            $length=strlen($value);
            return 9==$length||$length==12;
        });
    }
}
