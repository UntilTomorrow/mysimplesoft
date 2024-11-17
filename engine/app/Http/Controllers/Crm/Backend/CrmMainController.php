<?php

namespace App\Http\Controllers\Crm\Backend;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\User;
use App\Models\Source;
use App\Models\Status;
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
        
        return view('crm.frontend.leads.leads', compact('title','data'));
    }

    public function leadsstatus(Request $request)
    {
        $title = 'Leads Status';
        $data = Status::all();
        return view('crm.frontend.leads.leadsstatus', compact('title','data'));
    }

    public function leadssource(Request $request)
    {
        $title = 'Leads Source';
        $data = Source::all();
        return view('crm.frontend.leads.leadssource', compact('title','data'));
    }

    public function addleads(Request $request)
    {
        $title = 'Add Leads';
        // $leads = Lead::select('source', 'status', 'agent_assign')->distinct()->get();

        $sources = Source::select('id', 'source_name')
                ->where('active', 1)
                ->get();

        $statuses = Status::select('id', 'status_name')
                ->where('active', 1)
                ->get();

        $agents = User::select('id','name') -> get();

        return view('crm.frontend.leads.addleads', compact('title','sources','statuses','agents'));

    }

    public function users(Request $request)
    {
        $title = 'Users';
        $data = User::all();
        return view('crm.frontend.users.users', compact('title','data'));
    }

}
