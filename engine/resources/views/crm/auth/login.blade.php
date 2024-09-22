<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{asset('images/favicon.png')}}">
    <title>CRM - Login Panel</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/crm/login.css')}}">

</head>

<body class="l-login-background">
    <div class="l-container">
        <div class="l-header">
            <h3 class="l-title">Login </h3>
            <img class="img mb-30" id="company_logo" src="<?php echo asset('upload/logo_icon_grey.png')?>" alt="Logo" />
            <p id="l-messageerror" class="l-display-none"></p>
        </div>
        <div class="l-panel-body">
        <form class="form-horizontal" name="form-login" id="form-login" method="POST" action="{{ route('authcrm') }}">
                {{ csrf_field() }}
                <div class="l-form-group">
                    <label>Email</label>
                    <input name="email" type="email" id="email" class="l-form-control" value="" required placeholder="Email">
                </div>

                <div class="l-form-group">
                    <label>Password</label>
                    <div class="l-input-group">
                        <input name="password" type="password" id="password" class="l-form-control" value="" required placeholder="Password">
                        <div class="l-input-group-append">
                            <span class="l-input-group-text">
                                <i class="fa fa-eye-slash" id="togglePassword" onclick="toggle_password('password','togglePassword')"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="l-form-group">
                    <button id="login" type="submit" class="btn btn-block l-btn-fill btn-primary">
                        Login
                    </button>
                    <span class="logged d-none">Tunggu</span>
                    <span class="login-message d-none">Login</span>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#form-login").validate({
                submitHandler: function(form) {
                    $.ajax({
                        method: "POST",
                        url: "{{ url('authcrm')}}",
                        data: $("#form-login").serialize(),
                        dataType: "json",
                        beforeSend: function() {
                            $('#login').html($(".logged").html());
                            $('#login').prop("disabled", true);
                        },
                        success: function(data) {
                            if (data.success === 'success') {
                                window.setTimeout(function() {
                                    location.href = '{{ route("dashboardcrm") }}';
                                }, 1000);
                            } else {
                                $("#l-messageerror").html(data.message);
                                $("#l-messageerror").css('display', 'block');
                                $('#login').html($(".login-message").html());
                                $('#login').prop("disabled", false);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#l-messageerror').html('An error occurred. Please try again.');
                            $('#l-messageerror').css('display', 'block');
                            $('#login').html($(".login-message").html());
                            $('#login').prop("disabled", false);
                        }
                    });
                }
            });
        });

        function toggle_password(passwordFieldId, toggleIconId) {
            const passwordField = $("#" + passwordFieldId);
            const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
            passwordField.attr('type', type);

            const toggleIcon = $("#" + toggleIconId);
            toggleIcon.toggleClass('fa-eye fa-eye-slash');
        }
    </script>
</body>

</html>
