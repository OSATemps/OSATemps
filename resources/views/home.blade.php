@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Benvingut</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Benvingut {{$user->name}}
                </div>
            </div>

            <div class="card">
                <div class="card-header">Entrar / Sortir</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($latestEntries->isNotEmpty() && $latestEntries->first()->leaveDate == NULL)
                        <p>Últim registre d'entrada: {{$latestEntries->first()->enterDate}}</p>
                        <form method="POST" action="{{route('clockentries.update',$latestEntries->first()->id)}}">
                            @method('PUT')
                            @csrf
                            <button class="btn btn-success" disabled>Entrar</button>
                            <button type="submit" class="btn btn-danger">Sortir</button>
                        </form>
                    @else
                        <form method="POST" action="{{route('clockentries.store')}}">
                            @csrf
                            <button type="submit" class="btn btn-success">Entrar</button>
                            <button class="btn btn-danger" disabled>Sortir</button>
                        </form>
                    @endif
                </div>
            </div>


            <div class="card">
                <div class="card-header">Històric</div>

                <div class="card-body">
                    <p>A continuació es mostren els últims 10 registres.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Entrada</th>
                                <th>Sortida</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($latestEntries as $entry)
                                <tr>
                                    <td>{{$entry->enterDate}}</td>
                                    <td>{{$entry->leaveDate}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
