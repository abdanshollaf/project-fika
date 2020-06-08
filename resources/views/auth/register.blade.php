@extends('layouts.app')
@section('title')
<title>Admin | Login</title>
@endsection

@section('content')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="auth-box ">
            <div class="left">
                <div class="content">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="header">
                        {{-- <div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div> --}}
                        <p class="lead">Register to your account</p>
                    </div>
                    <form class="form-auth-small" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Name</label>
                            <input type="text" class="form-control" id="signin-name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" class="form-control" id="signin-password" name="password"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                        {{-- <div class="form-group clearfix">
							<label class="fancy-checkbox element-left">
								<input type="checkbox">
								<span>Remember me</span>
							</label>
						</div> --}}
                        <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                        <div class="bottom">
                            <span class="helper-text"><i class="fa fa-user"></i> Already a member ? <a
                                    href="{{ route('login') }}">Log In</a></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="overlay"></div>
                <div class="content text">
                    <h1 class="heading">Welcome To Admin Templates</h1>
                    <p>by The Develovers</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
