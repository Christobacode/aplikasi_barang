<?php

    session_start();

    function errorMessage()
    {
        if(isset($_SESSION["ERROR"])){
            $output = ($_SESSION["ERROR"]);
            $_SESSION["ERROR"] = null;
            return $output;
        }
    }

    function successMessage()
    {
        if(isset($_SESSION["SUCCESS"])){
            $output = ($_SESSION["SUCCESS"]);
            $_SESSION["SUCCESS"] = null;
            return $output;
        }
    }