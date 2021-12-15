<h1>comment details</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
      
        <tr>
            <th>ID</th>
            <th>user_id</th>
            <th>post_id</th>
            <th>body</th>
           
            <th>creado en</th>
            <th>actualizado en</th>
        </tr>
        </thead>
        <?php
       
            echo '<tr>';
            echo "<td>" . $comment['id'] . "</td>";
            echo "<td>" . $comment['user_id'] . "</td>";
            echo "<td>" . $comment['post_id'] . "</td>";
            echo "<td>" . $comment['body'] . "</td>";
          
            echo "<td>" . $comment['created_at'] . "</td>";
            echo "<td>" . $comment['updated_at'] . "</td>";
        
            echo "</tr>";
       
        ?>
    </table>
</div>