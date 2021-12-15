<h1>Comentarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc_2/comments/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir comentario</a>
        <tr>
            <th>ID</th>
            <th>body</th>
            <!-- <th>Correo</th> -->
            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($comments as $comment)
        {
            echo '<tr>';
            echo "<td>" . $comment['id'] . "</td>";
            echo "<td>" . $comment['body'] . "</td>";
            // echo "<td>" . $user['email'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc_2/comments/detail/" . $comment["id"] . "' > <span class='glyphicon glyphicon-edit'></span> Detalle</a> <a class='btn btn-info btn-xs' href='/mvc_2/comments/edit/" . $comment["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/mvc_2/comments/delete/" . $comment["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>