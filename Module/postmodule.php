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
    public function setPost ($link,$title,$date, $content)
    {
        $title = trim($title);
        $content = trim($content);

        if ($title == '')
            return false;

        $template = "INSERT INTO post (title, date, content) VALUES ('%s', '%s', '%s')";

        $query = sprintf($template,mysqli_real_escape_string($link, $title),
            mysqli_real_escape_string($link, $date),
            mysqli_real_escape_string($link, $content));
        
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        return true;
    }

     /**
      * @param $link
      * @param $post_id
      * @return array|null
      */
    public function getPost($link,$id)
    {
        $query = sprintf("SELECT * FROM post where id = %d",(integer)$id);
        $result = mysqli_query($link,$query);

        If (!$result) {
            die(mysqli_error($link));
        }

        return mysqli_fetch_assoc($result);
    }

     /**
      * @param $link
      * @return array
      */
    public function getAllPost ($link)
    {
        $query = "SELECT * FROM post ORDER BY id DESC ";
        $result = mysqli_query($link,$query);

        If (!$result) {
            die(mysqli_error($link));
        }
        $coun = mysqli_num_rows($result);
        $postarray = [];

        for ($i=0; $i < $coun; $i++)
        {
            $postarray [] = mysqli_fetch_assoc($result);
        }
        
        return $postarray;
    }

     function editPost($link, $id, $title, $date, $content)
     {
         $title = trim($title);
         $content = trim($content);
         $date = trim($date);
         $id = (int)$id;
         if ($title == '')
             return false;

         $template_update = "UPDATE post SET title='%s', content='%s', date='%s' WHERE id='%d'";

         $query = sprintf($template_update,
             mysqli_real_escape_string($link, $title),
             mysqli_real_escape_string($link, $content),
             mysqli_real_escape_string($link, $date),
             $id);

         $result = mysqli_query($link, $query);

         if (!result)
             die(mysqli_error($link));

         return mysqli_affected_rows($link);
     }

    public function deletePost ($link,$id)
    {
        $id = (int)$id;
        if ($id == 0)
            return false;
        $query = sprintf("Delete  FROM post where id = %d",(integer)$id);
        $result = mysqli_query($link,$query);

        if (!result)
            die(mysqli_error($link));

        return mysqli_affected_rows($link);


    }
}