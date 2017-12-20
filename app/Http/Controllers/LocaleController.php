<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function change(Request $request, $language) {
        $request->session()->put('locale', $language);
        return redirect()->route('home');
    }
}
