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
    
    public function authcrm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'error' => 'Email not found',
            ], 404); 
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('dashboardcrm'));
        }

        return response()->json([
            'error' => 'Incorrect password',
        ], 401);
    }

    public function logoutcrm(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('logincrmform');
    }

}
