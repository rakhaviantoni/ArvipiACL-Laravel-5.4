@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
          @include('toast::messages')
          <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Role Permission</li>
          </ul>
            <div class="panel panel-default">
                <div class="panel-heading">Role Permission</div>

                <div class="panel-body">
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>Position/Role</th>
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
                      <!-- @foreach ($users as $user) -->
                      @foreach ($roles as $role)
                        <!-- <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td> -->
                        <td>{{ $role->positionname }}</td>
                        <form action="{{ url('/home/role/changepermission/press') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->press ? 'checked' : '' }}></td>
                      </form>
                      <form action="{{ url('/home/role/changepermission/users') }}" method="POST">
                      {!! csrf_field() !!}
                      <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->users ? 'checked' : '' }}></td></form>
                        <form action="{{ url('/home/role/changepermission/news') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->news ? 'checked' : '' }}></td></form>
                        <form action="{{ url('/home/role/changepermission/payroll') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->payroll ? 'checked' : '' }}></td></form>
                        <form action="{{ url('/home/role/changepermission/employees') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->employees ? 'checked' : '' }}></td></form>
                        <form action="{{ url('/home/role/changepermission/recruitment') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->recruitment ? 'checked' : '' }}></td></form>
                        <form action="{{ url('/home/role/changepermission/marketing') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->marketing ? 'checked' : '' }}></td></form>
                        <form action="{{ url('/home/role/changepermission/sales') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $role->positionid }}" >
                        <td><input type="checkbox" onClick="this.form.submit()" {{ $role->sales ? 'checked' : '' }}></td>
                        </form>
                    </tbody>
                    @endforeach
                    <!-- @endforeach -->
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
