<?php

namespace App\Http\Controllers\Crm\Backend;

use Illuminate\Http\Request;
use App\Models\Lead;

use App\Http\Controllers\Controller;

class CrmMainController extends Controller
{
    public function dashboardcrm (Request $request)
    {
        $title = 'Dashboard CRM';
        return view('crm.frontend.dashboard', compact('title'));
    }

    public function leads(Request $request)
    {
        $title = 'Leads';
        $data = Lead::all();
        
        return view('crm.frontend.leads', compact('title','data'));
    }

    public function leadsstatus(Request $request)
    {
        $title = 'Leads Status';
        return view('crm.frontend.leadsstatus', compact('title'));
    }

    public function leadssource(Request $request)
    {
        $title = 'Leads Source';
        return view('crm.frontend.leadssource', compact('title'));
    }

}
