<?php
    require_once "recaptchalib.php";
    require_once('dbConnect.php');
    // your secret key
$secret = "6LdNPAsTAAAAAGupVutyBtGd_tiFzkjSaovi2K34";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);
    if(isset($_POST['name'])){
        $name=$_POST['name'];
      }if(isset($_POST['colName'])){
        $col=$_POST['colName'];
      }if(isset($_POST['deptname'])){
        $dept=$_POST['deptname'];
      }if(isset($_POST['phone'])){
        $phone=$_POST['phone'];
      }if(isset($_POST['year'])){
        $year=$_POST['year'];
      }if(isset($_POST['email'])){
        $email=$_POST['email'];
      }if(isset($_POST['pass'])){
        $pass=$_POST['pass'];
      }if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
        $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
      }

        if ($response != null && $response->success) {

        }else{
          echo 'failed1';
          die();
        }
      if(isset($name,$email,$col,$phone,$pass,$dept)){
        $pass=sha1($pass);
        $pass=md5($pass);
        $pass=sha1($pass);
        if($year=="I")
            $year=1;
        if($year=="II")
            $year=2;
        if($year=="III")
            $year=3;
        if($year=="IV")
            $year=4;
        $sql = dbConnect();
        $times='interrupt15'.time();
        $query = "SELECT * FROM interrupt.users WHERE email_id = '$email'";
        $data = mysqli_query($sql,$query);

        if (mysqli_num_rows($data)== 1) {
          echo 'failed';
          exit();
        }

			  if(mysqli_query($sql, "INSERT INTO interrupt.users VALUES ('','$name','$col', '$email', '$phone','$dept','$year','','$pass','$times')"))
        {   $query = "SELECT * FROM interrupt.users WHERE email_id = '$email'";
            $data = mysqli_query($sql,$query);
            exec("python /var/www/mail2python.py $email");
            if (mysqli_num_rows($data)== 1) {
              $row = mysqli_fetch_array($data);
              $id=$row['id'];
            }
            mysqli_query($sql, "INSERT INTO interrupt.events VALUES ('$id',0,0,0,0,0,0,0,0,0)");  
              echo 'passed';

        }
        else{

          echo 'failed';
        }
      }
		?>
