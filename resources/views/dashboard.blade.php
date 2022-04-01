@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Select your Operation') }}</div>
  
                <div class="card-body">
                    <div>
                        <div class="card-header"><a class="navbar-brand" href="state">Add States</a></div>
                        <div class="card-header"><a class="navbar-brand" href="lga">Add LGA</a></div>
                        <div class="card-header"><a class="navbar-brand" href="ward">Add a Ward</a></div>
                        <div class="card-header"><a class="navbar-brand" href="citizen">Add a Citizen</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection