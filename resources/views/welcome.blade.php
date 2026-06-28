<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Auth</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="text-center">

        <h1 class="mb-4">
            Bienvenue sur Mon Auth
        </h1>

        @auth

            <div class="alert alert-success">
                <h4>Bienvenue {{ Auth::user()->name }} !</h4>
            </div>

            <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                Accéder au tableau de bord
            </a>

            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                @csrf
                <button class="btn btn-danger">
                    Se déconnecter
                </button>
            </form>

        @endauth


        @guest

            <div class="alert alert-info">
                <h4>Bienvenue, invité !</h4>
            </div>

            <a href="{{ route('login') }}" class="btn btn-primary">
                Se connecter
            </a>

            <a href="{{ route('register') }}" class="btn btn-success">
                S'inscrire
            </a>

        @endguest

    </div>

</div>

</body>
</html>