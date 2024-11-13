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
                                            List Source Leads
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Content -->
                    <div class="container-xl px-4 mt-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header">Source</div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputsourcename">Source Name</label>
                                                    <input class="form-control" id="inputsourcename" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="row gx-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputcolor">Color</label>
                                                    <input class="form-control" id="inputcolor" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-auto mb-3">
                                                <a class="btn btn-sm btn-light text-primary" href="blog-management-create-post.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus me-1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                    Add New Source
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                             <!-- Table-->
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">Leads</div>
                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Color</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>2</td>
                                                        <td>2</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                    </div>
                </main>
                @include('crm.frontend.presets.footer')
            </div>
        </div>
@include('crm.frontend.js')
</body>