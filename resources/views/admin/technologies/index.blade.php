@extends('layouts.app')

@section('page-title', 'Tecnologie')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Tecnologie
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($technologies as $technology)
                                <tr>
                                    <th scope="row">{{ $technology->id }}</th>
                                    <td>{{ $technology->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}" class="btn btn-sm btn-primary">
                                            Vedi
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
