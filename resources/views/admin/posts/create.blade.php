@extends('admin.layout')

@section('header')
  <h1>
    POSTS
    <small>Create post</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
    <li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Posts</a></li>
    <li class="active">Create post</li>
  </ol>
@endsection

@section('content')
  <div class="row">
    <form>
      <div class="col-md-8">
        <div class="box box-primary">
          {{-- <div class="box-header">
            <h3 class="box-title">Create post</h3>
          </div> --}}
            <div class="box-body">
              <div class="form-group">
                <label>Title</label>
                <input name="title" class="form-control" placeholder= "Enter title of post">
              </div>
              <div class="form-group">
                <label>Body</label>
                <textarea rows="10" id="editor" name="body" class="form-control" placeholder= "Enter body of post"></textarea>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          {{-- <div class="box-header">
            <h3 class="box-title"></h3>
          </div> --}}
          <div class="box-body">

            <!-- Date -->
            <div class="form-group">
              <label>Date of publication</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input name="published_at" type="text" class="form-control pull-right" id="datepicker">
              </div>
            </div>

            <div class="form-group">
              <label>Categories</label>
              <select class="form-control">
                <option value="">Select category</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>Tags</label>
              <select class="form-control select2"
                      multiple="multiple"
                      data-placeholder="Select one or more tags" style="width: 100%;">
                  @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>Excerpt</label>
              <textarea name="excerpt" class="form-control" placeholder= "Enter excerpt of post"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Save Publication</button>
            </div>

          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@push('styles')
  <link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
@endpush

@push('scripts')
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  <script src="/adminlte/plugins/select2/select2.full.min.js"></script>
  <script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script>
    $('#datepicker').datepicker({
      autoclose: true
    });
    $(".select2").select2();
    CKEDITOR.replace('editor');
  </script>
@endpush
