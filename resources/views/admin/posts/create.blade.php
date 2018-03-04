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
            <textarea rows="10" name="body" class="form-control" placeholder= "Enter body of post"></textarea>
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
        <div class="form-group">
          <label>Excerpt</label>
          <textarea name="excerpt" class="form-control" placeholder= "Enter excerpt of post"></textarea>
        </div>
      </div>

    </div>
  </div>
</form>
</div>

@endsection
