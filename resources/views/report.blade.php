@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">

          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Report</div>
                  <div class="card-body">
                  <table id="table" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Users in LGA</th>
                    </tr>
                
                </thead>
                <tbody>
                    @foreach ($wards as $ward)

                        <tr>
                            <td>{{ $ward->wardcount }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
            
            </div>
              </div><input type="button" onclick="window.print();" value="Print" />
          </div>
      </div>
  </div>
</main>
@endsection