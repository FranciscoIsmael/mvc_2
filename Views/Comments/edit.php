<h1>Edita un comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="body">Comentario</label>
        <input type="text" class="form-control" id="name" placeholder="Introduce el comentario" name="body" value ="<?php if (isset($comment["body"])) echo $comment["body"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>