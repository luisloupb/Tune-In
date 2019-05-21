<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use Socialite;
use Auth;


class RegisterController extends Controller
{


    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
    }

    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'last_name' => $data['last_name'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
        ]);
    }

    public function register(Request $request)
    {
        // dd($request);
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return redirect('/');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        $respuesta = User::where('email',$user->user['email'])->first();
        if($respuesta  == NULL)
            {
                $user_final =  User::create([
                    'name' => $user->user['given_name'],
                    'email' => $user->user['email'],
                    'last_name' => $user->user['family_name'],
                    'password' => Hash::make('TuneIn2019'),
                    'role_id' => 2,
                ]);
                Auth::login($user_final,true);
                return redirect('/home');

            }
        else{
            Auth::login($respuesta,true);
            return redirect("/home");
 
            }
        
    }

}
