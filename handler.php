<?php

require 'connect.php';


#USER CLASS
class User
{
    #This method will sign user up
    public function user_register($name, $email, $password)
    {
        global $connection;

        $enc_password = md5($password);
        
        #checking to see if the name and email alaredy exists
        $query = "SELECT * FROM users WHERE name = '$name' AND email='$email' ";
        $check = mysqli_query($connection, $query);
        $result = mysqli_num_rows($check);

        if($result == 0)
        {
            $query = "INSERT INTO users VALUES ('', '$name', email, $enc_password)";

        }else
        {
            echo "The username and email already exists.....";
        }


    }

    #This method  will log user in 
    public function user_login($name, $password)
    {
        global $connection;
        
        $enc_password = md5($password);
       
        $query = "SELECT * FROM users WHERE name = '$name' AND password = '$enc_password'";

        $result = mysqli_query($connection, $query);
        
        if(mysqli_num_rows($result) == 1)
        {
            
        }else{
            echo "invalid username and password";
        }


    }

    #This is method reset a user password
    public function password_reset($old_password, $new_password)
    {
        global $connection;

        $enc_password = md5($old_password);

        $query = "SELECT * FROM users WHERE password = '$old_password'";


        $result = mysqli_connect($connection, $query);
        
        if(mysqli_num_rows($result) == 1)
        {
            $query = "INSERT INTO users VALUES()";

        }else{
            
            echo "Wrong password.. Passwors dont match: ";
        }



    } 

        
    }

?>
