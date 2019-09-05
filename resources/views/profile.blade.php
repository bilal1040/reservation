@extends('layouts.app')
@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Votre profil') }}</div>

                <div class="card-body">



					<form method="POST" action="{{url('profile')}} ">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control " name="login" value="{{Auth::user()->login}} " required autocomplete="login" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control " name="firstname" value="{{Auth::user()->firstname}}" required autocomplete="firstname" autofocus>

                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control " name="lastname" value="{{Auth::user()->lastname}}" required autocomplete="lastname" autofocus>

                            </div>
                        </div>

                        


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email" disabled="disabled">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('confirmer') }}
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