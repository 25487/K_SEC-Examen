@extends('layouts.app')

@section('header')
<h2>Welkom op mijn pagina!</h2>
@endsection

@section('content')
<title>Welkom</title>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    U bent ingelogd as {{ Auth::user()->name }}


                    <h6 style="padding-top: 5px;">Momenteel bevind u zich in het gebruikers dashboard:</h6>
                    <h6 style="padding-bottom: 15px;">Hier kunt u verslagen & rapportages doen & video's uploaden door op de desbetrefende button te klikken.</h6>
                  <a href="{{ url('/crud') }}" style="margin-top: 100px;"><button class="btn btn-primary">CRUD</button></a>
                  <a href="{{ url('/upload') }}" style="margin-top: 100px; padding-left: 15px;"><button class="btn btn-primary">Upload</button></a>


            </div>
        </div>
    </div>
</div>
@endsection
