@extends('layouts.app')

@section('page-title', $technology->name)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul class="mb-0">
                        <li>
                            ID: {{ $technology->id }}
                        </li>
                        <li>
                            Nome: {{ $technology->name }}
                        </li>
                        <li>
                            Creato il: {{ $technology->created_at->format('d/m/Y') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
