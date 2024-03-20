@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('GetItBack Dashboard') }}</div>

                <div class="card-body">
                    <h4>Routes van Vandaag:</h4>
                    <ul>
                        @foreach ($rides as $ride)
                            <li>{{ $ride->Naam }} - Status: {{ $ride->status }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
