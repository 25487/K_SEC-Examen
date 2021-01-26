<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
      <h4>{{$Title}} | Laravel CRUD</h4>
      <hr>

      @if(Session::get('success'))
      <div class="alert alert-sucess">
        {{ Session::get('success')}}
      </div>
      @endif

      @if(Session::get('fail'))
      <div class="alert alert-danger">
        {{ Session::get('fail')}}
      </div>
      @endif

      <form action="{{route('update')}}" method="post">

        @csrf
        <input type="hidden" name="cid" value="{{ $Info->id }}">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ $Info->name }}">
          <span style="color:red">@error('name'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <label for="">Video Title</label>
          <input type="text" class="form-control" name="videotitle" placeholder="Video Title" value="{{ $Info->videotitle }}">
          <span style="color:red">@error('videotitle'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $Info->description }}">
          <span style="color:red">@error('description'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Updaten</button>
        </div>
      </form>





  </body>
</html>
