<a  data-toggle="modal" data-target="#edit-{{ $edit_url }}" class="btn btn-primary" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp
<a href="{{ $delete_url }}" onclick="return confirm('Are you sure want to delete this?')" class="btn btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>

<div id="edit-{{ $edit_url }}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Edit Press Release</h4>
      </div>
      <form class="form-horizontal" action="{{ url('/home/press/update', $edit_url) }}" method="POST">
          {{ csrf_field() }}
      <div class="modal-body">
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Title</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" value="{{ $title }}" required autofocus>

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
                <input id="category" type="text" class="form-control" name="category" value="{{ $category }}" required autofocus>

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
                <textarea id="description" type="text" class="form-control" name="description" required autofocus>{{ $description }}</textarea>

                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('userid') ? ' has-error' : '' }}">

            <div class="col-md-6">
                <input id="userid" type="hidden" class="form-control" name="userid" value="{{ Auth::user()->userid }}">

                @if ($errors->has('userid'))
                    <span class="help-block">
                        <strong>{{ $errors->first('userid') }}</strong>
                    </span>
                @endif
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>
