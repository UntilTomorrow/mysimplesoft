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
                                            Add New Leads
                                        </h1>
                                    </div>
                                    <div class="col-12 col-xl-auto mb-3">
                                        <a class="btn btn-sm btn-light text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle me-1">
                                                <path d="M9.09 9a3 3 0 1 1 5.83 1c-.32.75-.83 1.23-1.5 1.5-.67.27-1 .55-1 1.5m0 3h.01"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Content -->
                    <div class="container-xl px-4 mt-4">
                        <div class="card mb-4">
                                    <div class="card-header">Add Leads</div>
                                    <div class="card-body">
                                        <form>
                                        <div style="display: flex; gap: 20px; align-items: flex-start;">
                                            <!-- Source -->
                                            <div>
                                                <label class="small mb-1" for="source">Source</label>
                                                <select class="form-select" name="source" id="source">
                                                    <option value="" selected disabled>-- Select Source --</option>
                                                    @foreach($sources as $source)
                                                        <option value="{{ $source->id }}">{{ $source->source_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- Status -->
                                            <div>
                                                <label class="small mb-1" for="status">Status</label>
                                                <select class="form-select" name="status" id="status">
                                                    <option value="" selected disabled>-- Select Status --</option>
                                                    @foreach($statuses as $status)
                                                        <option value="{{ $status->id }}">{{ $status->status_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- Agent -->
                                            <div>
                                                <label class="small mb-1" for="agent">Agent</label>
                                                <select class="form-select" name="agent" id="agent">
                                                    <option value="" selected disabled>-- Select Agent --</option>
                                                    @foreach($agents as $agent)
                                                        <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="name">Name</label>
                                                    <input class="form-control" id="name" type="text" value="" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="phone">Phone</label>
                                                    <input class="form-control" id="phone" type="text"value="" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="email">Email</label>
                                                <input class="form-control" id="email" type="email" value="" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="adadress">Address</label>
                                                <input class="form-control" id="address" type="text" value="" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="small mb-1" for="company">Company Name</label>
                                                <input class="form-control" id="company" type="text" value="" />
                                            </div>
                                            <button class="btn btn-primary" type="button">Create Lead</button>
                                        </form>
                                    </div>
                                </div>
                    </div>
                </main>
                @include('crm.frontend.presets.footer')
            </div>
        </div>
@include('crm.frontend.js')
</body>