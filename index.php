<?php
    session_start();
    include ('connect_db.php');
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
                                    ยินดีต้อนรับ
                                </h2>
                                
                                <p class="text-white mb-1 ml-5">
                                    เข้าสู่ระบบเพื่อใช้งาน
                                </p>

                            </div>
                            <div class="login-wrap p-4 p-md-5">
                          
                                
                            <!-- ฟอร์มสำหรับส่งข้อมูลผู้ใช้งาน ให้ส่งไปที่ db_login.php -->

                            <form action="db_login2.php" method="post" class="signin-form">

                              <div class="form-group mt-3">
                                <label class="text" for="username">อีเมล</label>
                                  <input type="email" class="form-control" name="txt_email" placeholder="กรอกอีเมล" >
                                  
                              </div>

                              
                                <div class="form-group">
                                <label class="text" for="password">รหัสผ่าน</label>
                                <input id="password-field" type="password" class="form-control" name="txt_password" placeholder="กรอกรหัสผ่าน" >
                          
                            </div>

                            <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a class="text-danger" href="#" >ลืมรหัสผ่าน</a>
                                        </div>
                            </div>

                        <div class="form-group">
                            <button type="submit" name="btn_login" class="btn btn-danger btn-block rounded-pill px-3 mb-2 mb-lg-0" >เข้าสู่ระบบ</button>
                        </div>
                       
                        
                      </form>

                      <?php if(isset($_SESSION['success'])) : ?>
            
                            <script>
                            swal("สำเร็จ!", 
                            "<?php echo $_SESSION['success']; 
                             unset($_SESSION['success']);?>"
                             , "success")
                            </script>
        <?php endif ?>

        <?php if(isset($_SESSION['error'])) : ?>
            <script>
                            swal("แจ้งเตือน!", 
                            "<?php echo $_SESSION['error'];
                            unset($_SESSION['error']);?>"
                            , "warning")
                            </script>
        <?php endif ?>

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
