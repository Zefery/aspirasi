<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Aspirasi;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        return view ('admin');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        if (auth()->guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin-tampilan');
        } else {
            return back()->withErrors([
                'message' => 'Username or password is incorrect.',
            ]);
        }

        return view('admin-tampilan');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $aspirasis = Aspirasi::whereDate('created_at',$request->search)->get();
        }
        else{
            $aspirasis = Aspirasi::all();
        }

        return view('admin-tampilan')->with('aspirasis', $aspirasis);
    }

}

