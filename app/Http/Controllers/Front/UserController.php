<?php

namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function landing() {
        return view('landing');
    }
}
