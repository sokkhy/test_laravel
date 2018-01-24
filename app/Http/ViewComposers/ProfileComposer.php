<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
class ProfileComposer
{
	public function compose(View $view){
		$view->with('test', 'sdf');
	}
}


?>