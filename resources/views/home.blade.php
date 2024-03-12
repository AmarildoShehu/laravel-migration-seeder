<!-- File: resources/views/home.blade.php -->

@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <div class="container mt-4">
        <h2>Treni in partenza oggi</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($trains as $train)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->codice_treno }}</h5>
                            <p class="card-text">
                                Partenza da {{ $train->stazione_partenza }}
                                alle {{ $train->orario_partenza }}
                            </p>
                            <p class="card-text">
                                Arrivo a {{ $train->stazione_arrivo }}
                                alle {{ $train->orario_arrivo }}
                            </p>
                            <!-- Altre informazioni del treno -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
