<?php
    ob_start();
    include('connect_db.php');

    if (isset($_POST['btn_regis'])) {
        
        $mt1 = $_POST['txt_f_name'];
        $mt2 = $_POST['txt_l_name'];
        $mt3 = $_POST['txt_tel'];
        $mt4 = $_POST['txt_email'];
        $mt5 = $_POST['txt_password'];
        $mt6 = $_POST['txt_gen'];
        $mt7 = $_POST['txt_date'];
        

        if (empty($mt1)) {
            $errorMsg = "กรุณาใส่ชื่อของท่าน ให้เรียบร้อย!";
        }else if (empty($mt2)) {
            $errorMsg = "กรุณาใส่นามสกุลของท่าน ให้เรียบร้อย!";
        }else if (empty($mt3)) {
            $errorMsg = "กรุณาใส่เบอร์โทรศัพท์ของท่าน ให้เรียบร้อย!";
        }else if (empty($mt4)) {
            $errorMsg = "กรุณาใส่อีเมลของท่าน ให้เรียบร้อย!";
        } else if (empty($mt5)) {
            $errorMsg = "กรุณาใส่รหัสผ่านของท่าน ให้เรียบร้อย!";
        } else if (empty($mt6)) {
            $errorMsg = "กรุณาเลือกข้อมูลเพศของท่าน ให้เรียบร้อย!";
        } else if (empty($mt7)) {
            $errorMsg = "กรุณาใส่ข้อมูลวันเกิดของท่าน ให้เรียบร้อย!";
        } else {
            try {
                if (!isset($errorMsg)) {


                    $insert_stmt01 = $db->prepare(
                    
                    "INSERT INTO user (sws_fname, sws_lname, sws_email, sws_pass, sws_tel, sws_gender, sws_date) 
                    
                    VALUES (:m1, :m2, :m4, :m5, :m3, :m6, :m7)");
                    
                    $insert_stmt01->bindParam(':m1', $mt1);
                    $insert_stmt01->bindParam(':m2', $mt2);
                    $insert_stmt01->bindParam(':m4', $mt4);
                    $insert_stmt01->bindParam(':m5', $mt5);
                    $insert_stmt01->bindParam(':m3', $mt3);
                    $insert_stmt01->bindParam(':m6', $mt6);
                    $insert_stmt01->bindParam(':m7', $mt7);
                    

                    if ($insert_stmt01->execute()) {
                        $insertMsg = "สมัครสมาชิกเสร็จเรียบร้อย!";
                        
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js" integrity="sha512-t89+ZHqiI+cJO2EZ1zy846TMzc7K0VH22insNeb32hMoVymAMd0aYeLzmNF4WuRLDUXPVo6dzbZ1zI7MBWlqlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="stylesheet" href="css/style.css">
    <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
        
    </head>
    <body >
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg" id="mainNav">
        
        <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                <a class="navbar-brand" href="#">
                <img src="images/swensens-logo.png" width="111" height="33" alt="">
                </a>  
                </div>
                
                <ul class="navbar-nav header-right">

                <li class="nav-item">
                <a href="#" class="navbar" >
                        <span class="d-flex align-items-center">
                            <span class="navbar-icon mr-3">
                            <img src="images/icon-location.svg" alt="">
                            </span>
                            <span class="text-secondary">กรุณาเลือกที่อยู่จัดส่ง</span>
                            <span class="navbar-icon ml-3">
                            <img src="images/icon-drop2.png" width="20" height="25" alt="">
                            </span>
                        </span>
                    </a>
                </li>

                    <li class="nav-item">
                    <a href="register_page.php" class="btn btn-outline-danger rounded-pill px-4 mb-2 ml-3 mb-lg-0" >
                            <span class="d-flex align-items-center">
                                <span class="small">สมัครสมาชิก</span>
                            </span>
                        </a>
                    </li>
    
                    <li class="nav-item">
                    <a href="index.php" class="btn btn-danger rounded-pill px-4 mb-2 ml-3 mb-lg-0" >
                            <span class="d-flex align-items-center">
                                <span class="small">เข้าสู่ระบบ</span>
                            </span>
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ml-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TH
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="#">EN</a>
                        
                        </div>
                    </li>
                
                </ul>
                            
                
                    
                    
                    
                </div>
    
            </nav>

        <section class="ftco-section">
            
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                        
                    <div class="wrap">

                                <div class="img" style="background-image: url(images/card-head.png);">
                                    <br>
                                    <br>
                                    <h2 class="text-white mb-1 ml-5">
                                        สร้างบัญชี
                                    </h2>
                                
                                    <p class="text-white mb-1 ml-5">
                                        สมัครสมาชิกและเริ่มใช้งาน
                                    </p>

                                </div>

                    <div class="login-wrap p-4 p-md-5">
                               
                            <!-- ฟอร์มสำหรับส่งข้อมูลผู้ใช้งาน ให้ส่งไปที่ db_login.php -->

                    <form action="#" method="post" class="signin-form">


                        <div class="row">

                            <div class="col-md-6 ">

                            <div class="form-group mt-3">
                                
                                <label class="text" for="name">ชื่อ</label>
                                <input type="text" class="form-control" name="txt_f_name" placeholder="กรอกชื่อ" >
                                  
                                  
                            </div>

                            </div>

                            <div class="col-md-6 ">

                            <div class="form-group mt-3">

                                <label class="text" for="username">นามสกุล</label>
                                <input type="text" class="form-control" name="txt_l_name" placeholder="กรอกนามสกุล" >
                                  
                                  
                            </div>

                            </div>

                        </div>

                              
                        <div class="form-group mt-3">
                                <label class="text" for="Tel">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="txt_tel" placeholder="กรอกเบอร์โทรศัพท์" >
                          
                        </div>

                        <div class="form-group mt-3">
                                <label class="text" for="username">อีเมล</label>
                                <input type="text" class="form-control" name="txt_email" placeholder="กรอกอีเมล" >
                              </div>

                              <span class="text-danger"> กรุณาตรวจสอบอีเมลที่ระบุให้ถูกต้อง คุณจะไม่สามารถเปลี่ยนแปลงอีเมลหลังจากทำการลงทะเบียนแล้วได้ </span>

                        <div class="form-group mt-3">
                                <label class="text" for="password">รหัสผ่าน</label>
                                <input id="password-field" type="password" class="form-control" name="txt_password" placeholder="กรอกรหัสผ่าน" >
                                
                                </div>
                        
                        <div class="form-group mt-3">
                                <label class="text" for="password">เพศ(ไม่ระบุได้)</label>
                                <br>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-danger rounded-pill px-5 mb-2 mb-lg-0 ml-2 ">
                                        <input type="radio" name="txt_gen" id="option1" value="a" autocomplete="off" > ชาย
                                    </label>

                                    <label class="btn btn-outline-danger rounded-pill px-5 mb-2 mb-lg-0 ml-2 ">
                                        <input type="radio" name="txt_gen" id="option2" value="b" autocomplete="off"> หญิง
                                    </label>

                                    <label class="btn btn-outline-danger rounded-pill px-5 mb-2 mb-lg-0 ml-2 ">
                                        <input type="radio" name="txt_gen" id="option3" value="c" autocomplete="off"> ไม่ระบุ
                                    </label>
                                    </div>
                                </div>

                        <div class="form-group mt-3">
                                <label class="text" for="username">วันเกิดรอคุณอยู่</label>
                                <br>
                                <input type="date" class="form-control" id="start" name="txt_date" placeholder="dd/mm/yy" >
                            
                                </div>
                        
                                <div class="form-check mt-3">
                                <input class="form-check-input " type="checkbox" id="check1" checked>
                                <span>ฉันได้อ่านและยอมรับ
                                    <a href="#" class="text-danger" >ข้อกำหนดการใช้งาน </a>
                                    และ
                                    <a href="#" class="text-danger" >นโยบายความเป็นส่วนตัว</a>
                                    ของสเวนเซ่นส์ 
                                </span>
                                </div>

                                <div class="form-check mt-3">
                                <input class="form-check-input " type="checkbox" id="check2"  checked>
                                <span>ฉันยินยอมรับข้อมูลข่าวสาร กิจกรรมส่งเสริมการขายต่างๆ จากสเวนเซ่นส์และ
                                    <a href="#" class="text-danger" >บริษัทในเครือ</a>
                                    โดยเราจะเก็บข้อมูลของท่านไว้เป็นความลับ สามารถศึกษาเงื่อนไขหรือข้อตกลง
                                    <a href="#" class="text-danger" >นโยบายความเป็นส่วนตัว</a>
                                    เพิ่มเติมได้ที่เว็บไซต์ของบริษัทฯ 
                                </span>
                                </div>
                                


                        <div class="form-group mt-5">
                            <button type="submit" name="btn_regis" class="btn btn-danger btn-block rounded-pill px-3 mb-2 mb-lg-0">สมัครสมาชิก</button>
                        </div>
                        
                        <?php 
         if (isset($errorMsg)) {
    ?> 
        
        <script>
            swal("แจ้งเตือน!", "<?php echo $errorMsg; ?>", "warning")
        </script>
    
        
    <?php } ?>
    

    <?php 
         if (isset($insertMsg)) {
    ?>
        <script>
            swal("แจ้งเตือน!", "<?php echo $errorMsg; ?>", "success")
        </script>
    <?php } ?>
                        
                    </form>

                    </div>
                    </div>

                </div>
            </div>
        </div>
        </section>
    
        
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       

    </body>
</html>