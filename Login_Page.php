<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php  
    
   $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    
   $LoginUsername=isset($_POST['LoginUsername']) ? $_POST['LoginUsername'] : '';
   $LoginPassword=isset($_POST['LoginPassword']) ? $_POST['LoginPassword'] : '';
   

    
    if((isset($_POST["LoginUsername"]) && !empty($_POST["LoginUsername"]))&&(isset($_POST["LoginPassword"]) && !empty($_POST["LoginPassword"])))
    {
      $conn=oci_connect("anusingh","Biggerbang93","oracle.cise.ufl.edu/orcl");
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        
        
        $temp="select * from User_profile where username= '$LoginUsername' and password = '$LoginPassword'";
        $stid = oci_parse($conn, $temp);        
        //VALUES('$username','$mail','12312412','username')");
        if (!$stid) {
            $e = oci_error($conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        
        // Perform the logic of the query
         oci_execute($stid);
        if($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS))
	   {
           echo "login success!!";
            $deleteUserTable="delete from SessionTable";
            $stidelete=oci_parse($conn,$deleteUserTable ); 
            oci_execute($stidelete);
            
            $insertUser="insert into SessionTable values('".$LoginUsername."')";
            $stinsert=oci_parse($conn,$insertUser ); 
            oci_execute($stinsert);
            
            $data = ['var1' => 'hello', 'var2' => 'world'];
            $query_string = http_build_query($data);
            header('Location: ss.php' . (FALSE === empty($query_string) ? '?'.$query_string:''));
            
        }
		    
        else
        {
            #$_SESSION['msg']="Invalid login ID or Password";
            //header("location: Login_Page.php");
            echo "login failed!!!!";
        }
//        if (!$r) {
//            $e = oci_error($stid);
//            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
//        }
        
         oci_free_statement($stid);
        oci_close($conn);

    
    }

?>   
  <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
      <div class="modal-content">
          <div class="col-12 user-img">
            <img src="img/face.png">
          </div>
          <form class="col-12" method="post" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
              <div class="form-group">
                <input name="LoginUsername" type="name" class="form-control" placeholder="Enter Username">
              </div>
               <div class="form-group">
                <input name="LoginPassword" type="password" class="form-control" placeholder="Enter Password">
              </div>
              <i class="fas fa-sign-in-alt"></i>
              <input type="submit" class="btn" value="Login">
          </form>
          <div class="col-12 forgot">
              <a href="#"> Forgot Password?</a>
          </div>
          <div class="col-12 forgot1">
              <a href="Registraion_Page.php"> Create Account</a>
          </div>
        </div><!--- End of MOdal COntent -->
      </div>
    </div>
<!--
     <form method ="get" action="ss.php">
         <input type="hidden" name ="LoginUsername" value =$LoginUsername>
         <input type="submit">
    </form>
-->
    <script>
        function validation(){
        var name = document.getElementById("userNam").value;
        var email = document.getElementById("password").value;
      //  var emailReg = /^([w-.]+@([w-]+.)+[w-]{2,4})?$/;
        if( name ==='' || email ===''){
          alert("Please fill all fields...!!!!!!");
          return false;
        }
        // else if(!(email).match(emailReg)){
        //   alert("Invalid Email...!!!!!!");
        //   return false;
        // }
        else{
          return true;
        }
      }
    </script>


</body>
</html>
