@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('NIP_EMP') ? ' has-error' : '' }}">
                            <label for="NIP_EMP" class="col-md-4 control-label">NIP EMP</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="NIP_EMP" value="{{ old('NIP_EMP') }}" required autofocus>

                                @if ($errors->has('NIP_EMP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIP_EMP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('NAMA_EMP') ? ' has-error' : '' }}">
                            <label for="NAMA_EMP" class="col-md-4 control-label">Nama EMP</label>

                            <div class="col-md-6">
                                <input id="NAMA_EMP" type="string" class="form-control" name="NAMA_EMP" value="{{ old('NAMA_EMP') }}" required>

                                @if ($errors->has('NAMA_EMP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NAMA_EMP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email EMP</label>

                            <div class="col-md-6">
                                <input id="name" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
