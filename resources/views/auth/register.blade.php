@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Register</title>
  </head>
  <body>
    <div class="reg-form">
      <!-- team -->
      <form method="POST" action="{{ route('register') }}">
        @csrf
    
      <form action="#" class="team-reg" >
        
        <input
          type="text"
          id="team-name"
          placeholder="Team Name"
          id="team-name"
          required
        />
        <input
          type="password"
          id="password"
          placeholder="password"
          id="password"
          required
        />
        <input
          type="password"
          id="confirm-password"
          placeholder="Confirm Password"
          id="confirm-password"
          required
        />
      </form>
      <input
        type="radio"
        name="binusian"
        id="binusian"
        name="binusian"
        value="binusian"
      />
      <label for="binusian">Binusian</label>
      <input
        type="radio"
        name="non-binusian"
        id="non-binusian"
        name="non-binusian"
        value="non-binusian"
      />
      <label for="non-binusian">Non Binusian</label>
      <!-- team -->
      <!-- leader -->
      <form action="#" class="leader-reg">
        <input
          type="text"
          name="full-name"
          id="full-name"
          placeholder="Full Name"
          required
        />
        <input
          type="email"
          name="email-leader"
          id="email-leader"
          placeholder="Email"
          required
        />
        <input
          type="number"
          name="wa-num"
          id="wa-num"
          placeholder="Whatsapp Number"
          required
        />
        <input
          type="text"
          name="line-id"
          id="line-id"
          placeholder="LINE ID"
          required
        />
        <input
          type="text"
          name="gitID"
          id="gitID"
          placeholder="Github/Gitlab ID"
          required
        />
        <input
          type="text"
          name="birthplace"
          id="birthplace"
          placeholder="Birth Place"
          required
        />
        <input
          type="date"
          name="birthday"
          id="birthday"
          placeholder="dd/mm/yyyy"
          required
        />
        <!-- leader -->
        <!-- upload id n cv -->
        <label for="cv">Upload CV</label>
        <input
          type="file"
          id="cv"
          name="cv"
          accept="image/png, image/jpeg, image/jpg, image/pdf"
        />
        
      </form>
      <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
      </div>
    </form>
    </div>
    </div>
  </body>
</html>
@endsection
