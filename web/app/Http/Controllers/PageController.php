<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function home(Request $request) {
        
        $isSkip = $request->get('skip-welcome', false) || session('skip-welcome', false);
        if ($isSkip) {
            session(['skip-welcome' => true]);
        } else {
            return redirect()->action('PageController@welcome');
        }
        
        //TODO: Create array with 10 dummy items
        $products = new Collection([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
    
        $deals = new Collection([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        
        $pagename = 'home';
        
        return view('home', compact('products', 'deals', 'pagename'));
        
    }
    
    public function welcome() {
        
        return view('welcome');
        
    }
    
    public function mypage() {
        
        $pagename = 'account';
        
        return view('mypage', compact('pagename'));
        
    }
}
