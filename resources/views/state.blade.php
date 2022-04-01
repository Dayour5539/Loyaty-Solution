@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add States</div>
                  <div class="card-body">
                <form method="POST" action="{{ route('state.post') }}">
                    @csrf
                    <label>Name of State:</label>
                    <input type="text" name="name">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">
                </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection