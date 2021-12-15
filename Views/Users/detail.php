<h1>user details</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
      
        <tr>
            <th>ID</th>
            <th>Nombre de usuario</th>
            <th>Correo</th>
            <th>contraseña encirptada</th>
            <th>remember token</th>
            <th>creado en</th>
            <th>actualizado en</th>
        </tr>
        </thead>
        <?php
       
            echo '<tr>';
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['name'] . "</td>";
            echo "<td>" . $user['email'] . "</td>";
            echo "<td>" . $user['password'] . "</td>";
            echo "<td>" . $user['remember_token'] . "</td>";
            echo "<td>" . $user['created_at'] . "</td>";
            echo "<td>" . $user['updated_at'] . "</td>";
        
            echo "</tr>";
       
        ?>
    </table>
</div>