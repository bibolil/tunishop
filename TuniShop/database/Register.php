<?php

// php cart class
class Register
{
    public $db = null;

    /*connexion*/

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

//query :INSERT INTO table_name (user_id,first_name,last_name,password,register_date)VALUES ($user_id,$first_name,$last_name,$password,$register_date);
    public function registernewuser($user_id=null,$first_name=null,$last_name=null,$password=null,$register_date=null,$table = "user")
    {
        if ($this->db->con != null){
            date_default_timezone_set('Europe/Paris');
            $register_date = date('d-m-y h:i:s');

            $query="INSERT INTO user(user_id,first_name,last_name,password,register_date)VALUES('$user_id','$first_name','$last_name','$password','$register_date')";
            $result = $this->db->con->query($query);
            if ($result!=null){
                header("Location: login.php");
           }
       
       
       
        }






    }



}
