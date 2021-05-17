<?php

// php cart class
class Login
{
    public $db = null;

    /*connexion*/

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    /*verify login*/


  

    public function verification($username = null,$password=null, $table = "user")
    {
        
        if ($this->db->con != null){
            
            if ($username != null && $password!=null){
                
                $query="SELECT * FROM user WHERE first_name='$username'  AND password='$password'";
                $result = $this->db->con->query($query);                
               
                if ($result)
                header("Location: index.php");
                 

                
               
               
            }
        }
    }

    







}