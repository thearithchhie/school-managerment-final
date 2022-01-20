<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <script src="//unpkg.com/feather-icons"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('backend/auth/css/app.css') }}">
    <script src="{{ asset('backend/auth/js/app.js') }}"></script>
    <script src="//unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="login">
        <div class="login-wrapper">
            <div class="bg-image">
                <img class="logo" src="{{ asset('image/logo.png') }}" alt="">
            </div>
            <div class="form-container">
                <form class="form" id="login-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <h2>Login to Administrator</h2>
                    <p class="form-des">Thank you for get back to School Managerment Admin, lets
                        access our the best recommendation for
                        your</p>
                    <div class="form-wrapper">
                        <div class="form-row">
                            <label>Email <span>*</span> </label>
                            <input name="email" placeholder="Enter email" type="text">
                        </div>
                        <div class="form-row">
                            <label>Password <span>*</span> </label>
                            <input name="password" placeholder="Enter password" type="password">
                        </div>

                        <button color="primary" class="btn-submit-form" type="submit">
                            <span>Login</span>
                        </button>
                    </div>
                    @if (Session::has('status'))
                    <p class="q-label-error login-error">
                        Your email or password is incorrect.
                    </p>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('.selectData').select2();
            $('.custom-select').select2({
                minimumResultsForSearch: -1
            });
        });
        $(document).ready(function() {
            @if (Session::has('success'))
                toastr.success("{!! Session::get('success') !!}", 'Success Message!', {timeOut: 5000});
            @elseif(Session::has('error'))
                toastr.error("{!! Session::get('error') !!}", 'Error Message!', {timeOut: 5000});
            @elseif(Session::has('warning'))
                toastr.warning("{!! Session::get('warning') !!}", 'Warning Message!', {timeOut: 5000});
            @endif
        });
    </script>
    <script>
        $(document).ready(function() {
            let validate = {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            };
            $validator("#login-form", validate);
        });
    </script>
    <script src="{{ asset('js/body.js') }}"></script>
</body>
</html>
