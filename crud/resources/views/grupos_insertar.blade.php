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
                            <h2>Agregar nuevo grupo</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('ListaGrupos') }}"> Regresar </a>
                        </div>
                        <br>
                    </div>
                </div>
                <form accept-charset="UTF-8"  method="POST" action="{{ route('GuardaGrupo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="semestre">Semestre</label>
                        <input type="number"  id="semestre" value='0' name="semestre" class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="grupo">Grupo</label>
                        <input type="number"  id="grupo" value='0' name="grupo" class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="turno">Turno</label>
                        <select class="form-control" id="turno" name="turno" required="required">
                            <option>Matutino</option>
                            <option>Vespertino</option>
                            <option>Nocturno</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Agregar Grupo</button>
                </form>
            </div> 
        
        </div>
            
	<!-- Fin Producto-->
    </body>
</html>
