@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="bedrijfsnaam">{{ __('Bedrijfsnaam') }}</label>
                            <input id="bedrijfsnaam" type="text" class="form-control" name="bedrijfsnaam" value="{{ old('bedrijfsnaam', auth()->user()->bedrijfsnaam ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="straat_huisnummer">{{ __('Straat en Huisnummer') }}</label>
                            <input id="straat_huisnummer" type="text" class="form-control" name="straat_huisnummer" value="{{ old('straat_huisnummer', auth()->user()->straat_huisnummer ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="postcode">{{ __('Postcode') }}</label>
                            <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode', auth()->user()->postcode ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="plaats">{{ __('Plaats') }}</label>
                            <input id="plaats" type="text" class="form-control" name="plaats" value="{{ old('plaats', auth()->user()->plaats ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="kvknummer">{{ __('KVKnummer') }}</label>
                            <input id="kvknummer" type="text" class="form-control" name="kvknummer" value="{{ old('kvknummer', auth()->user()->kvknummer ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="telefoonnummer">{{ __('Telefoonnummer') }}</label>
                            <input id="telefoonnummer" type="text" class="form-control" name="telefoonnummer" value="{{ old('telefoonnummer', auth()->user()->telefoonnummer ?? '') }}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Profile') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
