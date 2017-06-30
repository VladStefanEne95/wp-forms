<!DOCTYPE html>
<head>
<style type="text/css">
</style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}">Sigla</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="{{URL::to('/')}}">Proiecte</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adauga <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{URL::to('/')}}/adauga-proiect">Proiect</a></li>
                        <li><a href="{{URL::to('/')}}/adauga-formular">Formular</a></li>
                        <li><a href="{{URL::to('/')}}/adauga-media">Media</a></li>
                        <li><a href="#">Înregistrări</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('/')}}/price/filter">Cauta</a></li>
            </ul>
            @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li><a href="{{URL::to('/')}}/login" ><span class="glyphicon glyphicon-user"></span> {{{Auth::user()->email}}}</a></li>
                @else
                <li><a href="{{URL::to('/')}}/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{URL::to('/')}}/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @endif
            </ul>
            @endif
        </div>
    </div>
</nav>


            
              

</body>
</html>