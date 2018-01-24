<?php

namespace App\Providers;
use View;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('age', function($expression){
            $data = json_decode($expression);
            $year = $data[0];
            $month =$data[1];
            $day = $data [2];
            $age = Carbon::createFromDate($year,$month,$day) ->age;
            return "<?php echo($age)?>";
        });
        Blade::directive('Hi', function($expression){
            return "<?php echo 'hello '. $expression; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $age = Carbon::createFromDate(1995,6,3)->age;
        View::share('age', $age);
        View::share('myname', 'khy');
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    
       }
}
