<?php
class Post extends Model
{
    

    public function showPost($id)
    {
        $sql = "SELECT * FROM posts WHERE id =" . $id;
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetch();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    public function showAllPosts()
    {
        $sql = "SELECT * FROM posts";
        try{
            $req = Database::getBdd()->prepare($sql);
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }

    // TODO arreglar esto
    // tiene que eliminar todos los comentarios de este usuario, luego todos los post de este usuario y luego el usuario
    public function delete($id)
    {

        
        $sql = "DELETE FROM posts WHERE id = :id";
        try{   
            $req = Database::getBdd()->prepare($sql);
            return $req->execute([
                'id' => $id
            ]);
        }
        catch(PDOException $e){
            print_r($e->getMessage());
        }
    }
}
?>