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

    public function destroy($id){
        User::destroy($id);
        return back();
    }
}