@extends('layouts.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form class="form-control" role="form" method="POST" action="{{ url('/login')}}">
                            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                            <input type="text" placeholder="Email" name="email" value="{{ $_SERVER['REQUEST_URI'] }}">
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                            <input type="password" placeholder="Password" name="password">
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                            <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form class="form-control" role="form" method="POST" action="{{ url('/signup')}}">
                            <input type="text" placeholder="Name" name="name">
                            <input type="email" placeholder="Email Address" name="email">
                            <input type="password" placeholder="Password" name="password">
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section>
@endsection
