@extends('admin.layout')

@section('header')
  <h1>
    POSTS
    <small>List</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ route('admin.posts.create') }}"><i class="fa fa-pencil"></i> Create post</a></li>
    <li class="active">All posts</li>
  </ol>
@endsection

@section('content')
  <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
                  <i class="fa fa-plus"></i> Create post</button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="posts-table" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Actions</th>
                  </tr>
                  </thead>

                  <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>
                          <a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></span></a>
                          <a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></span></a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
@endsection

@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('scripts')
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#posts-table').DataTable(
      //   {
      //   "paging": true,
      //   "lengthChange": false,
      //   "searching": false,
      //   "ordering": true,
      //   "info": true,
      //   "autoWidth": false
      // }
    );
    });
  </script>
{{--
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form method="POST" action="{{ route('admin.posts.store') }}">
      {{ csrf_field() }}
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Create title of new publication</h4>
            </div>
            <div class="modal-body">
              <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {{-- <label>Title</label> --}}
                <input name="title" class="form-control" value="{{ old('title') }}" placeholder= "Enter title of post">

                {!! $errors->first('title', '<span class="help-block">:message</span>') !!}

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button class="btn btn-primary">Create publication</button>
            </div>
          </div>
        </div>
      </form>
  </div>
--}}

@endpush
