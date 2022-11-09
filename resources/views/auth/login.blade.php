@extends('layouts.auth')
@section('page-title', 'Login')
@section('content')

    {{-- <section class="form">
        <div class="container-fluid">
            <div class="row mx-5">
                <div class="col-md-6 box-login center">

                    <form action="{{ route('login') }}" method="post">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf

                        <h1 class="fw-bold mb-5 text-center">Login</h1>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username"  value="{{old('username')}}" placeholder="Enter Username">
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-2">
                            <div class="forgot-pass">
                                <a href # style="text-decoration: none">Forgot Password</a>
                            </div>
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>

                        <div class="text-center">
                            <p>No account yet? <a href="{{ route('register') }}" style="text-decoration: none">Register here!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5">

                            <form action="{{ route('login') }}" method="post">
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <div class="text-center">
                                    <a href="{{ route('landingPage') }}" class="pup-logo">
                                        <img src="{{ asset('img/pupLogo.png') }}" style="height: 100px;">
                                    </a>
                                    <h2 class="my-3">PUPTAPS - Login</h2>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label class="form-label" >Email</label>
                                    <input type="text" class="form-control" name="email"/>
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    {{-- <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"/>
                                    <i class="fa-solid fa-eye" id="togglePassword"></i> --}}

                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control">
                                        <button class="btn btn-outline-secondary text-white" type="button" id="togglePassword">
                                            <i class="fa-solid fa-eye" ></i>
                                        </button>
                                    </div>
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>

                                <p class="small mb-5 pb-lg-2">
                                    <a class="text-white fw-bold" href="#!">Forgot password?</a>
                                </p>

                                <div class="text-center">
                                    <button class="btn btn-outline-light px-5" type="submit">Login</button>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">No account yet? <a href="{{ route('register') }}" class="text-white fw-bold">Register here!</a>
                                </p>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
