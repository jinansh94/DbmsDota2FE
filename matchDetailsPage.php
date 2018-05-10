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
                <a class="navbar-brand" href="#"><img class="dota-home" src="img/Dota.png"></a>
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
    
    
    <br>
    

    
    
<?php
    $match_idGOT=$_GET['ViewButton'];
    echo $match_idGOT;
    
    $select1_Team='';
    $select2_Team='';
    $select3_Team='';
    $select4_Team='';
    $select5_Team='';
    $select6_Team='';
    $select7_Team='';
    $select8_Team='';
    $select9_Team='';
    $select10_Team='';
    
    $select1_ID    ='';
    $select2_ID    ='';
    $select3_ID    ='';
    $select4_ID    ='';
    $select5_ID     ='';
    $select6_ID    ='';
    $select7_ID    ='';
    $select8_ID    ='';
    $select9_ID    ='';
    $select10_ID='';
      

    $select1_Hero='';
    $select2_Hero='';
    $select3_Hero='';
    $select4_Hero='';
    $select5_Hero='';
    $select6_Hero='';
    $select7_Hero='';
    $select8_Hero='';
    $select9_Hero='';
    $select10_Hero='';
        
        
    $select1_Kills='';
    $select2_Kills='';
    $select3_Kills='';
    $select4_Kills='';
    $select5_Kills='';
    $select6_Kills='';
    $select7_Kills='';
    $select8_Kills='';
    $select9_Kills='';
    $select10_Kills='';
        
    $select1_Deaths='';
    $select2_Deaths='';
    $select3_Deaths='';
    $select4_Deaths='';
    $select5_Deaths='';
    $select6_Deaths='';
    $select7_Deaths='';
    $select8_Deaths='';
    $select9_Deaths='';
    $select10_Deaths='';
        
    $select1_Assists='';
    $select2_Assists='';
    $select3_Assists='';
    $select4_Assists='';
    $select5_Assists='';
    $select6_Assists='';
    $select7_Assists='';
    $select8_Assists='';
    $select9_Assists='';
    $select10_Assists='';
        
    $select1_GPM='';
    $select2_GPM='';
    $select3_GPM='';
    $select4_GPM='';
    $select5_GPM='';
    $select6_GPM='';
    $select7_GPM='';
    $select8_GPM='';
    $select9_GPM='';
    $select10_GPM='';
        
    $select1_XPM='';
    $select2_XPM='';
    $select3_XPM='';
    $select4_XPM='';
    $select5_XPM='';
    $select6_XPM='';
    $select7_XPM='';
    $select8_XPM='';
    $select9_XPM='';
    $select10_XPM='';
        
    $select1_Item1='';
    $select2_Item1='';
    $select3_Item1='';
    $select4_Item1='';
    $select5_Item1='';
    $select6_Item1='';
    $select7_Item1='';
    $select8_Item1='';
    $select9_Item1='';
    $select10_Item1='';
        
    $select1_Item2='';
    $select2_Item2='';
    $select3_Item2='';
    $select4_Item2='';
    $select5_Item2='';
    $select6_Item2='';
    $select7_Item2='';
    $select8_Item2='';
    $select9_Item2='';
    $select10_Item2='';
    
        
    $select1_Item3='';
    $select2_Item3='';
    $select3_Item3='';
    $select4_Item3='';
    $select5_Item3='';
    $select6_Item3='';
    $select7_Item3='';
    $select8_Item3='';
    $select9_Item3='';
    $select10_Item3='';
    
        
    $select1_Item4='';
    $select2_Item4='';
    $select3_Item4='';
    $select4_Item4='';
    $select5_Item4='';
    $select6_Item4='';
    $select7_Item4='';
    $select8_Item4='';
    $select9_Item4='';
    $select10_Item4='';
        
        
    $select1_Item5='';
    $select2_Item5='';
    $select3_Item5='';
    $select4_Item5='';
    $select5_Item5='';
    $select6_Item5='';
    $select7_Item5='';
    $select8_Item5='';
    $select9_Item5='';
    $select10_Item5='';
        
        
    $select1_Item6='';
    $select2_Item6='';
    $select3_Item6='';
    $select4_Item6='';
    $select5_Item6='';
    $select6_Item6='';
    $select7_Item6='';
    $select8_Item6='';
    $select9_Item6='';
    $select10_Item6='';
        
    
        
    $select1_Item7='';
    $select2_Item7='';
    $select3_Item7='';
    $select4_Item7='';
    $select5_Item7='';
    $select6_Item7='';
    $select7_Item7='';
    $select8_Item7='';
    $select9_Item7='';
    $select10_Item7='';
        
        
    $select1_Item8='';
    $select2_Item8='';
    $select3_Item8='';
    $select4_Item8='';
    $select5_Item8='';
    $select6_Item8='';
    $select7_Item8='';
    $select8_Item8='';
    $select9_Item8='';
    $select10_Item8='';
        
        
    $select1_Item9='';
    $select2_Item9='';
    $select3_Item9='';
    $select4_Item9='';
    $select5_Item9='';
    $select6_Item9='';
    $select7_Item9='';
    $select8_Item9='';
    $select9_Item9='';
    $select10_Item9='';
        
    
    
    
    
    
    
    $conn=oci_connect("anusingh","Biggerbang93","oracle.cise.ufl.edu/orcl");
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
     $finalQuery='select matches.team,matches.player_id, heroes.name, matches.kills, matches.deaths, matches.assists, matches.avg_gpm, matches.avg_xpm, (select name from Items where item_id=matches.s0), (select name from Items where item_id=matches.s1),(select name from Items where item_id=matches.s2),(select name from Items where item_id=matches.s3),(select name from Items where item_id=matches.s4),(select name from Items where item_id=matches.s5),(select name from Items where item_id=matches.s6),(select name from Items where item_id=matches.s7),(select name from Items where item_id=matches.s8) from matches,heroes where heroes.hero_id=matches.hero_id and matches.match_id='.$match_idGOT;
    $stid = oci_parse($conn, $finalQuery); 
    
    //match details will be fetched here.
    
    $r = oci_execute($stid);
        if (!$r) {
            $e = oci_error($stid);
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
    ////
     $player_id ='';
    $match_id = $match_idGOT ;
    $hero_name ='';
    $myRowCounter=0;
   $playerCounter=1;
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
    {
        
        $myRowCounter=$myRowCounter+1;
         $tupleVal='';
        foreach ($row as $item) 
        {
            $temp= (string)$item;
            
            $tupleVal=$tupleVal." ".$temp;

        }

        $split=explode(" ",$tupleVal);
        ${"select".$playerCounter."_Team"}=$split[1];
        ${"select".$playerCounter."_ID"}=$split[2];
        ${"select".$playerCounter."_Hero"}=$split[3];
        ${"select".$playerCounter."_Kills"}=$split[4];
        ${"select".$playerCounter."_Deaths"}=$split[5];
        ${"select".$playerCounter."_Assists"}=$split[6];
        ${"select".$playerCounter."_GPM"}=$split[7];
        ${"select".$playerCounter."_XPM"}=$split[8];
        ${"select".$playerCounter."_Item1"}=$split[9];
        ${"select".$playerCounter."_Item2"}=$split[10];
        ${"select".$playerCounter."_Item3"}=$split[11];
        ${"select".$playerCounter."_Item4"}=$split[12];
        ${"select".$playerCounter."_Item5"}=$split[13];
        ${"select".$playerCounter."_Item6"}=$split[14];
        ${"select".$playerCounter."_Item7"}=$split[15];
        ${"select".$playerCounter."_Item8"}=$split[16];
        ${"select".$playerCounter."_Item9"}=$split[17];
        
        
        $playerCounter=$playerCounter+1;
//      echo $split[1];
//      echo $split[2];
//        
    }
    //echo $playerCounter;
    //echo $myRowCounter;
//     $pizza="1 b 3 d";
//         $split1=explode(" ",$pizza);
//      echo $split1[0];
//      echo $split1[1];
//        echo $split1[2];
    ////
        
    function getImg($name){
        $path1 = "itemImages/";
         $format = ".jpeg";
        $path1 .= $name;
        $path1 .= $format;
       // echo $path1;
        return $path1;
    }
//    {
//  
//    //$path = "<img src='D:\xampp\htdocs\itemImages";
//
////    $format = ".jpeg'>";
////    $path .= $name;
////    $path .= $format;
//  //  return $path;
//    }
    
    function getImgHero($name)
    {
        $path1 = "heroImages/";
        $format = ".jpeg";
        $path1 .= $name;
        $path1 .= $format;
       // echo $path1;
        return $path1;
//   
    }
//    
     
    $select1_HeroImage = getImgHero($select1_Hero);
    $select2_HeroImage = getImgHero($select2_Hero);
    $select3_HeroImage = getImgHero($select3_Hero);
    $select4_HeroImage = getImgHero($select4_Hero);
    $select5_HeroImage = getImgHero($select5_Hero);
    $select6_HeroImage = getImgHero($select6_Hero);
    $select7_HeroImage = getImgHero($select7_Hero);
    $select8_HeroImage = getImgHero($select8_Hero);
    $select9_HeroImage = getImgHero($select9_Hero);
    $select10_HeroImage = getImgHero($select10_Hero);
    
        
    $select1_Item1image = getImg($select1_Item1);
    $select2_Item1image = getImg($select2_Item1); 
    $select3_Item1image = getImg($select3_Item1);
    $select4_Item1image = getImg($select4_Item1);
    $select5_Item1image = getImg($select5_Item1);
    $select6_Item1image = getImg($select6_Item1);
    $select7_Item1image = getImg($select7_Item1);
    $select8_Item1image = getImg($select8_Item1);
    $select9_Item1image = getImg($select9_Item1);
    $select10_Item1image = getImg($select10_Item1);
        
    $select1_Item2image = getImg($select1_Item2);
    $select2_Item2image = getImg($select2_Item2);
    $select3_Item2image = getImg($select3_Item2);
    $select4_Item2image = getImg($select4_Item2);
    $select5_Item2image = getImg($select5_Item2);
    $select6_Item2image = getImg($select6_Item2);
    $select7_Item2image = getImg($select7_Item2);
    $select8_Item2image = getImg($select8_Item2);
    $select9_Item2image = getImg($select9_Item2);
    $select10_Item2image = getImg($select10_Item2);
    
        
    $select1_Item3image = getImg($select1_Item3);
    $select2_Item3image = getImg($select2_Item3);
    $select3_Item3image = getImg($select3_Item3);
    $select4_Item3image = getImg($select4_Item3);
    $select5_Item3image = getImg($select5_Item3);
    $select6_Item3image = getImg($select6_Item3);
    $select7_Item3image = getImg($select7_Item3);
    $select8_Item3image = getImg($select8_Item3);
    $select9_Item3image = getImg($select9_Item3);
    $select10_Item3image = getImg($select10_Item3);
    
        
    $select1_Item4image = getImg($select1_Item4);
    $select2_Item4image = getImg($select2_Item4);
    $select3_Item4image = getImg($select3_Item4);
    $select4_Item4image = getImg($select4_Item4);
    $select5_Item4image = getImg($select5_Item4);
    $select6_Item4image = getImg($select6_Item4);
    $select7_Item4image = getImg($select7_Item4);
    $select8_Item4image = getImg($select8_Item4);
    $select9_Item4image = getImg($select9_Item4);
    $select10_Item4image = getImg($select10_Item4);
        
        
    $select1_Item5image = getImg($select1_Item5);
    $select2_Item5image = getImg($select2_Item5);
    $select3_Item5image = getImg($select3_Item5);
    $select4_Item5image = getImg($select4_Item5);
    $select5_Item5image = getImg($select5_Item5);
    $select6_Item5image = getImg($select6_Item5);
    $select7_Item5image = getImg($select7_Item5);
    $select8_Item5image = getImg($select8_Item5);
    $select9_Item5image = getImg($select9_Item5);
    $select10_Item5image = getImg($select10_Item5);
        
        
    $select1_Item6image = getImg($select1_Item6);
    $select2_Item6image = getImg($select2_Item6);
    $select3_Item6image = getImg($select3_Item6);
    $select4_Item6image = getImg($select4_Item6);
    $select5_Item6image = getImg($select5_Item6);
    $select6_Item6image = getImg($select6_Item6);
    $select7_Item6image = getImg($select7_Item6);
    $select8_Item6image = getImg($select8_Item6);
    $select9_Item6image = getImg($select9_Item6);
    $select10_Item6image = getImg($select10_Item6);
        
    
        
    $select1_Item7image = getImg($select1_Item7);
    $select2_Item7image = getImg($select2_Item7);
    $select3_Item7image = getImg($select3_Item7);
    $select4_Item7image = getImg($select4_Item7);
    $select5_Item7image = getImg($select5_Item7);
    $select6_Item7image = getImg($select6_Item7);
    $select7_Item7image = getImg($select7_Item7);
    $select8_Item7image = getImg($select8_Item7);
    $select9_Item7image = getImg($select9_Item7);
    $select10_Item7image = getImg($select10_Item7);
        
        
    $select1_Item8image = getImg($select1_Item8);
    $select2_Item8image = getImg($select2_Item8);
    $select3_Item8image = getImg($select3_Item8);
    $select4_Item8image = getImg($select4_Item8);
    $select5_Item8image = getImg($select5_Item8);
    $select6_Item8image = getImg($select6_Item8);
    $select7_Item8image = getImg($select7_Item8);
    $select8_Item8image = getImg($select8_Item8);
    $select9_Item8image = getImg($select9_Item8);
    $select10_Item8image = getImg($select10_Item8);
        
        
    $select1_Item9image = getImg($select1_Item9);
    $select2_Item9image = getImg($select2_Item9);
    $select3_Item9image = getImg($select3_Item9);
    $select4_Item9image = getImg($select4_Item9);
    $select5_Item9image = getImg($select5_Item9);
    $select6_Item9image = getImg($select6_Item9);
    $select7_Item9image = getImg($select7_Item9);
    $select8_Item9image = getImg($select8_Item9);
    $select9_Item9image = getImg($select9_Item9);
    $select10_Item9image = getImg($select10_Item9);
      
    
  
print "<table class ='table table-hover'>";
print "<thead>
    <tr>
    <th span style ='padding-left: 10px'>    </th>
    <th span style ='padding-left: 10px'>Team</th>
    <th span style ='padding-left: 10px margin-left: 10px margin-right: 5px'>Player ID</th>
    <th span style ='padding-left: 10px'>Hero</th>
    <th span style ='padding-left: 10px'>Kills</th>
    <th span style ='padding-left: 10px'>Deaths</th>
    <th span style ='padding-left: 10px'>Assists</th>
    <th span style ='padding-left: 10px'>GPM</th>
    <th span style ='padding-left: 10px'>XPM</th>    
    <th span style ='padding-left: 10px'>Item1</th>    
    <th span style ='padding-left: 10px'>Item2</th>    
    <th span style ='padding-left: 10px'>Item3</th>    
    <th span style ='padding-left: 10px'>Item4</th>    
    <th span style ='padding-left: 10px'>Item5</th>  
    <th span style ='padding-left: 10px'>Item6</th>  
    <th span style ='padding-left: 10px'>Item7</th>  
    <th span style ='padding-left: 10px'>Item8</th>  
    <th span style ='padding-left: 10px'>Item9</th>  
    </tr>
       </thead>
  <tbody>";

    
print "<tr>
      <th scope='row'>Player 1</th>
        
      <td name='select1_Team' style ='padding-left: 10px'>$select1_Team</td>
      <td name='select1_ID' style ='padding-left: 10px'>$select1_ID</td>
      <td name='select1_Hero' style ='padding-left: 10px'><img src='$select1_HeroImage' title='$select1_Hero' class='img-thumbnail' ></td>
      <td name='select1_Kills' style ='padding-left: 10px'>$select1_Kills</td>
      <td name='select1_Deaths' style ='padding-left: 10px'>$select1_Deaths</td>
      <td name='select1_Assists' style ='padding-left: 10px'>$select1_Assists</td>
      <td name='select1_GPM' style ='padding-left: 10px'>$select1_GPM</td>
      <td name='select1_XPM' style ='padding-left: 10px'>$select1_XPM</td>
      <td name='select1_Item1' style ='padding-left: 10px'><img src='$select1_Item1image' title='$select1_Item1' class='img-thumbnail'></td>
      <td name='select1_Item2' style ='padding-left: 10px'><img src='$select1_Item2image' title='$select1_Item2' class='img-thumbnail'></td>
      <td name='select1_Item3' style ='padding-left: 10px'><img src='$select1_Item3image' title='$select1_Item3' class='img-thumbnail'></td>
      <td name='select1_Item4' style ='padding-left: 10px'><img src='$select1_Item4image' title='$select1_Item4' class='img-thumbnail'></td>
      <td name='select1_Item5' style ='padding-left: 10px'><img src='$select1_Item5image' title='$select1_Item5' class='img-thumbnail'></td>
      <td name='select1_Item6' style ='padding-left: 10px'><img src='$select1_Item6image' title='$select1_Item6' class='img-thumbnail'></td>
      <td name='select1_Item7' style ='padding-left: 10px'><img src='$select1_Item7image' title='$select1_Item7' class='img-thumbnail'></td>
      <td name='select1_Item8' style ='padding-left: 10px'><img src='$select1_Item8image' title='$select1_Item8' class='img-thumbnail'></td>
      <td name='select1_Item9' style ='padding-left: 10px'><img src='$select1_Item9image' title='$select1_Item9' class='img-thumbnail'></td>
        
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select1_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select1_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 2</th>
        
      <td name='select2_Team' style ='padding-left: 10px'>$select2_Team</td>
      <td name='select2_ID' style ='padding-left: 10px'>$select2_ID</td>
      <td name='select2_Hero' style ='padding-left: 10px'><img src='$select2_HeroImage' title='$select2_Hero' ></td>
      <td name='select2_Kills' style ='padding-left: 10px'>$select2_Kills</td>
      <td name='select2_Deaths' style ='padding-left: 10px'>$select2_Deaths</td>
      <td name='select2_Assists' style ='padding-left: 10px'>$select2_Assists</td>
      <td name='select2_GPM' style ='padding-left: 10px'>$select2_GPM</td>
      <td name='select2_XPM' style ='padding-left: 10px'>$select2_XPM</td>
      <td name='select2_Item1' style ='padding-left: 10px'><img src='$select2_Item1image' title='$select2_Item1' class='img-thumbnail'></td>
      <td name='select2_Item2' style ='padding-left: 10px'><img src='$select2_Item2image' title='$select2_Item2' class='img-thumbnail'></td>
      <td name='select2_Item3' style ='padding-left: 10px'><img src='$select2_Item3image' title='$select2_Item3' class='img-thumbnail'></img></td>
      <td name='select2_Item4' style ='padding-left: 10px'><img src='$select2_Item4image' title='$select2_Item4' class='img-thumbnail'></img></td>
      <td name='select2_Item5' style ='padding-left: 10px'><img src='$select2_Item5image' title='$select2_Item5' class='img-thumbnail'></img></td>
      <td name='select2_Item6' style ='padding-left: 10px'><img src='$select2_Item6image' title='$select2_Item6' class='img-thumbnail'></img></td>
      <td name='select2_Item7' style ='padding-left: 10px'><img src='$select2_Item7image' title='$select2_Item7' class='img-thumbnail'></img></td>
      <td name='select2_Item8' style ='padding-left: 10px'><img src='$select2_Item8image' title='$select2_Item8' class='img-thumbnail'></img></td>
      <td name='select2_Item9' style ='padding-left: 10px'><img src='$select2_Item9image' title='$select2_Item9' class='img-thumbnail'></img></td>
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select2_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select2_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 3</th>
        
      <td name='select3_Team' style ='padding-left: 10px'>$select3_Team</td>
      <td name='select3_ID' style ='padding-left: 10px'>$select3_ID</td>
      <td name='select3_Hero' style ='padding-left: 10px'><img src='$select3_HeroImage' title='$select3_Hero' ></td>
      <td name='select3_Kills' style ='padding-left: 10px'>$select3_Kills</td>
      <td name='select3_Deaths' style ='padding-left: 10px'>$select3_Deaths</td>
      <td name='select3_Assists' style ='padding-left: 10px'>$select3_Assists</td>
      <td name='select3_GPM' style ='padding-left: 10px'>$select3_GPM</td>
      <td name='select3_XPM' style ='padding-left: 10px'>$select3_XPM</td>
      <td name='select3_Item1' style ='padding-left: 10px'><img src='$select3_Item1image' title='$select3_Item1' class='img-thumbnail'></td>
      <td name='select3_Item2' style ='padding-left: 10px'><img src='$select3_Item2image' title='$select3_Item2' class='img-thumbnail'></img></td>
      <td name='select3_Item3' style ='padding-left: 10px'><img src='$select3_Item3image' title='$select3_Item3' class='img-thumbnail'></img></td>
      <td name='select3_Item4' style ='padding-left: 10px'><img src='$select3_Item4image' title='$select3_Item4' class='img-thumbnail'></img></td>
      <td name='select3_Item5' style ='padding-left: 10px'><img src='$select3_Item5image' title='$select3_Item5' class='img-thumbnail'></img></td>
      <td name='select3_Item6' style ='padding-left: 10px'><img src='$select3_Item6image' title='$select3_Item6' class='img-thumbnail'></img></td>
      <td name='select3_Item7' style ='padding-left: 10px'><img src='$select3_Item7image' title='$select3_Item7' class='img-thumbnail'></img></td>
      <td name='select3_Item8' style ='padding-left: 10px'><img src='$select3_Item8image' title='$select3_Item8' class='img-thumbnail'></img></td>
      <td name='select3_Item9' style ='padding-left: 10px'><img src='$select3_Item9image' title='$select3_Item9' class='img-thumbnail'></img></td>
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select3_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select3_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 4</th>
        
      <td name='select4_Team' style ='padding-left: 10px'>$select4_Team</td>
      <td name='select4_ID' style ='padding-left: 10px'>$select4_ID</td>
      <td name='select4_Hero' style ='padding-left: 10px'><img src='$select4_HeroImage' title='$select4_Hero' ></td>
      <td name='select4_Kills' style ='padding-left: 10px'>$select4_Kills</td>
      <td name='select4_Deaths' style ='padding-left: 10px'>$select4_Deaths</td>
      <td name='select4_Assists' style ='padding-left: 10px'>$select4_Assists</td>
      <td name='select4_GPM' style ='padding-left: 10px'>$select4_GPM</td>
      <td name='select4_XPM' style ='padding-left: 10px'>$select4_XPM</td>
      <td name='select4_Item1' style ='padding-left: 10px'><img src='$select4_Item1image' title='$select4_Item1' class='img-thumbnail'></td>
      <td name='select4_Item2' style ='padding-left: 10px'><img src='$select4_Item2image' title='$select4_Item2' class='img-thumbnail'></img></td>
      <td name='select4_Item3' style ='padding-left: 10px'><img src='$select4_Item3image' title='$select4_Item3' class='img-thumbnail'></img></td>
      <td name='select4_Item4' style ='padding-left: 10px'><img src='$select4_Item4image' title='$select4_Item4' class='img-thumbnail'></img></td>
      <td name='select4_Item5' style ='padding-left: 10px'><img src='$select4_Item5image' title='$select4_Item5' class='img-thumbnail'></img></td>
      <td name='select4_Item6' style ='padding-left: 10px'><img src='$select4_Item6image' title='$select4_Item6' class='img-thumbnail'></img></td>
      <td name='select4_Item7' style ='padding-left: 10px'><img src='$select4_Item7image' title='$select4_Item7' class='img-thumbnail'></img></td>
      <td name='select4_Item8' style ='padding-left: 10px'><img src='$select4_Item8image' title='$select4_Item8' class='img-thumbnail'></img></td>
      <td name='select4_Item9' style ='padding-left: 10px'><img src='$select4_Item9image' title='$select4_Item9' class='img-thumbnail'></img></td>
       <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select4_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select4_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 5</th>
      <td name='select5_Team' style ='padding-left: 10px'>$select5_Team</td>
      <td name='select5_ID' style ='padding-left: 10px'>$select5_ID</td>
      <td name='select5_Hero' style ='padding-left: 10px'><img src='$select5_HeroImage' title='$select5_Hero' ></td>
      <td name='select5_Kills' style ='padding-left: 10px'>$select5_Kills</td>
      <td name='select5_Deaths' style ='padding-left: 10px'>$select5_Deaths</td>
      <td name='select5_Assists' style ='padding-left: 10px'>$select5_Assists</td>
      <td name='select5_GPM' style ='padding-left: 10px'>$select5_GPM</td>
      <td name='select5_XPM' style ='padding-left: 10px'>$select5_XPM</td>
      <td name='select5_Item1' style ='padding-left: 10px'><img src='$select5_Item1image' title='$select5_Item1' class='img-thumbnail'></td>
      <td name='select5_Item2' style ='padding-left: 10px'><img src='$select5_Item2image' title='$select5_Item2' class='img-thumbnail'></img></td>
      <td name='select5_Item3' style ='padding-left: 10px'><img src='$select5_Item3image' title='$select5_Item3' class='img-thumbnail'></img></td>
      <td name='select5_Item4' style ='padding-left: 10px'><img src='$select5_Item4image' title='$select5_Item4' class='img-thumbnail'></img></td>
      <td name='select5_Item5' style ='padding-left: 10px'><img src='$select5_Item5image' title='$select5_Item5' class='img-thumbnail'></img></td>
      <td name='select5_Item6' style ='padding-left: 10px'><img src='$select5_Item6image' title='$select5_Item6' class='img-thumbnail'></img></td>
      <td name='select5_Item7' style ='padding-left: 10px'><img src='$select5_Item7image' title='$select5_Item7' class='img-thumbnail'></img></td>
      <td name='select5_Item8' style ='padding-left: 10px'><img src='$select5_Item8image' title='$select5_Item8' class='img-thumbnail'></img></td>
      <td name='select5_Item9' style ='padding-left: 10px'><img src='$select5_Item9image' title='$select5_Item9' class='img-thumbnail'></img></td>
       <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select5_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select5_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 6</th>
     <td name='select6_Team' style ='padding-left: 10px'>$select6_Team</td>
      <td name='select6_ID' style ='padding-left: 10px'>$select6_ID</td>
      <td name='select6_Hero' style ='padding-left: 10px'><img src='$select6_HeroImage' title='$select6_Hero' ></td>
      <td name='select6_Kills' style ='padding-left: 10px'>$select6_Kills</td>
      <td name='select6_Deaths' style ='padding-left: 10px'>$select6_Deaths</td>
      <td name='select6_Assists' style ='padding-left: 10px'>$select6_Assists</td>
      <td name='select6_GPM' style ='padding-left: 10px'>$select6_GPM</td>
      <td name='select6_XPM' style ='padding-left: 10px'>$select6_XPM</td>
      <td name='select6_Item1' style ='padding-left: 10px'><img src='$select6_Item1image' title='$select6_Item1' class='img-thumbnail'></td>
      <td name='select6_Item2' style ='padding-left: 10px'><img src='$select6_Item2image' title='$select6_Item2' class='img-thumbnail'></img></td>
      <td name='select6_Item3' style ='padding-left: 10px'><img src='$select6_Item3image' title='$select6_Item3' class='img-thumbnail'></img></td>
      <td name='select6_Item4' style ='padding-left: 10px'><img src='$select6_Item4image' title='$select6_Item4' class='img-thumbnail'></img></td>
      <td name='select6_Item5' style ='padding-left: 10px'><img src='$select6_Item5image' title='$select6_Item5' class='img-thumbnail'></img></td>
      <td name='select6_Item6' style ='padding-left: 10px'><img src='$select6_Item6image' title='$select6_Item6' class='img-thumbnail'></img></td>
      <td name='select6_Item7' style ='padding-left: 10px'><img src='$select6_Item7image' title='$select6_Item7' class='img-thumbnail'></img></td>
      <td name='select6_Item8' style ='padding-left: 10px'><img src='$select6_Item8image' title='$select6_Item8' class='img-thumbnail'></img></td>
      <td name='select6_Item9' style ='padding-left: 10px'><img src='$select6_Item9image' title='$select6_Item9' class='img-thumbnail'></img></td>
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select6_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select6_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 7</th>
      <td name='select7_Team' style ='padding-left: 10px'>$select7_Team</td>
      <td name='select7_ID' style ='padding-left: 10px'>$select7_ID</td>
      <td name='select7_Hero' style ='padding-left: 10px'><img src='$select7_HeroImage' title='$select7_Hero' ></td>
      <td name='select7_Kills' style ='padding-left: 10px'>$select7_Kills</td>
      <td name='select7_Deaths' style ='padding-left: 10px'>$select7_Deaths</td>
      <td name='select7_Assists' style ='padding-left: 10px'>$select7_Assists</td>
      <td name='select7_GPM' style ='padding-left: 10px'>$select7_GPM</td>
      <td name='select7_XPM' style ='padding-left: 10px'>$select7_XPM</td>
      <td name='select7_Item1' style ='padding-left: 10px'><img src='$select7_Item1image' title='$select7_Item1' class='img-thumbnail'></td>
      <td name='select7_Item2' style ='padding-left: 10px'><img src='$select7_Item2image' title='$select7_Item2' class='img-thumbnail'></img></td>
      <td name='select7_Item3' style ='padding-left: 10px'><img src='$select7_Item3image' title='$select7_Item3' class='img-thumbnail'></img></td>
      <td name='select7_Item4' style ='padding-left: 10px'><img src='$select7_Item4image' title='$select7_Item4' class='img-thumbnail'></img></td>
      <td name='select7_Item5' style ='padding-left: 10px'><img src='$select7_Item5image' title='$select7_Item5' class='img-thumbnail'></img></td>
      <td name='select7_Item6' style ='padding-left: 10px'><img src='$select7_Item6image' title='$select7_Item6' class='img-thumbnail'></img></td>
      <td name='select7_Item7' style ='padding-left: 10px'><img src='$select7_Item7image' title='$select7_Item7' class='img-thumbnail'></img></td>
      <td name='select7_Item8' style ='padding-left: 10px'><img src='$select7_Item8image' title='$select7_Item8' class='img-thumbnail'></img></td>
      <td name='select7_Item9' style ='padding-left: 10px'><img src='$select7_Item9image' title='$select7_Item9' class='img-thumbnail'></img></td>
       <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select7_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select7_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 8</th>
     <td name='select8_Team' style ='padding-left: 10px'>$select8_Team</td>
      <td name='select8_ID' style ='padding-left: 10px'>$select8_ID</td>
      <td name='select8_Hero' style ='padding-left: 10px'><img src='$select8_HeroImage' title='$select8_Hero' ></td>
      <td name='select8_Kills' style ='padding-left: 10px'>$select8_Kills</td>
      <td name='select8_Deaths' style ='padding-left: 10px'>$select8_Deaths</td>
      <td name='select8_Assists' style ='padding-left: 10px'>$select8_Assists</td>
      <td name='select8_GPM' style ='padding-left: 10px'>$select8_GPM</td>
      <td name='select8_XPM' style ='padding-left: 10px'>$select8_XPM</td>
      <td name='select8_Item1' style ='padding-left: 10px'><img src='$select8_Item1image' title='$select8_Item1' class='img-thumbnail'></td>
      <td name='select8_Item2' style ='padding-left: 10px'><img src='$select8_Item2image' title='$select8_Item2' class='img-thumbnail'></img></td>
      <td name='select8_Item3' style ='padding-left: 10px'><img src='$select8_Item3image' title='$select8_Item3' class='img-thumbnail'></img></td>
      <td name='select8_Item4' style ='padding-left: 10px'><img src='$select8_Item4image' title='$select8_Item4' class='img-thumbnail'></img></td>
      <td name='select8_Item5' style ='padding-left: 10px'><img src='$select8_Item5image' title='$select8_Item5' class='img-thumbnail'></img></td>
      <td name='select8_Item6' style ='padding-left: 10px'><img src='$select8_Item6image' title='$select8_Item6' class='img-thumbnail'></img></td>
      <td name='select8_Item7' style ='padding-left: 10px'><img src='$select8_Item7image' title='$select8_Item7' class='img-thumbnail'></img></td>
      <td name='select8_Item8' style ='padding-left: 10px'><img src='$select8_Item8image' title='$select8_Item8' class='img-thumbnail'></img></td>
      <td name='select8_Item9' style ='padding-left: 10px'><img src='$select8_Item9image' title='$select8_Item9' class='img-thumbnail'></img></td>
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select8_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select8_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 9</th>
         
     <td name='select9_Team' style ='padding-left: 10px'>$select9_Team</td>
      <td name='select9_ID' style ='padding-left: 10px'>$select9_ID</td>
      <td name='select9_Hero' style ='padding-left: 10px'><img src='$select9_HeroImage' title='$select9_Hero' ></td>
      <td name='select9_Kills' style ='padding-left: 10px'>$select9_Kills</td>
      <td name='select9_Deaths' style ='padding-left: 10px'>$select9_Deaths</td>
      <td name='select9_Assists' style ='padding-left: 10px'>$select9_Assists</td>
      <td name='select9_GPM' style ='padding-left: 10px'>$select9_GPM</td>
      <td name='select9_XPM' style ='padding-left: 10px'>$select9_XPM</td>
      <td name='select9_Item1' style ='padding-left: 10px'><img src='$select9_Item1image' title='$select9_Item1' class='img-thumbnail'></td>
      <td name='select9_Item2' style ='padding-left: 10px'><img src='$select9_Item2image' title='$select9_Item2' class='img-thumbnail'></img></td>
      <td name='select9_Item3' style ='padding-left: 10px'><img src='$select9_Item3image' title='$select9_Item3' class='img-thumbnail'></img></td>
      <td name='select9_Item4' style ='padding-left: 10px'><img src='$select9_Item4image' title='$select9_Item4' class='img-thumbnail'></img></td>
      <td name='select9_Item5' style ='padding-left: 10px'><img src='$select9_Item5image' title='$select9_Item5' class='img-thumbnail'></img></td>
      <td name='select9_Item6' style ='padding-left: 10px'><img src='$select9_Item6image' title='$select9_Item6' class='img-thumbnail'></img></td>
      <td name='select9_Item7' style ='padding-left: 10px'><img src='$select9_Item7image' title='$select9_Item7' class='img-thumbnail'></img></td>
      <td name='select9_Item8' style ='padding-left: 10px'><img src='$select9_Item8image' title='$select9_Item8' class='img-thumbnail'></img></td>
      <td name='select9_Item9' style ='padding-left: 10px'><img src='$select9_Item9image' title='$select9_Item9' class='img-thumbnail'></img></td>
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select9_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select9_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "<tr>
      <th scope='row'>Player 10</th>
       
      <td name='select10_Team' style ='padding-left: 10px'>$select10_Team</td>
      <td name='select10_ID' style ='padding-left: 10px'>$select10_ID</td>
      <td name='select10_Hero' style ='padding-left: 10px'><img src='$select10_HeroImage' title='$select10_Hero' ></td>
      <td name='select10_Kills' style ='padding-left: 10px'>$select10_Kills</td>
      <td name='select10_Deaths' style ='padding-left: 10px'>$select10_Deaths</td>
      <td name='select10_Assists' style ='padding-left: 10px'>$select10_Assists</td>
      <td name='select10_GPM' style ='padding-left: 10px'>$select10_GPM</td>
      <td name='select10_XPM' style ='padding-left: 10px'>$select10_XPM</td>
      <td name='select10_Item1' style ='padding-left: 10px'><img src='$select10_Item1image' title='$select10_Item1' ></td>
      <td name='select10_Item2' style ='padding-left: 10px'><img src='$select10_Item2image' title='$select10_Item2' ></img></td>
      <td name='select10_Item3' style ='padding-left: 10px'><img src='$select10_Item3image' title='$select10_Item3' ></img></td>
      <td name='select10_Item4' style ='padding-left: 10px'><img src='$select10_Item4image' title='$select10_Item4' ></img></td>
      <td name='select10_Item5' style ='padding-left: 10px'><img src='$select10_Item5image' title='$select10_Item5' ></img></td>
      <td name='select10_Item6' style ='padding-left: 10px'><img src='$select10_Item6image' title='$select10_Item6' ></img></td>
      <td name='select10_Item7' style ='padding-left: 10px'><img src='$select10_Item7image' title='$select10_Item7' ></img></td>
      <td name='select10_Item8' style ='padding-left: 10px'><img src='$select10_Item8image' title='$select10_Item8'></img></td>
      <td name='select10_Item9' style ='padding-left: 10px'><img src='$select10_Item9image' title='$select10_Item9' ></img></td>
        <td style ='margin-left: 5px'><form method ='get' action='Play_home_page.php'>
        <button type='submit' name='playerSaveButton' value=$select10_ID.&.$match_id class='btn btn-primary'>Save Player</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='heroSaveButton' value=$select10_Hero.&.$match_id class='btn btn-primary'>Save Hero</button></form></td>
        <td style ='margin-left: 5px'><form  method ='get' action='Play_home_page.php'>
        <button type='submit' name='matchSaveButton' value=$match_id.&.$match_id class='btn btn-primary'>Save Match</button></form></td>
    </tr>";
    
print "</tbody> </table>";
    
//  


?> 

    </body>
</html>