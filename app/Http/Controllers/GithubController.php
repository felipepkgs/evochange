<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class GithubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('github')->user();

        $user = User::firstOrCreate([
            'github_id' => $user->id,
        ], [
            'name' => $user->nickname,
            'email' => $user->email,
            'avatar' => $user->getAvatar(),
            'password' => bcrypt('salt' . $user->id),
        ]);



        Auth::login($user, true);
        \Log::info('Logged in user: ' . $user->id);

        return redirect()->intended('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
