<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            
            dd($user);
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
