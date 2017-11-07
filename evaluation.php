

<?php
  include 'login/session.php';
?>

<?php require_once('Connections/MyConnect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 8) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string(dbconnect(),$theValue) : mysqli_escape_string(dbconnect(),$theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$currentPage = $_SERVER["PHP_SELF"];

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

    /*-- Reccordset Student_Info [S]--*/
    if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  
  


    $insertSQL_com = sprintf("INSERT INTO committee (com_id, com_name, com_evai, com_evaii, com_evaiii, com_evaiv, com_comment, fkcon_id) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['com_id'], "int"),
                       GetSQLValueString($_POST['com_name'], "text"),
                       GetSQLValueString($_POST['com_evai'], "int"),
                       GetSQLValueString($_POST['com_evaii'], "int"),
                       GetSQLValueString($_POST['com_evaiii'], "int"),
                       GetSQLValueString($_POST['com_evaiv'], "int"),
                       GetSQLValueString($_POST['com_comment'], "text"),
                       GetSQLValueString($_POST['fkcon_id'], "int"));





             

  
      mysqli_select_db($MyConnect, $database_MyConnect);
     
      $Result1_com = mysqli_query($MyConnect, $insertSQL_com) or die(mysqli_error($MyConnect));

    
      $insertGoTo = "index.php";
      if (isset($_SERVER['QUERY_STRING'])) {
      $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
      $insertGoTo .= $_SERVER['QUERY_STRING'];
      }
      header(sprintf("Location: %s", $insertGoTo));
    }


    $maxRows_studentSet_all = 18;
    $pageNum_studentSet_all = 0;
    if (isset($_GET['pageNum_studentSet_all'])) {
      $pageNum_studentSet_all = $_GET['pageNum_studentSet_all'];
    }
    $startRow_studentSet_all = $pageNum_studentSet_all * $maxRows_studentSet_all;
    
    mysqli_select_db($MyConnect, $database_MyConnect);


          $query_spvSet = "SELECT * FROM committee
            ORDER BY com_id DESC";
          $spvSet = mysqli_query($MyConnect, $query_spvSet) or die(mysqli_error());
          $row_spvSet = mysqli_fetch_assoc($spvSet);
          $totalRows_spvSet = mysqli_num_rows($spvSet);

      $query_studentSet_all = "SELECT * FROM contestant
      INNER JOIN type_contest ON type_contest.typ_id = contestant.type_contest_typ_id";
    $query_limit_studentSet_all = sprintf("%s LIMIT %d, %d", $query_studentSet_all, $startRow_studentSet_all, $maxRows_studentSet_all);
    $studentSet_all = mysqli_query($MyConnect, $query_limit_studentSet_all) or die(mysqli_error($MyConnect));
    $row_studentSet = mysqli_fetch_assoc($studentSet_all);
    
    if (isset($_GET['totalRows_studentSet_onProcess'])) {
      $totalRows_studentSet_onProcess = $_GET['totalRows_studentSet_onProcess'];
    } else {
      $all_studentSet = mysqli_query(dbconnect(), $query_studentSet_all);
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

    


mysqli_select_db($MyConnect, $database_MyConnect);
/*
$query_pvnSet = "SELECT * FROM province";
$pvnSet = mysqli_query($MyConnect, $query_pvnSet) or die(mysqli_error());
$row_pvnSet = mysqli_fetch_assoc($pvnSet);
$totalRows_pvnSet = mysqli_num_rows($pvnSet);
*/
?>


<?php


mysqli_close($MyConnect);
?>


<?php



?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>jQuery | Custom Radio Buttons Survey</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


<link rel="icon" type="image/png" href="img/logo/wd.png"/>
  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
      <link rel="stylesheet" href="css/style.css?v=1234"> 

      <link rel="stylesheet" href="css/style-msform.css"> 

  
</head>

<STYLE TYPE="TEXT/CSS"><!--
A:link  {
text-decoration:none;
}
A:visited {
text-decoration:none;
}
//--></STYLE>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}
</style>


<!--footer-->
<style type="text/css">
html, body { 
   height: 100%; /* ให้ html และ body สูงเต็มจอภาพไว้ก่อน */
   margin: 0;
   padding: 0;
}
.wrapper {
   display: block;
   min-height: 100%; /* real browsers */
   height: auto !important; /* real browsers */
   height: 100%; /* IE6 bug */
   margin-bottom: -20px; /* กำหนด margin-bottom ให้ติดลบเท่ากับความสูงของ footer */
}
.footer {
   height: 20px; /* ความสูงของ footer */
   display: block;
   text-align: center;
}
</style>


<body>


        <?php 
            require_once 'web_element/nav-top.php';
        ?>
        <br>
        <br>
        

<div class="w3-container">
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="msform" enctype="multipart/form-data">    


          <div class="rb-box">
<br>
<br>

          <input type="hidden" name="com_id" value="" size="32" /><br>
          <div align="left">
              <label class="w3-text-white" for="titleSelect"> Committee's Name : </label>
          </div>
          <input type="text" name="com_name" value="" size="32" />


          <input type="hidden" name="fkcon_id" value="<?php echo $_GET['con_id']; ?>" size="32" />








          <!-- Radio Button Module -->

          <div align="left"><br>
            <h2 class="w3-text-green" style="text-shadow:1px 1px 0 #e2c0c0">Make it Happen</h2>
          <h3><B>1. Problem Definition </B>: Does the team have a clear and deep understanding of the problem? Do they understand the environment that surrounds the problem? 
        
         </h3></div>
          <div id="rb-1" class="rb">

            <div class="rb-tab">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evai" type="radio" value="1">
                    <label for="option1"><h3>1</h3></label>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evai" type="radio" value="2">
                    <label for="option1"><h3>2</h3></label>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evai" type="radio" value="3">
                    <label for="option1"><h3>3</h3></label>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evai" type="radio" value="4">
                    <label for="option1"><h3>4</h3></label>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evai" type="radio" value="5">
                    <label for="option1"><h3>5</h3></label>
              </div>
            </div>
            
          </div>

          <!-- Radio Button Module -->

          <div align="left"><br>
            <h2 class="w3-text-teal" style="text-shadow:1px 1px 0 #444">Think Big</h2>
          <h3>2. Innovation: Has the team clearly defined a solution, supporting customers? Is their solution distinctive or fundamentally different from existing approaches? Could their solution viably be implemented and sustained in the real world? 
        
        </h3></div>
          <div id="rb-2" class="rb">


            <div class="rb-tab">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaii" type="radio" value="1">
                    <label for="option1"><h3>1</h3></label>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaii" type="radio" value="2">
                    <label for="option1"><h3>2</h3></label>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaii" type="radio" value="3">
                    <label for="option1"><h3>3</h3></label>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaii" type="radio" value="4">
                    <label for="option1"><h3>4</h3></label>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaii" type="radio" value="5">
                    <label for="option1"><h3>5</h3></label>
              </div>
            </div>


          </div>

          <!-- Radio Button Module -->

          <div align="left"><br>
            <h2 class="w3-text-green" style="text-shadow:1px 1px 0 #444">Make it Happen</h2>
          <h3>3. Sustainability: Has the team developed a plan for the sustainability of their innovation? (For this competition, sustainability means the ability to continually generate benefit to sustain the operations of the team's innovation.)
        
        </h3></div>
          <div id="rb-3" class="rb">


            <div class="rb-tab">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiii" type="radio" value="1">
                    <label for="option1"><h3>1</h3></label>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiii" type="radio" value="2">
                    <label for="option1"><h3>2</h3></label>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiii" type="radio" value="3">
                    <label for="option1"><h3>3</h3></label>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiii" type="radio" value="4">
                    <label for="option1"><h3>4</h3></label>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiii" type="radio" value="5">
                    <label for="option1"><h3>5</h3></label>
              </div>
            </div>


          </div>

          <!-- Radio Button Module -->

          <div align="left"><br>
            <h2 class="w3-text-orange" style="text-shadow:1px 1px 0 #444">Do it Together</h2>
          <h3>4. The Team: Does the team include the diversity of expertise necessary to accomplish their goals? Does the team comprise the right people to do the job? Was the presentation professional and well-practiced, to stakeholders? 
        
        </h3></div>
          <div id="rb-4" class="rb">


            <div class="rb-tab">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiv" type="radio" value="1">
                    <label for="option1"><h3>1</h3></label>
              </div>
            </div><div class="rb-tab" data-value="2">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiv" type="radio" value="2">
                    <label for="option1"><h3>2</h3></label>
              </div>
            </div><div class="rb-tab" data-value="3">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiv" type="radio" value="3">
                    <label for="option1"><h3>3</h3></label>
              </div>
            </div><div class="rb-tab" data-value="4">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiv" type="radio" value="4">
                    <label for="option1"><h3>4</h3></label>
              </div>
            </div><div class="rb-tab" data-value="5">
              <div class="rb-spot">
                    <input class="rb-tab rb-spot rb-txt" id="option1" name="com_evaiv" type="radio" value="5">
                    <label for="option1"><h3>5</h3></label>
              </div>
            </div>


          </div>


          <div align="left">
            <br>
              <label class="w3-text-white" for="comment"><h3> Comment : </h3></label>
          </div>
          <textarea type="text" name="com_comment" value="" size="32"></textarea> 


  <!-- Button -->

  <div class="button-box">
    <!--<button class="button trigger">Submit!</button>-->

        <button type="submit" name="submit" class="action-button button trigger" value="Submit" >Submit!</button>
  </div>
        <input type="hidden" name="MM_insert" class="submit action-button" value="msform" />
        <input type="hidden" name="MM_insert" value="form1" />
    </form>


<br>
<br>




</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script >
      var survey = []; //Bidimensional array: [ [1,3], [2,4] ]

//Switcher function:
$(".rb-tab").click(function(){
  //Spot switcher:
  $(this).parent().find(".rb-tab").removeClass("rb-tab-active");
  $(this).addClass("rb-tab-active");
});

//Save data:
$(".trigger").click(function(){
  //Empty array:
  survey = [];
  //Push data:
  for (i=1; i<=$(".rb").length; i++) {
    var rb = "rb" + i;
    var rbValue = parseInt($("#rb-"+i).find(".rb-tab-active").attr("data-value"));
    //Bidimensional array push:
    survey.push([i, rbValue]); //Bidimensional array: [ [1,3], [2,4] ]
  };
  //Debug:
  debug();
});

//Debug:
function debug(){
  var debug = "";
  for (i=0; i<survey.length; i++) {
    debug += "Nº " + survey[i][0] + " = " + survey[i][1] + "\n";
  };
  alert(debug);
};
      

    </script>




</body>
</html>
