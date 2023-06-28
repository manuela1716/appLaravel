@extends('welcome')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <h1 class="text-center">Connectez-Vous</h1>
                <form action="{{route('/')}}" method="post">
                    @if (session()->has("error"))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('error')}}
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="mb-3 text-center">
                        Pas de compte? <a href="{{route('/register')}}">Inscrivez-Vous</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
