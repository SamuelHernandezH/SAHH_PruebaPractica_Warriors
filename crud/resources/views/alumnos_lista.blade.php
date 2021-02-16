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
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>CRUD Alumno</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('InsertaAlumno') }}"> Agregar nuevo alumno </a>
                        <a class="btn btn-success" href="{{ route('ListaGrupos') }}"> Cambiar a lista Grupos </a>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <br>
            <table class="table table-striped">
                <tr>
                    <th>Clave Única</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Grupo</th>
                    <th width="280px">Acciones</th>
                </tr>

                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->cve_alumno  }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->edad }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->cve_grupo }}</td>
                    <td>
                        <form action="{{ route('EliminaAlumno',$alumno->cve_alumno) }}" method="GET">

                            <a class="btn btn-primary" href="{{ route('EditarAlumno',$alumno->cve_alumno) }}">Editar</a>
                            @csrf

                            @method('DELETE')        

                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
