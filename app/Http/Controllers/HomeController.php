<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $book = Book::all();
        // $flag = 1;
        if($user->roles_id == 2){
            return view('index', compact('user', 'book'));
        }
        return view('home', compact('user'));
    }

    public function viewindex()
    {
        $user = Auth::user();
        $book = Book::all();
        return view('index', compact('user', 'book'));
    }
}
