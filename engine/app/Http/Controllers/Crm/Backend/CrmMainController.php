<?php

namespace App\Http\Controllers\Crm\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CrmMainController extends Controller
{
    public function dashboardcrm (Request $request)
    {
        return view('crm.frontend.dashboard');

    }
}