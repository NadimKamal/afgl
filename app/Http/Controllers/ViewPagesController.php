<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPagesController extends Controller
{
    public function test(){
        return view('test');
    }
    public function contact(){
        return view('contact');
    }
    public function signin(){
        return view('signin');
    }
    public function signup(){
        return view('signup');
    }
    public function applyMembership(){
        return view('membership.apply-membership');
    }
    public function cancelMembership(){
        return view('membership.cancel-membership');
    }
    public function activeMember(){
        return view('membership.active-member');
    }
    public function silentMember(){
        return view('membership.silent-member');
    }
}
