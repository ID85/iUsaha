<?php
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($username,$password,$nama,$alamat,$jenis_kel,$tahun_lahir,$jenis_usaha)
    {
       try
       {
           $new_password = password_hash($password, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO member(username,password,nama,alamat,jenis_kel,tahun_lahir,jenis_usaha) 
                                            VALUES(:username,:password,:nama,:alamat,:jenis_kel,:tahun_lahir,:jenis_usaha)");

            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $new_password); 
            $stmt->bindparam(":nama", $nama); 
            $stmt->bindparam(":alamat", $alamat); 
            $stmt->bindparam(":jenis_kel", $jenis_kel); 
            $stmt->bindparam(":tahun_lahir", $tahun_lahir);
            $stmt->bindparam(":jenis_usaha", $jenis_usaha);            
            $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($username,$password)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM member WHERE username=:username LIMIT 1");
          $stmt->execute(array(':username'=>$username));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['password']))
             {
                $_SESSION['user_session'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

 
    public function k_usaha($jenis_usaha)
    {
       try
       {
   
           $stmt = $this->db->prepare("INSERT INTO k_admin_ku(jenis_usaha) 
                                            VALUES(:jenis_usaha)");

            $stmt->bindparam(":jenis_usaha", $jenis_usaha);            
            $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>