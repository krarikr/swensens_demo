<?php 
    session_start();
    ob_start();
    include ('connect_db.php');
    
    if (isset($_POST['btn_login'])) {
        $username = $_POST['txt_email']; // textbox name 
        $password = $_POST['txt_password']; // password
  
        if (empty($username)) {
            $_SESSION['error'] = "กรุณาใส่ อีเมล";
            header("location:index.php");
        } else if (empty($password)) {
            $_SESSION['error'] = "กรุณาใส่ รหัสผ่าน";
            header("location:index.php");
        } else if ($username AND $password) {
            try {
                $select_stmt = $db->prepare("SELECT * FROM user WHERE sws_email = :uemail AND sws_pass = :upassword ");
                $select_stmt->bindParam(":uemail", $username);
                $select_stmt->bindParam(":upassword", $password);
                $select_stmt->execute(); 

                while($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                    $dbemail = $row['sws_email'];
                    $dbpassword = $row['sws_pass'];
                    $dbfn= $row['sws_fname'];
                    $dbln = $row['sws_lname'];
                }

                if ($username != null AND $password != null) {
                    if ($select_stmt->rowCount() > 0) {
                        if ($username == $dbemail AND $password == $dbpassword) {

                                    $_SESSION['user_fname'] = $dbfn;
                                    $_SESSION['user_lname'] = $dbln;
                                   
                                    header("location: home.php");
                               

                        } else {
                            $_SESSION['error'] = "กรุณาตรวจสอบ อีเมล และ รหัสผ่าน ของท่าน!";
                            header("location:index.php");
                        }

                    } else {
                        $_SESSION['error'] = "กรุณาตรวจสอบ อีเมล และ รหัสผ่าน ของท่าน!";
                        header("location:index.php");
                    }
                }
           

            } catch(PDOException $e) {
                $e->getMessage();
                
            }
        }
    }

?>