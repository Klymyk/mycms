<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.12.2016
 * Time: 20:29
 */

class Connect
{
    const MYSQL_SERVER = '127.0.0.1:3306';
    const MYSQL_USER = 'root';
    const MYSQL_PASSWORD = '';
    const MYSQL_DB = 'blog';

    public function db_connect()
    {
        $link = mysqli_connect(self::MYSQL_SERVER, self::MYSQL_USER, self::MYSQL_PASSWORD, self::MYSQL_DB)
        or die("Error: " . mysqli_error($link));
        if (!mysqli_set_charset($link, "utf8")) {
            printf("Error: " . mysqli_error($link));
        }
        return $link;
    }
}
