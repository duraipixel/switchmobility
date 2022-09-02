@extends('auth.layouts.template')
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-xl-row flex-column-fluid">
        <div class="d-flex flex-column flex-center flex-lg-row-fluid">
            <div class="d-flex align-items-start flex-column p-5 p-lg-15">
                <a href="javascript:void(0)" class="mb-15">
                    <img alt="Logo" src="{{ asset('assets/media/logos/logo-1.svg') }}" class="h-40px" />
                </a>
                <h1 class="text-dark fs-2x mb-3">Welcome, Admin Users!</h1>
                <div class="fw-bold fs-4 text-gray-400 mb-10">Plan your blog post by choosing a topic creating
                    <br />an outline and checking facts
                </div>
                <img src="{{ asset('assets/media/illustrations/sketchy-1/8.png') }}" class="h-250px h-lg-350px" />
            </div>
        </div>

        <div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
            <div class="d-flex flex-center p-15 shadow-sm bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                    id="kt_sign_in_form"  action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3">Sign In to Metronic</h1>
                        <div class="text-gray-400 fw-bold fs-4">
                            <div class="fv-plugins-message-container invalid-feedback">
                                @error('email')
                                    <div data-field="email" data-validator="notEmpty">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" name="email"
                            autocomplete="off" value="{{ old('email') }}" required>
                       
                        <div class="fv-plugins-message-container invalid-feedback">                        
                        </div>
                    </div>
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <div class="d-flex flex-stack mb-2">
                            <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot
                                    Password ?</a>
                            @endif
                        </div>
                        <input class="form-control form-control-lg form-control-solid" type="password"
                            name="password" autocomplete="off">
                        <div class="fv-plugins-message-container invalid-feedback">
                            @error('password')
                                    <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                       
                    </div>
                    <div class="text-center">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                            <span class="indicator-label">Continue</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <div></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('add_on_script')
<script src="../../../assets/js/custom/authentication/sign-in/general.js"></script>
@endsection
