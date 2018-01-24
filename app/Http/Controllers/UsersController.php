<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
class UsersController extends Controller
{
   public function index(){

// 	$users = [
// '0'=> [
// 'first_name' => 'sok',
// 'last_name' => 'khy',
// 'sex' => 'Male'
// ],
// '1'=>[
// 'first_name' => 'na',
// 'last_name' => 'vy',
// 'sex' => 'Femail'
// ]
// ];
   	$users = User:: all();
   	// return $users;
	return view('admin.users.index', compact('users'));
	}

public function create()
{

	return view('admin.users.create');
}

public function store(Request $request)
{
	User::create($request -> all());
	return 'user created';
	return $request -> all();
}


}