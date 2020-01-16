<?php

class IndexController extends Controller
{
    public function insert()
    {
        if (isset($_POST['insert'])) {
            if (!empty($_POST['name']) && !empty($_POST['lastname'])) {
                self::save();
            } else {
                require_once("./Views/index.php");
            }
        }
    }
}
