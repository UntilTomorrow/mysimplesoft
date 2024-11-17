@include('crm.frontend.main')
<body class="nav-fixed">

@include('crm.frontend.presets.navbar')
        <div id="layoutSidenav">
        @include('crm.frontend.presets.leftnavbar')
            <div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-fluid px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i class="fa-solid fa-list-check"></i></div>
                                            Leads List
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary" href="{{ route('addleads') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                            Create New Lead
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- table -->
                    <div class="container-xl px-4">
                        <div class="card">
                            <div class="card-header">Leads</div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Company Name</th>
                                            <th>Source</th>
                                            <th>Status</th>
                                            <th>Agent</th>
                                            <th>Last Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $datas)
                                        <tr>
                                            <td>{{$datas->name}}</td>
                                            <td>{{$datas->phone}}</td>
                                            <td>{{$datas->email}}</td>
                                            <td>{{$datas->address}}</td>
                                            <td>{{$datas->company_name}}</td>
                                            <td>{{$datas->source}}</td>
                                            <td>{{$datas->status}}</td>
                                            <td>{{$datas->agent_assign}}</td>
                                            <td>{{$datas->last_contact}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end table -->
                </main>
                @include('crm.frontend.presets.footer')
            </div>
        </div>
@include('crm.frontend.js')
</body>