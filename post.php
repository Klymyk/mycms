<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.12.2016
 * Time: 21:29
 */

require_once("Module/postmodule.php");
require_once ("config.php");


/**
 * Class PostIndex
 */
class PostIndex
{
    protected $postfunc;
    protected $post;
    protected  $link;

    /**
     * PostIndex constructor.
     */
    public function __construct()
    {
        $this->postfunc = new Postmodule();
        $this->link     = new Connect();
    }

    /**
     * @param $id
     */
    public function onePost($id)
    {
        $this->post = $this->postfunc->getPost($this->link->db_connect(), $id);
        include("View/onePostTemplate.php");
    }
}
    $post = new PostIndex();
    $post->onePost($_GET['id']);

