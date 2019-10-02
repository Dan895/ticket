<html>
    <form method = "POST" action = "{{route('ticket.store', $ticket->id)}}"> <!--, $ticket->id muestra el valor de la variable que le pase-->
            {{csrf_field()}}
        <p>Titulo: <input type="text" name="titulo"  value="${{ticket.titulo}}" size="40"> </p>
        <p>Categoria: <input type="text" name="categoria" value="${{ticket.categoria}}" size="40"> </p>
        <p>Descripcion: <input type="text" name="descripcion" value="${{ticket.descripcion}}" size="40"> </p>
        <input type="submit"/>
    </form>
</html>