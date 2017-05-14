@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <!-- left column -->
            <div class="col-sm-3">
                @include('includes.left_sidebar')
            </div>
            <!-- edit form column -->
            <div class="col-sm-9 personal-info">
                <h1>Edit Profile</h1>
                <hr>
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    You must provide <strong>birthday</strong> when update your information.
                </div>
                <h3>Personal info</h3>

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Full name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="fullname" type="text" value="{{$info->name}}">
                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="email" type="email" value="{{$info->email}}">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Birthday:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="birthday" type="date" max="2017-06-25" min="1990-01-01" value="{{$info->Birthday}}">
                            <span class="text-danger">{{ $errors->first('birthday') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Gender:</label>
                        <div class="col-lg-8">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input class="form-control" type="radio" name="gender" value="1" /> Male
                                </label>
                                <label class="btn btn-default">
                                    <input class="form-control" type="radio" name="gender" value="0" /> Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Phone:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="phone" type="text" value="{{$detail->phone}}">
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">State:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="state" type="text" value="{{$detail->state}}">
                            <span class="text-danger">{{ $errors->first('state') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">City:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="city" type="text" value="{{$detail->city}}">
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Address:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="address" type="text" value="{{$detail->address}}">
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-3 control-label">New Password:</label>
                        <div class="col-md-8">
                            <input id="password" type="password" class="form-control" name="password" placeholder="">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-3 control-label">Confirm Password:</label>

                        <div class="col-md-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-success" value="Save Changes">
                            <input type="reset" class="btn btn-info" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection