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
                <div class="card-header">Admin Dashboard</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    U bent ingelogd as Admin
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
