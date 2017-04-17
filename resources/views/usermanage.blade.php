@extends('layouts.app')

@section('content')
<!-- @include('toast::messages') -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
          @if(Session::has('toasts'))
            @foreach(Session::get('toasts') as $toast)
              <div class="alert alert-{{ $toast['level'] }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {{ $toast['message'] }}
              </div>
            @endforeach
          @endif
          <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Users Management</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Users Management</div>

                <div class="panel-body">
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Admin</th>
                        <th>CEO</th>
                        <th>COO</th>
                        <th>CFO</th>
                        <th>CTO</th>
                        <th>CMO</th>
                        <th>Finance</th>
                        <th>HRD</th>
                        <th>Software Developer</th>
                        <th>Editorial</th>
                        <th>Marketing</th>
                        <th>Sales</th>
                        <th>Member</th>
                      </tr>
                      </thead>

                      <tbody>
                      <tr>
                      @foreach ($users as $user)
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <form action="{{ url('/home/users/changerole') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $user->id }}" >
                        <td>@if ($user->positionid == '1')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="1" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '2')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="2" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '3')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="3" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '4')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="4" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '5')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="5" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '6')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="6" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '7')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="7" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '8')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="8" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '9')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="9" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '10')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="10" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '11')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="11" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '12')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="12" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->positionid == '13')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="13" onClick="this.form.submit()">@endif</td>
                        </form>
                    </tbody>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
