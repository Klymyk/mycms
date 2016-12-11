<?php
require_once("Module/postmodule.php");
require_once ("config.php");

/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.12.2016
 * Time: 20:19
 */
 $test = new Postmodule();
 $link = new Connect();
 $posts =  $test->getAllPost($link->db_connect());
 include("View/postsTemplete.php");
