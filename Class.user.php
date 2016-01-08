<?php
class USER
{
    private $db;
 
    function __construct($DB_con)
    {
      $this->db = $DB_con;
    }
 
    public function register($username,$password,$nama,$alamat,$email,$jenis_kel,$tgl_lhr,$bln_lhr,$thn_lhr,$jenis_usaha)
    {
       try
       {
          /* $new_password = password_hash($password, PASSWORD_DEFAULT);
   */
           $stmt = $this->db->prepare("INSERT INTO member(username,password,nama,alamat,email,jenis_kel,tgl_lhr,bln_lhr,thn_lhr,jenis_usaha) 
                                            VALUES(:username,:password,:nama,:alamat,:email,:jenis_kel,:tgl_lhr,:bln_lhr,:thn_lhr,:jenis_usaha)");

            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $password); 
            $stmt->bindparam(":nama", $nama); 
            $stmt->bindparam(":alamat", $alamat); 
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":jenis_kel", $jenis_kel); 
            $stmt->bindparam(":tgl_lhr", $tgl_lhr);
            $stmt->bindparam(":bln_lhr", $bln_lhr);
            $stmt->bindparam(":thn_lhr", $thn_lhr);
            $stmt->bindparam(":jenis_usaha", $jenis_usaha);            
            $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function loginn($username,$password)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM member WHERE username=:username LIMIT 1");
          $stmt->execute(array(':username'=>$username));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          /*if($stmt->rowCount() >= 1)
          {
             if(password_verify($password, $userRow['password']))
             {
                $_SESSION['user_session'] = $userRow['id_member'];
                return true;
             }
             else
             {
                return false;
             }
          }*/
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