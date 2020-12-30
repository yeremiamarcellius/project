<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class AdminController extends Controller
{
    public function home(){
        $users = User::all();
        return view('adminparticipant', compact('users'));
    }

    public function payment(){
        $users = User::all();
        return view('adminpayment', compact('users'));
    }

    public function view($id){
        $user = User::FindOrFail($id);
        $members = Member::all();
        return view('view', compact('user', 'members'));
    }

    public function edit($id){
        $user = User::FindOrFail($id);
        $members = Member::all();
        return view('edit', compact('user', 'members'));
    }

    public function store(Request $request){
        $request->validate([
            'team_name' => ['required', 'string', 'max:255', 'unique:users'],
            'email_leader' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'full_name' => ['required', 'string'],
            'wa_num' => ['required', 'string','min:9', 'unique:users'],
            'line_id' => ['required', 'string', 'unique:users'],
            'github' => ['required', 'string'],
            'birth_place' => ['required', 'string'],
            'birth_day' => ['required'], 
            'card' => ['required'],
            'cv' => ['required'],
        ]);

        return User::FindOrFail($id)->update([
            'team_name' => $data['team_name'],
            'email_leader' => $data['email_leader'],
            'password' => Hash::make($data['password']),
            'fullname' => $data['full_name'],
            'wa_num' => $data['wa_num'],
            'line_id' => $data['line_id'],
            'github' => $data['github'],
            'birth_place' => $data['birth_place'],
            'birth_day' => $data['birth_day'],
            'type' => $data['status'],
            'card' => $fileNameToStore,
            'cv' => $fileNameToStorecv,
        ]);
    }

    public function destroy($id){
        User::destroy($id);
        return back();
    }
}