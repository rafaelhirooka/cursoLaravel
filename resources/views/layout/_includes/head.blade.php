<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>@yield('titulo')</title>
</head>

<body>

<header>
    <nav>
        <div class="nav-wrapper deep-orange">
            <a href="#!" class="brand-logo">Curso de Laravel</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                    <li><a href="{{route('login')}}">Login</a></li>
                @else
                    <li><a href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                    <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                    <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                @endif

            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
    </ul>
</header>

