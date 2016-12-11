<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.12.2016
 * Time: 20:22
 */

require_once("../Module/postmodule.php");
require_once ("../config.php");
class Admin{

    protected $postfunc;
    protected $post;
    protected $link;

    /**
     * admin constructor.
     */
    public function __construct()
    {
        $this->postfunc = new Postmodule();
        $this->link     = new Connect();
    }

    /**
     *
     */
    public function getAllpost ()
    {
        $this->post = $this->postfunc->getAllPost($this->link->db_connect());
        include("../View/admin_templeta.php");
    }
    
    public function runpost ($globalen)
    {
        if ($globalen == 'add') {
            if(!empty($_POST)){
                $this->postfunc->setPost($this->link->db_connect(), $_POST['title'], $_POST['date'], $_POST['content']);
                header("Location: index.php");
            }
            include("../View/add_post.php" );
        } else if($globalen == 'edit'){

            if(!isset($_GET['id']))
                header('Location: index.php');
            $id = (int)$_GET['id'];

            if(!empty($_POST) && $id > 0) {
                $this->postfunc->editPost($this->link->db_connect(), $id, $_POST['title'], $_POST['date'], $_POST['content']);
                header("Location: index.php");
            }

            $this->post = $this->postfunc->getPost($this->link->db_connect(), $id);

            include("../View/edit_post.php");
        }else if($globalen == 'delete'){

            $id = (int)$_GET['id'];

            $this->post = $this->postfunc->deletePost($this->link->db_connect(), $id);
            header("Location: index.php");
        }
        else {
            include ('../View/postsTemplete.php ');
        }
    }

}

 $runadmin = new Admin();

 if (isset($_GET['action'])) {
    $runadmin->runpost($_GET['action']);
 }else {
     $runadmin->getAllpost();
 }







