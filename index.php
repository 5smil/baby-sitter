<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body> 
</body>
</html>
<?php include('header.php') ?>
            <div class="jumbotron text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                <span><a href="index.php" class="btn btn-success " style="float: left;"></a></span>
                           تسجيل الدخول 
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 jumbotron">
                            <form action="index.php" method="post">
                              <div class="form-group">
                                 الاسم:<input type="text" class="form-control" name="user" placeholder=" ادخل الاسم" required>
                              </div>
                            <div class="form-group">
                                 كلمه المرور:<input type="password" class="form-control" name="password" placeholder="ادخل كلمه المرور" required>
                            </div>
                            <label for="remember" id="remember">حفظ بياناتي:</label>
                            <input type="checkbox" name="rememberme" id="rememberme" value="1">
                            <div class="form_group">
                            <div class="g-recaptcha" data-sitekey="6LdxO3MpAAAAACM-Jyd5BHKHKdk4nKjOsT7cd30R"></div>
                             </div>
                              <div class="form-group">
                                  <input type="submit" name="login" value="دخول" class="btn btn-success btn-block text-center" >                                
                                <a href="indexss.php"> انشاء حساب </a>
                              </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
    include ('dbcon.php');

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
        if($checklogin->num_rows == 1)
        {
          $row = $checklogin->fetch_assoc();
          $userid = $row['userid'];
          $_SESSION['userid'] = $userid;
          $_SESSION['username'] = $username;
          $_SESSION['LoggedIn'] = 1;
          //remmber me
          @$remmember_me=$_POST['remberme'];
          if($remember_me==1) {
          $cook_name="acpauth";
          $time=time()+3600*24*30; //30 days
          setcookie($cook_name,'usr='.$username.'&hash='.$password,
         $time);
          }
        }
        $run  = mysqli_query($conn, $qry);
       $row = mysqli_num_rows($run);
        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:home.php');
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('index.php','_self');
    </script>
    <?php        
 }
}
?>
<?php include('footer.php') ?>

