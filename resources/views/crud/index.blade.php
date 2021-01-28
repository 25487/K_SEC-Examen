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
      <h4>Laravel CRUD</h4>
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

      <form action="add" method="post">

        @csrf
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}">
          <span style="color:red">@error('name'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <label for="">Video Title</label>
          <input type="text" class="form-control" name="videotitle" placeholder="Video Title" value="{{ old('videotitle') }}">
          <span style="color:red">@error('videotitle'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <label for="">Description</label>
          <input type="text" class="form-control" name="description" placeholder="Description" value="{{ old('description') }}">
          <span style="color:red">@error('description'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <label for="" >Bestand</label>
          <input type="file" class="form-control" name="file" value="{{ old('file') }}" style="padding-bottom: 5px;">
          <span style="color:red">@error('file'){{ $message }} @enderror</span>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Opslaan</button>
        </div>
        
      </form>
      <br>

      <table class="table table-hover">
        <thead>
          <th>Name</th>
          <th>Video Title</th>
          <th>Description</th>
          <th>File</th>
          <th>Actions</th>
        </thead>
        <tbody>
          @foreach ($list as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->videotitle }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->file }}</td>

          <td>
          <div class="btn-group">
            <a href="delete/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
            <a href="edit/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>


  </body>
</html>
