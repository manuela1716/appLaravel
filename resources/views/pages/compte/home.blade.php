@extends('welcome')

@section('content')
    @include('pages.component.navbar')
    <div class="container mt-5">
        <h1>
            Bonjour
             {{-- {{ Auth::user()->name}}  pour avoir les informations de celui qui est connecté --}}
        </h1>
    </div>
@endsection
