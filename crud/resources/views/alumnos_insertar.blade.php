<!DOCTYPE html>
<html>
    <head>
        <title>CRUD Ejemplo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {               
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Helvetica';
            }

            .container {
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">          
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Agregar nuevo alumno</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('ListaAlumnos') }}"> Regresar </a>
                        </div>
                        <br>
                    </div>
                </div>
                <form accept-charset="UTF-8"  method="POST" action="{{ route('GuardaAlumno') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingresa los apellidos" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number"  id="edad" value='0' name="edad" class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa email" required="required">
                    </div>
                    <br>    
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingresa un telefono" required="required">
                    </div>
                    <br>          
                    <div class="form-group">
                        <label for="cve_grupo">Clave grupo</label>
                        <select class="form-control" id="cve_grupo" name="cve_grupo" required="required">
                            @foreach($Grupos as $grupo)
                            <option>{{ $grupo->cve_grupo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Agregar Alumno</button>
                    <br>
                    <br>
                </form>
            </div> 
        
        </div>
            
	<!-- Fin Producto-->
    </body>
</html>
