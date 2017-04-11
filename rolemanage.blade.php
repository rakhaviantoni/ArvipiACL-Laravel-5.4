@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @include('toast::messages')
          <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Role Management</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Role Management</div>

                <div class="panel-body">
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Press Release</th>
                        <th>Users</th>
                        <th>News</th>
                        <th>Payroll</th>
                        <th>Employees</th>
                        <th>Recruitment</th>
                        <th>Marketing</th>
                        <th>Sales</th>
                      </tr>
                      </thead>

                      <tbody>
                      <tr>
                      @foreach ($users as $user)
                      @foreach ($roles as $role)
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->position }}</td>
                        <form action="{{ url('/home/users/rolepermission') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $user->id }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->press ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->users ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->news ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->payroll ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->employees ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->recruitment ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->marketing ? 'checked' : '' }}</td>
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->sales ? 'checked' : '' }}</td>
                        </form>
                    </tbody>
                    @endforeach
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
