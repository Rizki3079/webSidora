@extends('template_login')

@section('container_section')    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    @if (session()->has('msg_status'))
                        <div class="alert alert-{{ session()->has('msg_status') }}" role="alert">
                            {!! session('msg') !!}
                        </div>
                    @endif
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="w-200 mb-5">
                                <h3 class="mb-4 text-center">Silahkan Masuk</h3>
                                <p style="color: red;" class="text-center">
                                    <?php
                                    if (isset($_SESSION['msg'])) {
                                        echo $_SESSION['msg'];
                                    }
                                    ?>
                                </p>
                            </div>
                            <form action="{{ route('proccess-login') }}" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-placeholder" for="username">Email</label>
                                    <input type="email" name="email" autofocus class="form-control" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <input id="password-field" name="password" type="password" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" style="background-color: #1572e8;"
                                        class="form-control text-white btn rounded submit px-3">Masuk</button>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection