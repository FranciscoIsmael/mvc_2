<?php

class commentsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Comment.php');

        $comments = new Comment();

        $d['comments'] = $comments->showAllComments();
        $this->set($d);
        $this->render("index");
    }

    function detail($id)
    {
        require(ROOT . 'Models/Comment.php');

        $comment = new Comment();

        $d['comment'] = $comment->showComment($id);
        $this->set($d);
        $this->render("detail");
    }

    // TODO arreglar el create
    function create()
    {
        require(ROOT . 'Models/User.php');
        $users = new User();
        $d['users'] = $users->showAllUsers();
        $this->set($d);

        require(ROOT . 'Models/Post.php');
        $posts = new Post();
        $d['posts'] = $posts->showAllposts();
        $this->set($d);

        if (isset($_POST["user_id"], $_POST["post_id"], $_POST["body"]))
        {
            require(ROOT . 'Models/Comment.php');

            $comment= new Comment();

            if ($comment->create($_POST["user_id"], $_POST["post_id"], $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
       
        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComment($id);

        if (isset($_POST["body"]))
        {
            if ($comment->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comments/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Comment.php');

        $comment= new Comment();
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "comments/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>