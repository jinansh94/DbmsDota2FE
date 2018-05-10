<!DOCTYPE html>
<html lang="en">
<head>
  <title>Player Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="newcss.css">
</head>
<body>
  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="RegisteredUserHomepage.html"><img class="dota-home" src="img/Dota.png"></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="RegisteredUserHomepage.html">Explorer</a> </li>
                  <li><a href="graph.html">Trends</a></li>
                  <li><a href="#hid">Log Out</a></li>
                  <li><a href="#contact">Contact Us</a></li>
              </ul>
          </div>
      </div>
  </nav>

    <div id="myCarousel" class="carousel slide container" style="width: 80%" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active">
            </li>
            <li data-target="#myCarousel" data-slide-to="1">
            </li>
            <li data-target="#myCarousel" data-slide-to="2">
            </li>
        </ol>
        <div class="carousel-inner" style="height: 200px; width: 100%" role="listbox">
            
            <div class="item active">
                <img src="img/player0.png" style="height: 200px; width: 100%">   
            </div><!-- End Active -->
            <div class="item">
                        <img src="img/player1.jpg" style="height: 200px; width: 100%">
            </div>
            <div class="item">
                        <img src="img/player2.png" style="height: 200px; width: 100%">
            </div>
        </div>
        <!-- Start Slider Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
    </div><!--- End Slider -->
    
    <br>

<?php
//    $player_id=$_GET['playerSaveButton'];
//    echo $player_id;
//     $match_id=$_GET['matchSaveButton'];
//    echo $match_id;
//     $hero_id=$_GET['heroSaveButton'];
//    echo $hero_id;
    
    $player_id=isset($_GET['playerSaveButton']) ? $_GET['playerSaveButton'] : '';
    $match_id=isset($_GET['matchSaveButton']) ? $_GET['matchSaveButton'] : '';
    $hero_id=isset($_GET['heroSaveButton']) ? $_GET['heroSaveButton'] : '';
//    echo $player_id;
//    echo $match_id;
//    echo $hero_id;

    
    
    if($player_id){
         $split=explode(".&.",$player_id);
         $match_id = $split[1];
        $player_id=$split[0];
    }
    else if($hero_id){
         $split=explode(".&.",$hero_id);
         $match_id = $split[1];
        $hero_id=$split[0];
    }
   else if($match_id){
         $split=explode(".&.",$match_id);
        $match_id = $split[1];
    }
   
   
    
//    echo $match_id;
    
    
    $conn=oci_connect("anusingh","Biggerbang93","oracle.cise.ufl.edu/orcl");
        if (!$conn) {
            
        }   
       
    $temp="select * from SessionTable";
    $stid = oci_parse($conn, $temp);    
    
    
    if (!$stid) {
            
        }
    oci_execute($stid);
    $userID='';
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
    {
         foreach ($row as $item) 
        {
            $userID=$item;
             

        }
    }
    
//    echo $userID;
    
     $Query1='select match_id from matches where match_id='.$match_id;
    
    
   // "insert into User_profile values('".$username."','".$mail."','".$password."')";
    if($match_id){
     $query2 ="insert into user_profile_saved_matches values('".$userID."','".$match_id."')";
     $stidq2 = oci_parse($conn, $query2);
    oci_execute($stidq2);  
    oci_free_statement($stidq2);}
     
    if($hero_id){
    $query3 ="insert into user_profile_saved_heroes values('".$userID."','".$hero_id."')";
        //echo $query3;
    $stidq3 = oci_parse($conn, $query3);
    oci_execute($stidq3);
    oci_free_statement($stidq3);}
     
    if($player_id){
    $query4 ="insert into user_profile_saved_players values('".$userID."','".$player_id."')";
        //echo $query4;
    $stidq4 = oci_parse($conn, $query4);
    oci_execute($stidq4); 
    oci_free_statement($stidq4);
    }
    
    $query5 ="select hero_name from user_profile_saved_heroes where username like '".$userID."'";
        //echo $query3;
    $stidq5 = oci_parse($conn, $query5);
     oci_execute($stidq5); 
    
  
    
   print "<table class ='table table-hover' span style = 'width >= 100% overflow-x: auto'>\n";
print"  <thead>
    <tr>
  
   <th span style ='padding-left: 100px'>Saved Heroes</th>
     </tr>
       </thead>
  <tbody>

";
    
    
while ($row = oci_fetch_array($stidq5, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $myCounter=0;
    $match_id='';  
    foreach ($row as $item) {

            $match_id=$item;
            print "<tr>";
      
        print "    <td span style ='padding-left: 100px'>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
       
            print"<td span style ='padding-left: 100px'>";   
            print "</tr>\n";
       
    }
    
}
print "</tbody> </table>\n";
    
    oci_free_statement($stidq5);
    
    
      $query6 ="select player_id from user_profile_saved_players where username like '".$userID."'";
        //echo $query3;
    $stidq6 = oci_parse($conn, $query6);
     oci_execute($stidq6);
    
    
    print "<table class ='table table-hover'>\n";
    print"  <thead>
    <tr>  
   <th span style ='padding-left: 100px'>Saved Players</th> 
     </tr>
       </thead>
  <tbody>
  ";
    
    
while ($row = oci_fetch_array($stidq6, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $myCounter=0;
    $match_id='';  
    foreach ($row as $item) {

            $match_id=$item;
            print "<tr>";
      
        print "    <td span style ='padding-left: 100px'>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
       
            print"<td span style ='padding-left: 100px'>";   
            print "</tr>\n";
       
    }
    
}
    
      oci_free_statement($stidq6);
      $query7 ="select match_id from user_profile_saved_matches where username like '".$userID."'";
        //echo $query3;
    $stidq7 = oci_parse($conn, $query7);
     oci_execute($stidq7);
   
    
    print "<table class ='table table-hover'>\n";
    print"  <thead>
    <tr>  
   <th span style ='padding-left: 100px'>Saved Matches</th> 
     </tr>
       </thead>
  <tbody>
  ";
    
    
while ($row = oci_fetch_array($stidq7, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $myCounter=0;
    $match_id='';  
    foreach ($row as $item) {

            $match_id=$item;
            print "<tr>";
      
        print "    <td span style ='padding-left: 100px'>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
       
            print"<td span style ='padding-left: 100px'>";   
            print "</tr>\n";
       
    }
    
}
print "</tbody> </table>\n";
     oci_free_statement($stidq7);
    
    oci_close($conn);
       
?>  
    
    <footer class="container-fuid text-center" id="contact">
        <div class="row">
            <div class="col-sm-4">
                <h3>Contact Us</h3>
                <br>
                <h4>Our address and contact and info here</h4>
            </div>
            <div class="col-sm-4">
                <h3>Connect</h3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-github"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
            <div class="col-sm-4">
                <img src="img/bunny.png" class="icon">
            </div>
        </div>
    </footer>

</body>
</html>
