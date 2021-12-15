<h1>post details</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
      
        <tr>
            <th>ID</th>
            <th>user_id</th>
            <th>title</th>
            <th>status</th>
            <th>creado en</th>
            <th>actualizado en</th>
        </tr>
        </thead>
        <?php
       
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['user_id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
            echo "<td>" . $post['status'] . "</td>";
            echo "<td>" . $post['created_at'] . "</td>";
            echo "<td>" . $post['updated_at'] . "</td>";
        
            echo "</tr>";
       
        ?>
    </table>
</div>