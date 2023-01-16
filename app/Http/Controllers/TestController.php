<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all()->load('user_details');

        // return $users;
        echo '<pre>';print_r((array) $users);
    }

    public function create(Request $request) {
        $user = User::create([
            'name' => 'Anupam',
            'email' => 'anupam12@gmail.com',
            'password' => Hash::make('123456')
        ])->user_details()->create([
            'address' => 'Jadavpur'
        ]);

        return $user;
    }
    
}
