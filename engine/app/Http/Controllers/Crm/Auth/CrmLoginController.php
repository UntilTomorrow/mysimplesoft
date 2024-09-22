<?php

namespace App\Http\Controllers\Crm\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CrmLoginController extends Controller
{
    public function logincrmform (Request $request)
    {
        return view('crm.auth.login');

    }
}
