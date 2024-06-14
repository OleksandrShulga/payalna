<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller {
    public function register (Request $request) {
        if (Auth::check()) {
            return redirect('/centralpage');
        }
        if ($request->has('name') and $request->has('password') and $request->has('email')) {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required'
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            Auth::login($user);
            return redirect('/login');
        }
        return view('register');
    }
    public function login (Request $request) {
        if (Auth::check()) {
            return redirect('/centralpage');
        }
        if ($request->has('password') and $request->has('email')) {
            $auth = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required'
            ]);
            if (Auth::attempt($auth)) {
                $request->session()->regenerate();
                return redirect()->intended('centralpage');
            }
        }
    }

    public function article () {
        return view('article');
    }

    public function create (Request $request) {
        if ($request->has('title') and $request->has('text')) {
            $article = new Article();
            $article->title = $request->title;
            $article->content = $request->text;
            $article->author_id = 1;
            $article->created_at = Carbon::now();
            $article->updated_at = Carbon::now();

            $article->save();
            echo 'Стаття успішно додана в БД';
        }
        return view('create');
    }

    public function read () {

    }

    public function update () {

    }

    public function delete () {

    }
}
