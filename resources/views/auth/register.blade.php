@extends('layouts.app')
@section('content')


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

              <div class="form-group row">
                <label for="firstname" class="col-sm-4 col-form-label text-md-right">First Name</label>

                <div class="col-md-6">
                  <input id="firstname" type="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" autofocus required>

                  @if ($errors->has('firstname'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="lastname" class="col-sm-4 col-form-label text-md-right">Last Name</label>

                <div class="col-md-6">
                  <input id="lastname" type="lastname" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" autofocus required>

                  @if ($errors->has('lastname'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">Adresse mail</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus required>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('password_confirmation') }}</label>

                <div class="col-md-6">
                  <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                  @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                <div class="col-md-6">
                  <input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" name="phone" required>

                  @if ($errors->has('phone'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="job" class="col-md-4 col-form-label text-md-right">{{ __('job') }}</label>

                <div class="col-md-6">
                  <input id="job" type="text" class="form-control{{ $errors->has('job') ? ' is-invalid' : '' }}" value="{{ old('job') }}" name="job" required>

                  @if ($errors->has('job'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('job') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                <div class="col-md-6">
                  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" name="address" required>

                  @if ($errors->has('address'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('company') }}</label>

                <div class="col-md-6">
                  <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" value="{{ old('company') }}" name="company" required>

                  @if ($errors->has('company'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('company') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('logo') }}</label>

                <div class="col-md-6">
                  <input id="logo" type="file" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" required>

                  @if ($errors->has('logo'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    S'enregistrer
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