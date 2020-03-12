<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use App\User;

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
  
    public function boot()
    {
        $current = Carbon::now();
       
    
        View::share('current',$current);
        $organizerType= 'organizer'; 
        
        View::share('organizerType',$organizerType);
        $guestype= 'guest'; 
        View::share('guestype',$guestype);
        $participantType= 'participant'; 
        View::share('participantType',$participantType);
        $adminType= 'admin'; 
        View::share('adminType',$adminType);
       
    } 

  
}
