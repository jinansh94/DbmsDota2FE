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
        $finalQuery= 'Select * from Heroes;';
        
        $temp="insert into User_profile values('".$username."','".$mail."','".$password."')";
        $stid = oci_parse($conn, $temp);        
        //VALUES('$username','$mail','12312412','username')");
        if (!$stid) {
            $e = oci_error($conn);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        
        // Perform the logic of the query
        $r = oci_execute($stid);
        if (!$r) {
            $e = oci_error($stid);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        
         oci_free_statement($stid);
        oci_close($conn);

    
    }

?>   