@extends('welcome')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <h1 class="text-center">Inscrivez-Vous</h1>
                @if (session()->has("success"))
                    <div class="alert alert-success" role="alert">
                        {{session()->get('success')}}
                    </div>
                @endif
                <form action="{{route('/register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Entrer Votre Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Entrer Votre Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Entrer Votre Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="mb-3 text-center">
                        Déjà un compte? <a href="{{route('/')}}">Connectez-Vous</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection