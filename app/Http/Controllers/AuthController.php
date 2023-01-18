<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
   public function create() {
    return view('auth.create');
   }
   
   public function store(Request $request) {
    $response = Http::withOptions(['base_uri' => env('NETZWELT_URL')])
                ->post('/Account/SignIn', [
                    'username' => $request->input('username'),
                    'password' => $request->input('password')
                ]);
    if ($response->status() == 404) {
        return view('auth.create', ['message' => $response->json('message')]);
    }

    return redirect()->route('home');
    
   }
}
