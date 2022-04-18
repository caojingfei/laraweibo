<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function create()
    {
        return view('users.create');
    }
}
