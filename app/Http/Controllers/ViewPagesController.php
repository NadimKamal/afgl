<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function tournaments(){
        return view('services.tournaments');
    }
    public function faq(){
        return view('services.faq');
    }
    public function notices(){
        return view('services.notices');
    }
    public function about(){
        return view('about');
    }
    public function membershipFee(){
        return view('fees-charges.membership-fee');
    }
    public function otherCharges(){
        return view('fees-charges.other-charges');
    }
    public function gallery(){
        return view('gallery');
    }
    public function committee(){
        return view('committee');
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
