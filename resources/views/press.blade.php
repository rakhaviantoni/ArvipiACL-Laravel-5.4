@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">Press Release</li>
          </ul>

          <div id="create" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Create Press Release</h4>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/home/press/store') }}">
                    {{ csrf_field() }}
                <div class="modal-body">
                  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                      <label for="name" class="col-md-4 control-label">Title</label>

                      <div class="col-md-6">
                          <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                          @if ($errors->has('title'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                      <label for="category" class="col-md-4 control-label">Category</label>

                      <div class="col-md-6">
                          <input id="category" type="text" class="form-control" name="category" value="{{ old('category') }}" required autofocus>

                          @if ($errors->has('category'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('category') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <label for="description" class="col-md-4 control-label">Description</label>

                      <div class="col-md-6">
                          <textarea id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus></textarea>

                          @if ($errors->has('description'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <input id="userid" type="hidden" class="form-control" name="userid" value="{{ Auth::user()->userid }}">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Create</button>
                </form>
                </div>
              </div>
            </div>
          </div>

            <div class="panel panel-default">
                <div class="panel-heading">Press Release</div>

                <div class="panel-body">
                  <button type="button" data-toggle="modal" data-target="#create" class="btn btn-primary" title="Create New"><span class="glyphicon glyphicon-plus"></span></button><br><br>
                  <table id="press-table" class="table-stripped">
                      <thead>
                      <tr>
                          <th>Title</th>
                          <th>Slug</th>
                          <th>Time</th>
                          <th>Category</th>
                          <th>Description</th>
                          <th>User</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function () {
        $('#press-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '/home/press/data',
            columns: [
                {data: 'title'},
                {data: 'slug'},
                {data: 'created_at'},
                {data: 'category'},
                {data: 'description'},
                {data: 'user.username'},
                {data: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endsection
