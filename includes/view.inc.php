<?php

class ViewUser extends User
{

    public function showAllUsers()
    {
        $datas = $this->getAllUsers();

        foreach ($datas as $data) {
            echo "Username is : " . $data['username'] . "<br>";
            echo "Password is :" . $data['pass'] . "<br>";
        }
    }
}
