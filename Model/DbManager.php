<?php

class Connect
{
    protected function dbConnect()
    {
        try
        {
            $db = new PDO ('mysql:host=localhost;dbname=personal_blog;charset=utf8','root','root');
            return $db;
        }
        catch (Exception $e)
        {
            die( 'Erreur:'. $e->getMessage());
        }
    }

}