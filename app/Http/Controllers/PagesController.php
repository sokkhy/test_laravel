<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
   public function index()
   {
   	if(View::exists('pages.index'))
   	return view('pages.index')
   	->with('text', 'welcome');
   	else 
   		return('not found');
   }
   public function profile()
   {
   	return view('pages.profile');
   }
   public function blade(){
   	$gender ='fesdfsdmale';
   	return view('blade.bladetest',compact('gender'));
   }
}
