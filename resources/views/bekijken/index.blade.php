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
      <h4>Verslagen bekijken | Gebruiker</h4>
      <a href="/home"><p>Klik hier om terug te gaan naar het dashboard!</p></a>
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


      <br>

      <table class="table table-hover">
        <thead>
          <th>Name</th>
          <th>Video Title</th>
          <th>Description</th>
          <th>File</th>

        </thead>
        <tbody>
          @foreach ($list as $item)
        <tr>
          <td>{{ $item->name }}</td>
          <td>{{ $item->videotitle }}</td>
          <td>{{ $item->description }}</td>
          <td>{{ $item->file }}</td>

        </tr>
        @endforeach
        </tbody>
      </table>


  </body>
</html>
