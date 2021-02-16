<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

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
                        <h2>CRUD Grupo</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('InsertaGrupo') }}"> Agregar nuevo grupo </a>
                        <a class="btn btn-success" href="{{ route('ListaAlumnos') }}"> Cambiar a lista Alumnos </a>
                    </div>
                    <br>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-striped">
                <tr>
                    <th>Clave Grupo</th>
                    <th>Nombre</th>
                    <th>Semestre</th>
                    <th>Grupo</th>
                    <th>Turno</th>
                    <th width="280px">Acciones</th>
                </tr>

                @foreach ($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->cve_grupo  }}</td>
                    <td>{{ $grupo->nombre }}</td>
                    <td>{{ $grupo->semestre }}</td>
                    <td>{{ $grupo->grupo }}</td>
                    <td>{{ $grupo->turno }}</td>
                    <td>
                        <form action="{{ route('EliminaGrupo',$grupo->cve_grupo) }}" method="GET">

                            <a class="btn btn-primary" href="{{ route('EditaGrupo',$grupo->cve_grupo) }}">Editar</a>
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
