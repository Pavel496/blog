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
  <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
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
@endpush
