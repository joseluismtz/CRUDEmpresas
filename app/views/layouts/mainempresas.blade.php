<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @section("css") @show
    <script src="{{asset("js/jquery.js")}}"></script>
</head>
<body>
    <div class="full-container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url("empresas")}}">Empresas</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('empresas/agregar')}}">Agregar</a></li>
                        <li><a href="{{url('empresas/activas')}}">Activas</a></li>
                        <li><a href="{{url("empresas/inactivas")}}">Inactivas</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" action="{{url('empresas/buscar')}}">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Buscar Razon Social" name="raz_soc">
                        </div>
                        <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    @yield("content")
    @section("js") @show
</body>
</html>