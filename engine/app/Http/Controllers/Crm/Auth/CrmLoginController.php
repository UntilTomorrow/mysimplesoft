<?php

namespace App\Http\Controllers\Crm\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class CrmLoginController extends Controller
{
    public function logincrmform (Request $request)
    {
        return view('crm.auth.login');
    }
    
    public function authcrm (Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('dashboardcrm'));
        }

        return back()->withErrors([
            'email' => 'Invalid login',
        ]);
    }
}
