<?php

class postsController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Post.php');

        $posts = new Post();

        $d['posts'] = $posts->showAllPosts();
        $this->set($d);
        $this->render("index");
    }

    function detail($id)
    {
        require(ROOT . 'Models/Post.php');

        $post = new Post();

        $d['post'] = $post->showPost($id);
        $this->set($d);
        $this->render("detail");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Post.php');

        $post = new Post();
        if ($post->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
        }
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>