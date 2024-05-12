<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class IndexController extends Controller
{


    public function login(){
        return Socialite::driver('discord')->redirect();
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function callback(){
        $discordUser = Socialite::driver('discord')->user();
        $user = User::where('email', $discordUser->email)->first();

        if(!$user){
            $user = new User();
            $user->discord_user_id = $discordUser->id;
            $user->nickname = $discordUser->nickname;
            $user->name = $discordUser->name;
            $user->email = $discordUser->email;
            $user->avatar = $discordUser->avatar;
            $user->verified = $discordUser->user["verified"];
            $user->token=$discordUser->token;
            $user->refresh_token=$discordUser->refreshToken;
            $user->save();
        }
        Auth::login($user);
        return redirect()->route("profile");
    }
}
