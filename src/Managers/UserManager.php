



<?php


class UserManager{


    private UserRepository $user;


    public function __construct()
    {
        $this->user = new UserRepository();
    }

public function connectUsername(){

    ob_start();
    ?>
<!-- faudra mettre le html -->










    <?php
    return ob_get_clean();



}

}