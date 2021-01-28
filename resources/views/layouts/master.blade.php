<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Uw Profiel</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    The VideoBox
                </div>

                <div class="links">
          <h4>The official videobox by Taurese Usman & Sohil Alami</h4>
                    <a href="https://github.com/25487/K_SEC-Examen">GitHub</a>
                </div>
            </div>
            <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

          </head>
          <body>

        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
              <h4>Verslag Doen | Gebruiker</h4>
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
                  <button type="submit" class="btn btn-primary btn-block">Opslaan</button>
                </div>
              </form>
              <br>

              <table class="table table-hover">
                <thead>
                  <th>Name</th>
                  <th>Video Title</th>
                  <th>Description</th>

                </thead>
                <tbody>
                  @foreach ($list as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->videotitle }}</td>
                  <td>{{ $item->description }}</td>
                  <td>

                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>

        </div>
        <div class="copyrights">
        <h5>©2021 All rights reserved by | Taurese Usman & Sohil Alami </h5>
      </div>
    </body>
</html>
