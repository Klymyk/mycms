<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.12.2016
 * Time: 20:23
 */

 class Postmodule
{
    /**
     *
     */
    public function setPost ($tile,$content,$date)
    {

    }

    /**
     *
     */
    public function getPost($id)
    {
       return $allpost [] = ["id" => 1, "title" => "Title21", "date" => "26.08.1997", "content" => "Content1"];
    }

    /**
     *
     */
    public function getAllPost ()
    {
        $allpost [] = ["id" => 1, "title" => "Title1", "date" => "26.08.1997", "content" => "Content1"];
        $allpost []= ["id" => 2, "title" => "Title2", "date" => "26.08.1997", "content" => "Content2"];

        return $allpost;
    }

    public function EditPost ($id,$tile,$content,$date)
    {

    }

    public function DeletePost ($id)
    {

    }
}