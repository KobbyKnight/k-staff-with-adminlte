@extends('layouts.log') @section('content')
<div class="row ">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>
                    <h3>{{ __('Register') }}</h3>
                </center>
            </div>

            <div class="panel-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="staff_id" class="col-md-4 col-form-label text-md-right">{{ __('Staff_ID# *') }}</label>

                        <div class="col-md-6">
                            <input id="staff_id" type="text" class="form-control{{ $errors->has('staff_id') ? ' is-invalid' : '' }}" name="staff_id"
                                value="{{ old('staff_id') }}" required autofocus> @if ($errors->has('staff_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('staff_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                required autofocus> @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                required> @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                        <div class="col-md-6">
                           
                          Member/User:  <input id="role_id" type="radio" class="form-control" name="role_id" value="1">                          
                           Admin: <input id="role_id" type="radio" class="form-control" name="role_id" value="0">  
                        </div>     

                        </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 ">
                            <center>
                                <button type="submit" class="btn btn-primary ml-auto">
                                    {{ __('Register') }}
                                </button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                Already have an Account?
                <a href="{{route('login')}}">Sign-In</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection