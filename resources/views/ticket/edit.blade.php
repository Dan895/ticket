<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modificar Tickets</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class='container'>
        <div class='jumbotron'>
            <form method="POST" action="{{route('ticket.update', $tickets->id)}}">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" value="{{$tickets->titulo}}" name="titulo" aria-describedby="ttulo" placeholder="Ingrese el titulo">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" value="{{$tickets->categoria}}" name="categoria" placeholder="Categoria">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" value="{{$tickets->descripcion}}" name="descripcion" placeholder="Descripcion">
                </div>
                    <button type="submit" class="btn btn-primary">Editar</button>               
            </form>
        </div>         
    </div>
</body>
</html>