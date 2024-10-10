<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DiscordController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function handleProviderCallback()
    {
        $discordUser = Socialite::driver('discord')->user();
        $user = User::where('discord_id', $discordUser->getId())->first();
    
        if (!$user) {
            // Verifique se o e-mail já está em uso
            $existingUser = User::where('email', $discordUser->getEmail())->first();
            
            if ($existingUser) {
                // Se o usuário com o e-mail já existe, atualize o discord_id
                $existingUser->discord_id = $discordUser->getId();
                $existingUser->save();
                $user = $existingUser;
            } else {
                // Cria um novo usuário
                $user = User::create([
                    'name' => $discordUser->getName(),
                    'email' => $discordUser->getEmail(),
                    'discord_id' => $discordUser->getId(),
                    'password' => Hash::make(Str::random(16)), // ou nulo se você permitir
                ]);
            }
        }
    
        Auth::login($user, true);
    
        return redirect()->route('home');
    }    
}
