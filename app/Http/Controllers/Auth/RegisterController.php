<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'team_name' => ['required', 'string', 'max:255', 'unique:users'],
            'email_leader' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'full_name' => ['required', 'string'],
            'wa_num' => ['required', 'string','min:9', 'unique:user'],
            'line_id' => ['required', 'string', 'unique:user'],
            'github' => ['required', 'string'],
            'birth_place' => ['required', 'string'],
            'birth_day' => ['required'], 
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();

        $card = $request->file('card');
        $cardName = time() . Auth::id() . "-profile." . $card->getClientOriginalExtension();

        $upload_card = 'profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        $request = request();

        $profileImage = $request->file('cv');
        $profileImageSaveAsName = time() . Auth::id() . "-profile." . $profileImage->getClientOriginalExtension();

        $upload_path = 'profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        return User::create([
            'team_name' => $data['team_name'],
            'email_leader' => $data['email_leader'],
            'password' => Hash::make($data['password']),
            'fullname' => $data['full_name'],
            'wa_num' => $data['wa_num'],
            'line_id' => $data['line_id'],
            'github' => $data['github'],
            'birth_place' => $data['birth_place'],
            'birth_day' => $data['birth_day']
        ]);
    }   
}
