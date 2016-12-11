<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.12.2016
 * Time: 21:29
 */

require_once("Module/postmodule.php");
require_once ("config.php");


class PostIndex
{
    protected $postfunc;
    protected $content;

    public function __construct()
    {
        $this->postfunc =  new Postmodule();
    }

    public function onePost($id)
    {
        $this->content = $this->postfunc->getPost($id);
        include("View/onePostTemplete.php");
    }
}
    $post = new PostIndex();
    $post->onePost($_GET['id']);

