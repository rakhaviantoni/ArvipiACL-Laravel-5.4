@extends('layouts.app')

@section('content')
<!-- @include('toast::messages') -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
                        <th>HRD</th>
                        <th>Finance</th>
                        <th>Editorial</th>
                        <th>Marketing</th>
                        <th>Sales</th>
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
                        <td>@if ($user->role == 'admin')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="Admin" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->role == 'hrd')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="Hrd" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->role == 'finance')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="Finance" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->role == 'editorial')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="Editorial" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->role == 'marketing')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="Marketing" onClick="this.form.submit()">@endif</td>
                        <td>@if ($user->role == 'sales')
                          <input type="checkbox" onClick="this.form.submit()" checked>@else<input type="checkbox" name="newposition" value="Sales" onClick="this.form.submit()">@endif</td>
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
