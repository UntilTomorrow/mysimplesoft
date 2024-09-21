<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySimpleSoft</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="{{asset('assets/landing/landingpage.css')}}">
</head>
<body>
@include('landing.presets.nav')
    <div class="landing-page">
        <div class="content">
            <div class="container">
                <div class="info">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase">UI/UX · Development · Design</div>
                    </div>                
                    <div class="fs-3 fw-light text-muted">Ready to serve your needs</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#">Portfolio</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="#">Projects</a>
                    </div>
                </div>
                <div class="image">
                    <img src="https://img.freepik.com/free-vector/bird-colorful-gradient-design-vector_343694-2506.jpg?size=338&ext=jpg&ga=GA1.1.2008272138.1725667200&semt=ais_hybrid">
                </div>
            </div>
        </div>
    </div>
@include('landing.presets.js')
</body>
</html>
