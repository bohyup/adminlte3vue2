@extends('core.app')

@section('content')
    <div class="row">
        <div class="col-md-3 m-auto">
            <div class="card text-center">
                <div class="card-header">
                    <a href="#none"><strong>Admin</strong> LTE</a>
                </div>
                <div class="card-body">
                    <p class="card-text">Login</p>

                    <form action="{{ Route('login') }}" method="post">
                        @csrf

                        @if(Session::has('message'))
                            <div class="alert alert-info alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <div class="form-group row">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="ID" id="email" name="email" value="{{ Cookie::get('cookieId') ? Cookie::get('cookieId') : old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <div class="checkbox text-left">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ Cookie::get('cookieId') ? 'checked' : ( old('remember') ? 'checked' : '' ) }} > <small>REMEMBER ID</small>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
