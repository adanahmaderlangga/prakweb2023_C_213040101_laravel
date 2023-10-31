@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $Name  }}</h3>
    <p>{{ $Email  }}</p>
    <img src="img/{{ $Image  }}" alt="{{ $Name  }}"width="200">
@endsection
