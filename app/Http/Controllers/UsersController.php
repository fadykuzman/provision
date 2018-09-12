<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function destroy()
    {

        $user = Auth::user();
        $user->delete();

        return redirect()->home();
    }
}
