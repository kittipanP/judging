
<?php require_once('../Connections/MyConnect.php'); ?>

<?php
    $maxRows_studentSet_all = 18;
    $pageNum_studentSet_all = 0;
    if (isset($_GET['pageNum_studentSet_all'])) {
      $pageNum_studentSet_all = $_GET['pageNum_studentSet_all'];
    }
    $startRow_studentSet_all = $pageNum_studentSet_all * $maxRows_studentSet_all;
    
    mysqli_select_db($MyConnect, $database_MyConnect);
    $query_advHHDi = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 1";
    $advHHDiSet = mysqli_query($MyConnect, $query_advHHDi) or die(mysqli_error());
    $row_advHHDi = mysqli_fetch_assoc($advHHDiSet);
    $totalRows_advHHDiSet = mysqli_num_rows($advHHDiSet);

    $query_advHDDii = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 2";
    $advHDDii = mysqli_query($MyConnect, $query_advHDDii) or die(mysqli_error());
    $row_advHDDii = mysqli_fetch_assoc($advHDDii);
    $totalRows_advHDDii = mysqli_num_rows($advHDDii);


    $query_advTHOi = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 3";
    $advTHOi = mysqli_query($MyConnect, $query_advTHOi) or die(mysqli_error());
    $row_advTHOi = mysqli_fetch_assoc($advTHOi);
    $totalRows_advTHOi = mysqli_num_rows($advTHOi);


    $query_advTHOii = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 4";
    $advTHOii = mysqli_query($MyConnect, $query_advTHOii) or die(mysqli_error());
    $row_advTHOii = mysqli_fetch_assoc($advTHOii);
    $totalRows_advTHOii = mysqli_num_rows($advTHOii);


    $query_advPRBi = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 5";
    $advPRBi = mysqli_query($MyConnect, $query_advPRBi) or die(mysqli_error());
    $row_advPRBi = mysqli_fetch_assoc($advPRBi);
    $totalRows_advPRBi = mysqli_num_rows($advPRBi);


    $query_advPRBii = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 6";
    $advPRBii = mysqli_query($MyConnect, $query_advPRBii) or die(mysqli_error());
    $row_advPRBii = mysqli_fetch_assoc($advPRBii);
    $totalRows_advPRBii = mysqli_num_rows($advPRBii);


    $query_QualityEngHDD = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 7";
    $QualityEngHDD = mysqli_query($MyConnect, $query_QualityEngHDD) or die(mysqli_error());
    $row_QualityEngHDD = mysqli_fetch_assoc($QualityEngHDD);
    $totalRows_QualityEngHDD = mysqli_num_rows($QualityEngHDD);


    $query_QualityEngTHO = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 8";
    $QualityEngTHO = mysqli_query($MyConnect, $query_QualityEngTHO) or die(mysqli_error());
    $row_QualityEngTHO = mysqli_fetch_assoc($QualityEngTHO);
    $totalRows_QualityEngTHO = mysqli_num_rows($QualityEngTHO);


    $query_QualityEngPRB = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 9";
    $QualityEngPRB = mysqli_query($MyConnect, $query_QualityEngPRB) or die(mysqli_error());
    $row_QualityEngPRB = mysqli_fetch_assoc($QualityEngPRB);
    $totalRows_QualityEngPRB = mysqli_num_rows($QualityEngPRB);


    $query_QualityDLTechHDD = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 10";
    $QualityDLTechHDD = mysqli_query($MyConnect, $query_QualityDLTechHDD) or die(mysqli_error());
    $row_QualityDLTechHDD = mysqli_fetch_assoc($QualityDLTechHDD);
    $totalRows_QualityDLTechHDD = mysqli_num_rows($QualityDLTechHDD);


    $query_QualityDLTechTHO = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 11";
    $QualityDLTechTHO = mysqli_query($MyConnect, $query_QualityDLTechTHO) or die(mysqli_error());
    $row_QualityDLTechTHO = mysqli_fetch_assoc($QualityDLTechTHO);
    $totalRows_QualityDLTechTHO = mysqli_num_rows($QualityDLTechTHO);


    $query_QualityDLTechPRB = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 12";
    $QualityDLTechPRB = mysqli_query($MyConnect, $query_QualityDLTechPRB) or die(mysqli_error());
    $row_QualityDLTechPRB = mysqli_fetch_assoc($QualityDLTechPRB);
    $totalRows_QualityDLTechPRB = mysqli_num_rows($QualityDLTechPRB);


    $query_OpsEngHDD = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 13";
    $OpsEngHDD = mysqli_query($MyConnect, $query_OpsEngHDD) or die(mysqli_error());
    $row_OpsEngHDD = mysqli_fetch_assoc($OpsEngHDD);
    $totalRows_OpsEngHDD = mysqli_num_rows($OpsEngHDD);


    $query_OpsEngTHO = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 14";
    $OpsEngTHO = mysqli_query($MyConnect, $query_OpsEngTHO) or die(mysqli_error());
    $row_OpsEngTHO = mysqli_fetch_assoc($OpsEngTHO);
    $totalRows_OpsEngTHO = mysqli_num_rows($OpsEngTHO);


    $query_OpsEngPRB = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 15";
    $OpsEngPRB = mysqli_query($MyConnect, $query_OpsEngPRB) or die(mysqli_error());
    $row_OpsEngPRB = mysqli_fetch_assoc($OpsEngPRB);
    $totalRows_OpsEngPRB = mysqli_num_rows($OpsEngPRB);


    $query_OpsDLTechHDD = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 16";
    $OpsDLTechHDD = mysqli_query($MyConnect, $query_OpsDLTechHDD) or die(mysqli_error());
    $row_OpsDLTechHDD = mysqli_fetch_assoc($OpsDLTechHDD);
    $totalRows_OpsDLTechHDD = mysqli_num_rows($OpsDLTechHDD);


    $query_OpsDLTechTHO = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 17";
    $OpsDLTechTHO = mysqli_query($MyConnect, $query_OpsDLTechTHO) or die(mysqli_error());
    $row_OpsDLTechTHO = mysqli_fetch_assoc($OpsDLTechTHO);
    $totalRows_OpsDLTechTHO = mysqli_num_rows($OpsDLTechTHO);


    $query_OpsDLTechPRB = "SELECT SUM(com_evai), SUM(com_evaii), SUM(com_evaiii), SUM(com_evaiv)  FROM committee
      WHERE  fkcon_id = 18";
    $OpsDLTechPRB = mysqli_query($MyConnect, $query_OpsDLTechPRB) or die(mysqli_error());
    $row_OpsDLTechPRB = mysqli_fetch_assoc($OpsDLTechPRB);
    $totalRows_OpsDLTechPRB = mysqli_num_rows($OpsDLTechPRB);



    
    if (isset($_GET['totalRows_studentSet_onProcess'])) {
      $totalRows_studentSet_onProcess = $_GET['totalRows_studentSet_onProcess'];
    } else {
      $all_studentSet = mysqli_query(dbconnect(), $query_advHHDi);
      $totalRows_studentSet_onProcess = mysqli_num_rows($all_studentSet);
    }
    $totalPages_studentSet = ceil($totalRows_studentSet_onProcess/$maxRows_studentSet_all)-1;
    
    $queryString_studentSet = "";
    if (!empty($_SERVER['QUERY_STRING'])) {
      $params = explode("&", $_SERVER['QUERY_STRING']);
      $newParams = array();
      foreach ($params as $param) {
      if (stristr($param, "pageNum_studentSet_all") == false && 
        stristr($param, "totalRows_studentSet_onProcess") == false) {
        array_push($newParams, $param);
      }
      }
      if (count($newParams) != 0) {
      $queryString_studentSet = "&" . htmlentities(implode("&", $newParams));
      }
    }
    $queryString_studentSet = sprintf("&totalRows_studentSet_onProcess=%d%s", $totalRows_studentSet_onProcess, $queryString_studentSet);

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>3D Score Result</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


<link rel="icon" type="image/png" href="img/logo/wd.png"/>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<STYLE TYPE="TEXT/CSS"><!--
A:link  {
text-decoration:none;
}
A:visited {
text-decoration:none;
}
//--></STYLE>
<style type="text/css">
  body {
  /*font-family: sans-serif; */
  /*background: #42426b; */
  /*background: url(../img/bg/bgii.jpg);*/
  /*background-image: linear-gradient(-45deg, #8067B7, #EC87C0); */
  /*color: rgba(255,255,255,.5); */
}

</style>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Lato", sans-serif;}
header{ background: url(../img/bg/brunch.png); } 

body, html {
    height: 500px;
    color: #0000;
    line-height: 1.8;

  background: url(../img/bg/bgi.jpg); 
}

</style>


<body>


        <?php 
            require_once '../web_element/nav-topii.php';
        ?>
      <!-- Header -->
      <header class="w3-theme w3-padding w3-opacity-min" id="myHeader"> 

        <!-- Navigation II--> 
       <div class="w3-left">      
        <span class="w3-xxlarge" onclick="w3_open()">&#9776;</span>  
        </div>   
     
        <!--<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-opennav"></i> -->
<!--        <div class="w3-left">
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Innovation Competition ..            </h4>
            <h1 class="w3-xxxlarge w3-animate-bottom " style="text-shadow:3px 2px 0 #444">&nbsp;&nbsp;&nbsp;Score Result</h1>
            
        </div> --><br><br>
        <div class="w3-row">
  <div class="w3-third w3-center">
    <h5 style="text-shadow:3px 1px 0 #444" >Advance Process Technology</h5> 
          
  </div>
  <div class="w3-third w3-center">
    <h5 style="text-shadow:3px 1px 0 #444" >Quality</h5>  
  </div>
  <div class="w3-third w3-center">
    <h5 style="text-shadow:3px 1px 0 #444" >Operation/Yield/People</h5> 
  </div>
</div>
      </header>

<div class="w3-row">
<div class="w3-container ">


<div class="w3-row">
  <div class="w3-third w3-center  " >
          <div class="w3-row " >
            <div class="w3-center w3-col.s12 w3-amber w3-hover-light-grey w3-hide-small" style="bottom:100%;opacity:0.5;width:100%">
              <p>Technician, Staff and Engineer </p>
            </div>
            
          </div>
  </div>
  <div class="w3-third w3-center">
          <div class="w3-row ">
            <div class="w3-half">
              <div class="w3-blue w3-hover-light-grey w3-hide-small" style="bottom:100%;opacity:0.5;width:100%">
                <p>Engineer </p>
              </div>
            </div>
            <div class="w3-half ">
              <div class="w3-purple w3-hover-light-grey w3-hide-small" style="bottom:100%;opacity:0.5;width:100%">
                <p>DL and Technician</p>
              </div>
              </div>
          </div>
  </div>
  <div class="w3-third w3-center"> 
          <div class="w3-row ">
            <div class="w3-half">
              <div class="w3-grey w3-hover-light-grey w3-hide-small" style="bottom:100%;opacity:0.5;width:100%">
                <p>Engineer</p>
              </div>
            </div>
            <div class="w3-half ">
              <div class="w3-black w3-hover-light-grey w3-hide-small" style="bottom:100%;opacity:0.5;width:100%">
                <p>DL and Technician</p>
            </div>
            </div>
          </div>
  </div>
</div>
<br>

</div>


    <div class="w3-bottombar ">
    </div>


  <script src="js/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>


    
                        <?php

                              $result_advHHDi = $row_advHHDi['SUM(com_evai)']+$row_advHHDi['SUM(com_evaii)']+$row_advHHDi['SUM(com_evaiii)']+$row_advHHDi['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_advHHDi = '$result_advHHDi';";
                              echo '</script>';


                              $result_advHHDii = $row_advHDDii['SUM(com_evai)']+$row_advHDDii['SUM(com_evaii)']+$row_advHDDii['SUM(com_evaiii)']+$row_advHDDii['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_advHHDii = '$result_advHHDii';";
                              echo '</script>';

                              $result_advTHOi = $row_advTHOi['SUM(com_evai)']+$row_advTHOi['SUM(com_evaii)']+$row_advTHOi['SUM(com_evaiii)']+$row_advTHOi['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_advTHOi = '$result_advTHOi';";
                              echo '</script>';

                              $result_advTHOii = $row_advTHOii['SUM(com_evai)']+$row_advTHOii['SUM(com_evaii)']+$row_advTHOii['SUM(com_evaiii)']+$row_advTHOii['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_advTHOii = '$result_advTHOii';";
                              echo '</script>';

                              $result_advPRBi = $row_advPRBi['SUM(com_evai)']+$row_advPRBi['SUM(com_evaii)']+$row_advPRBi['SUM(com_evaiii)']+$row_advPRBi['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_advPRBi = '$result_advPRBi';";
                              echo '</script>';

                              $result_advPRBii = $row_advPRBii['SUM(com_evai)']+$row_advPRBii['SUM(com_evaii)']+$row_advPRBii['SUM(com_evaiii)']+$row_advPRBii['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_advPRBii = '$result_advPRBii';";
                              echo '</script>';

                              $result_QualityEngHDD = $row_QualityEngHDD['SUM(com_evai)']+$row_QualityEngHDD['SUM(com_evaii)']+$row_QualityEngHDD['SUM(com_evaiii)']+$row_QualityEngHDD['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_QualityEngHDD = '$result_QualityEngHDD';";
                              echo '</script>';

                              $result_QualityEngTHO = $row_QualityEngTHO['SUM(com_evai)']+$row_QualityEngTHO['SUM(com_evaii)']+$row_QualityEngTHO['SUM(com_evaiii)']+$row_QualityEngTHO['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_QualityEngTHO = '$result_QualityEngTHO';";
                              echo '</script>';

                              $result_QualityEngPRB = $row_QualityEngPRB['SUM(com_evai)']+$row_QualityEngPRB['SUM(com_evaii)']+$row_QualityEngPRB['SUM(com_evaiii)']+$row_QualityEngPRB['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_QualityEngPRB = '$result_QualityEngPRB';";
                              echo '</script>';

                              $QualityDLTechHDD = $row_QualityDLTechHDD['SUM(com_evai)']+$row_QualityDLTechHDD['SUM(com_evaii)']+$row_QualityDLTechHDD['SUM(com_evaiii)']+$row_QualityDLTechHDD['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var QualityDLTechHDD = '$QualityDLTechHDD';";
                              echo '</script>';

                              $QualityDLTechTHO = $row_QualityDLTechTHO['SUM(com_evai)']+$row_QualityDLTechTHO['SUM(com_evaii)']+$row_QualityDLTechTHO['SUM(com_evaiii)']+$row_QualityDLTechTHO['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var QualityDLTechTHO = '$QualityDLTechTHO';";
                              echo '</script>';

                              $QualityDLTechPRB = $row_QualityDLTechPRB['SUM(com_evai)']+$row_QualityDLTechPRB['SUM(com_evaii)']+$row_QualityDLTechPRB['SUM(com_evaiii)']+$row_QualityDLTechPRB['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var QualityDLTechPRB = '$QualityDLTechPRB';";
                              echo '</script>';

                              $result_OpsEngHDD = $row_OpsEngHDD['SUM(com_evai)']+$row_OpsEngHDD['SUM(com_evaii)']+$row_OpsEngHDD['SUM(com_evaiii)']+$row_OpsEngHDD['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_OpsEngHDD = '$result_OpsEngHDD';";
                              echo '</script>';

                              $result_OpsEngTHO = $row_OpsEngTHO['SUM(com_evai)']+$row_OpsEngTHO['SUM(com_evaii)']+$row_OpsEngTHO['SUM(com_evaiii)']+$row_OpsEngTHO['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_OpsEngTHO = '$result_OpsEngTHO';";
                              echo '</script>';

                              $result_OpsEngPRB = $row_OpsEngPRB['SUM(com_evai)']+$row_OpsEngPRB['SUM(com_evaii)']+$row_OpsEngPRB['SUM(com_evaiii)']+$row_OpsEngPRB['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_OpsEngPRB = '$result_OpsEngPRB';";
                              echo '</script>';

                              $result_OpsDLTechHDD = $row_OpsDLTechHDD['SUM(com_evai)']+$row_OpsDLTechHDD['SUM(com_evaii)']+$row_OpsDLTechHDD['SUM(com_evaiii)']+$row_OpsDLTechHDD['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_OpsDLTechHDD = '$result_OpsDLTechHDD';";
                              echo '</script>';

                              $result_OpsDLTechTHO = $row_OpsDLTechTHO['SUM(com_evai)']+$row_OpsDLTechTHO['SUM(com_evaii)']+$row_OpsDLTechTHO['SUM(com_evaiii)']+$row_OpsDLTechTHO['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_OpsDLTechTHO = '$result_OpsDLTechTHO';";
                              echo '</script>';

                              $result_OpsDLTechPRB = $row_OpsDLTechPRB['SUM(com_evai)']+$row_OpsDLTechPRB['SUM(com_evaii)']+$row_OpsDLTechPRB['SUM(com_evaiii)']+$row_OpsDLTechPRB['SUM(com_evaiv)'];
                              echo '<script type="text/javascript">';
                              echo "var result_OpsDLTechPRB = '$result_OpsDLTechPRB';";
                              echo '</script>';

                        ?>


<div id="chartdiv"></div>
<div class="container-fluid">
  <div class="row text-center" style="overflow:hidden;">


<br>
<br>
    <div class="col-sm-3" style="float: none !important;display: inline-block;">
      <label class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Top Radius:&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="chart-input" data-property="topRadius" type="range" min="0" max="1.5" value="1" step="0.01" />
    </div>

    <div class="col-sm-3" style="float: none !important;display: inline-block;">
      <label class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Angle:&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="chart-input" data-property="angle" type="range" min="0" max="89" value="30" step="1" />
    </div>

    <div class="col-sm-3" style="float: none !important;display: inline-block;">
      <label class="text-left">&nbsp;&nbsp;&nbsp;&nbsp;Depth:&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input class="chart-input" data-property="depth3D" type="range" min="1" max="120" value="40" step="1" />
    </div>
  </div>
</div>


</div>
<br>
<br> 

<footer class = "footer">
    <div class="w3-container w3-theme-d3 w3-padding-16 ">
    <h5>Footer</h5>
    </div>
    <div class="w3-container w3-theme-d5  " >
       <p>By <a href="#" target="_blank">WD Trainee Team</a></p>
    </div>
</footer>



  <script src='https://code.jquery.com/jquery-1.11.2.min.js'></script>

    <script  src="js/index.js?v=22"></script>


</body>
</html>
