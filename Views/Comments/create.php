<h1>Create comment</h1>
<form method='post' action='#'>

    <!-- TODO arreglar los select -->
    <p>selecciona un usuario</p>
    <select name="user_id">
        <?php
        // montar los   <option value="first">First Value</option> con los user_id
        foreach($users as $user){
            echo "<option value=".$user['id'].">".$user['id']." - ".$user['name']."</option>";
        }
        ?>
    </select>

  

    <p>selecciona un post</p>
 
    <select name="post_id">
        <?php
        // montar los   <option value="first">First Value</option> con los post_id
        foreach($posts as $post){
            echo "<option value=".$post['id'].">".$post['id']." - ".$post['title']."</option>";
        }
        ?>
    </select>

    <div class="form-group">
        <label for="body">Comentario</label>
        <input type="text" class="form-control" id="title" placeholder="Introduce un comentario" name="body">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>