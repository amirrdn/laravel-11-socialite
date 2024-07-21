<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        
        $user = Socialite::driver('google')->user();
        $this->loginOrRegisterUser($user, 'google');
        return redirect()->intended('/dashboard');
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $this->loginOrRegisterUser($user, 'facebook');
        return redirect()->intended('/dashboard');
    }

    protected function loginOrRegisterUser($socialUser, $provider)
    {
        $user = User::where('provider_id', $socialUser->getId())->first();
        if (!$user) {
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'password' => \Hash::make(uniqid())
            ]);
        }
        Auth::login($user);
    }
}
