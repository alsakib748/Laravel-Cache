<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{

    public function setCache(){
        $users = User::orderBy('id','desc')->get();

        // todo: Set Cache
        Cache::put('users', $users, 10);

        return $users;

    }

    public function getCache(){

        // todo: Clear Cache
        Cache::pull('users');

        // todo: One of the way to get cache
        // $users = Cache::get('users');
        if(Cache::has('users')){
            // todo: Another Way to get cache
            $users = Cache::get('users')->where('email','jack.bailey5@example.com');
            // $users = Cache::get('users')->whereIn('id',[10,20,30,40,50]);

            return $users;
        }else{
            return "Cache Expired";
        }


    }

}
