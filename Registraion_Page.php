<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="Registration_Page_StyleSheet.css">
</head>
<body>
 <?php  
    
   $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    
   $username=isset($_POST['username']) ? $_POST['username'] : '';
   $password=isset($_POST['password']) ? $_POST['password'] : '';
   $optionSelected=isset($_POST['$optionSelected']) ? $_POST['$optionSelected'] : '';

    
    if((isset($_POST["mail"]) && !empty($_POST["mail"]))&&(isset($_POST["username"]) && !empty($_POST["username"]))&&
    (isset($_POST["password"]) && !empty($_POST["password"])))
    {
      $conn=oci_connect("anusingh","Biggerbang93","oracle.cise.ufl.edu/orcl");
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        
        
        //checking if already exists
        $checkIfExists="select * from User_profile where username='".$username."'";
        $stid = oci_parse($conn, $checkIfExists);
        oci_execute($stid);
        if($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS))
	   {
           echo "username already exists!!";
        }
		    
        else
        {
            #$_SESSION['msg']="Invalid login ID or Password";
            //header("location: Login_Page.php");
            echo "successfully registered!";
            
            
            $temp="insert into User_profile values('".$username."','".$mail."','".$password."')";
            $stid1 = oci_parse($conn, $temp);        
            //VALUES('$username','$mail','12312412','username')");
            if (!$stid1) {
                $e = oci_error($conn);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }

            // Perform the logic of the query
            $r = oci_execute($stid1);
            if (!$r) {
                $e = oci_error($stid1);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
            oci_free_statement($stid1);
            
            
            
        }
        
        //checking complete
        
        
        
        
        
        
       
        
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
                <input type="name" class="form-control" placeholder="Enter Username" name="username">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email" name="mail">
              </div>
               <div class="form-group ">
                <input id="psw" type="password" class="form-control" placeholder="Set Password" name="password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-Enter Password">
              </div>
              <input type="submit" class="btn btn-outline-success" name="SubmitButton">
                <div class="col-12 forgot1">
              <a href="Login_Page.php">Do you already have an account?</a>
          </div>
          </form>
        
        </div><!--- End of MOdal COntent -->
      </div>
    </div>
    
    
    <div id="message">
  <p id="letter" class="invalid fon" >A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid fon">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid fon">A <b>number</b></p>
  <p id="length" class="invalid fon">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
 
    

</body>
</html>































