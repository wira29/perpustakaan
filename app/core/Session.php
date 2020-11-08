<?php

class Session {

    public static function startSession($id)
    {
        $_SESSION['id_admin'] = $id;
    }

    public static function destroySession()
    {
        session_destroy();
    }
}