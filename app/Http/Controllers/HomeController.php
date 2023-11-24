<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome () {
        return view('welcome');
        // return "Home page";
    }
    public function about () {
        return view('about');
    }
    public function contact () {
        return view('contact');
    }
    public function store () {
        return "Store Page";
    }
    public function users () {
            $user = request('user');
            if(isset($user)) {
                return 'This is user ' . strip_tags($user);
            }
            return 'You are viewing all users in the system.';
        }
public function stores ($category = null, $item = null) {
    if(isset($category)) {
        if(isset($item)) {
            return "You are viewing the content for " . $category . " for " . $item;
        }
        return "You are viewing content for " . $category;
    }
    return "You are viewing all instruments";
}
}
