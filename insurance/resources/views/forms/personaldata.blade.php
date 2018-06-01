@extends('layouts.general')

@section('content')
<div class="row">
    <div class="col col-lg-2">
        <ul class="nav flex-column flex-nowrap">
            <li class="nav-item active">{{ __('Personal data') }}</li>
            <li class="nav-item">{{ __('Detailed info') }}</li>
            <li class="nav-item">
                <a href="#" class="collapsed" id="drivers" data-toggle="collapse" data-target="#driversubmenu">
                    <strong>{{ __('Drivers') }}</strong>
                </a>
                <div class="collapse" id="driversubmenu" aria-expanded="false">
                    <ul class="flex-column nav" id="drivercollapse" role="menu" aria-labelledby="drivers">
                        <li class="nav-link nav-item">{{ __('Main driver') }}</li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="collapsed" id="cars" data-toggle="collapse" data-target="#carssubmenu">
                    <strong>{{ __('Cars') }}</strong>
                </a>
                <div class="collapse" id="carssubmenu" aria-expanded="false">
                    <ul class="flex-column nav" id="carscollapse" role="menu" aria-labelledby="cars">
                        <li class="nav-link nav-item">{{ __('First car') }}</li>        
                    </ul>
                </div>
            </li>
            <li class="nav-item">{{ __('Finish') }}</li>
    </div>
    <div class="col">
    <form action="{{ URL::action('InsuranceWizard@personalDataStore') }}" method="post">
        @csrf
            <div class="card">
                <div class="card-header">
                    {{ __('Personal data') }}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="firstname">{{  __('Firstname') }}</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="{{ __('Your firstname') }}" value="" />
                    </div>
                    <div class="form-group">
                        <label for="lastname">{{  __('Lastname') }}</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="{{ __('Your lastname') }}" value="" />
                    </div>
                    <div class="form-group">
                        <label for="email">{{  __('Email') }}</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="{{ __('Email') }}" value="" />
                        <small id="emailHelp" class="form-text text-muted">{{ __('We\'ll never share your email with anyone else.') }}</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">{{  __('Phone') }}</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="{{ __('Phone') }}" value="" />
                        <small id="phoneHelp" class="form-text text-muted">{{ __('We\'ll never share your phone number with anyone else.') }}</small>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="agreed" />
                        <label class="form-check-label" for="aggred">{!! __('I am agree about our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>') !!}
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-success" value="{{ __('Next') }}" />
                </div>
            </div>
        </form>
        <small class="form-text text-muted">{!! __('Please review and agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>') !!}</small>
    </div>
</div>
@endsection