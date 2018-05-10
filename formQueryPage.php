<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dota2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="CaptureDropdownSelection.js"></script>
  <script src="jquery-3.3.1.min.js"></script>
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
<!--                <a class="navbar-brand" href="#"><img class="dota-home" src="img/Dota.png"></a>-->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a> </li>
                    <li><a href="#">Heroes</a></li>
                    <li><a href="#">Matches</a></li>
                    <li><a href="#">Stats</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="myCarousel" class="carousel slide container" style="width: 100%" data-ride="carousel">
        <div class="carousel-caption">
                    <h1>Win your Dota2</h1>
        </div>
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
                <img src="img/Dota0.png">   
            </div><!-- End Active -->
            <div class="item">
                        <img src="img/Dota1.png">
            </div>
            <div class="item">
                        <img src="img/Dota2.png">
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
  <!-- Example split danger button -->
    




<?php
$val1 = $_POST["select1"];
//echo "the Value selected is for val1 \n".$val1;// hero name
$val2 = $_POST["select2"];
//echo "the Value selected is ".$val2;// item name
$val3 = $_POST["select3"];
//echo "the Value selected is ".$val3;// team name
$val4 = $_POST["select4"];
//echo "the Value selected is ".$val4;// won
$val5 = $_POST["select5"];
//echo "the Value selected is ".$val5." \\n ";

//echo "Select" .$val1. "from heroes where hero_id =" .$val2. "and item_id = ".$val3;





 $conn=oci_connect("anusingh","Biggerbang93","oracle.cise.ufl.edu/orcl");
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }

        // Prepare the statement
        #$stid = oci_parse($conn, "INSERT INTO USER_PROFILE VALUES(101,'hello','abc@gmail.com',1234567890,'helloworld')");
//oci_parse($conn, "INSERT INTO USER_PROFILE VALUES('$username','$mail','12312412','username')");
        $teamFind='';
        if($val3=='Radiant')
        {
            $teamFind='R';
        }
        if($val3=='Dire')
        {
            $teamFind='D';
        }
            
        $Qbase='select matches.match_id, matches.player_id, kills, deaths, assists from matches ';
       
        $qFHeroes=', Heroes';
        $qFItems=', (select name, item_id from Items where name like \''.$val2.'\') ';
        $qFMatch_detailsWon=', match_details ';
        
        
        
        $qWhereBase=' where 1=1 ';
        $qWHeroes=' and matches.hero_id=heroes.hero_id and heroes.name like \''.$val1.'\'';
        $qWItems=' and (s0=item_id or s1=item_id or s2=item_id or s3=item_id or s4=item_id or s5=item_id
        or s6=item_id or s7=item_id or s8=item_id) ';
        $qWMatch_detailsWon=' and matches.match_id= match_details.match_id and matches.team=match_details.winning_team ';
        $qWMatch_Select=' and matches.team like \''.$teamFind.'\' ';
        if($val1=='Heroes')
        {
            $qFHeroes=' ';
            $qWHerooes=' ';
        }
        if($val2=='Items')
        {
            $qFItems=' ';
            $qWItems=' ';
        }
        if($val3=='Team')
        {
            $qWMatch_Select='';
        }
        if($val4=='Match Won')
        {
            $qFMatch_detailsWon=' ';
            $qWMatch_detailsWon=' ';
        }
        $finalQuery=$Qbase.$qFHeroes.$qFItems.$qFMatch_detailsWon;
        $finalQuery=$finalQuery.$qWhereBase.$qWHeroes.$qWItems.$qWMatch_detailsWon.$qWMatch_Select;
      //  $qFHeroes=', Heroes';
    //    $qFItems=', Items';



//            $Qbase='Select match_id,player_id, kills, deaths, assists from matches';
//            if($val1!='Heroes')
//            {
//                $Qbase='Select match_id,player_id, kills, deaths, assists from matches, heroes where match.hero_id=';
//            }
//
//            $q1='SELECT match_id,player_id,kills, deaths, assists from Matches, heroes, items where matches.hero_id=heroes.hero_id and items. and heroes.name like \''.$val1.'\'';
//            $qAnd=' and ';
//            $qHeroes= ' heroes.name like \''.$val1 ;
//            $qItems=' s0 =';
//            if($val1=='Heroes')
//            {
//                
//            }
//echo $finalQuery;
$q1='SELECT match_id,player_id,kills, deaths, assists from Matches, heroes where matches.hero_id=heroes.hero_id and heroes.name like \''.$val1.'\'';
        $stid = oci_parse($conn, $finalQuery);  //VALUES('$username','$mail','12312412','username')");
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


 print "<table class ='table table-hover'>";
print"  <thead>
    <tr>
    <th span style ='padding-left: 100px'></th>
   <th span style ='padding-left: 100px'>Match ID</th>
    <th span style ='padding-left: 100px'> Player ID</th>
    <th span style ='padding-left: 100px'> Kills</th>
    <th span style ='padding-left: 100px'>Deaths</th>
    <th span style ='padding-left: 100px'>Assists</th>
     </tr>
       </thead>
  <tbody>

";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $myCounter=0;
    $match_id='';  
    foreach ($row as $item) {
        
        ///
        
          
        
        ///
        if($myCounter%5==0)
        {
            $match_id=$item;
            print "<tr>";
            print "<td><img src='img/new1.jpg' class='img-thumbnail'/> </td>";
            
        }
        print "    <td span style ='padding-left: 100px'>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
        if($myCounter%5==0)
        {
            //print "</th>";
            
        }
        if($myCounter%5==4)
        {
            print"<td span style ='padding-left: 100px'> 
            
            <form  method ='get' action='matchDetailsPage.php'><button type='Submit' name='ViewButton' value=$match_id  class='btn btn-primary'>View</button></form></td>";
            
//            <button type='button' class='btn btn-primary'>View</button></td>";

            print "</tr>\n";
        }
        $myCounter=$myCounter+1;
    }
    
}
print "</tbody> </table>\n";

        // Fetch the results of the query

        oci_free_statement($stid);
        oci_close($conn);


        
/*

        print "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "<tr>\n";
    foreach ($row as $item) {
        print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    print "</tr>\n";
}
print "</table>\n";



        // Fetch the results of the query

        oci_free_statement($stid);
        oci_close($conn);

*/

?>
    
    </body>
</html>