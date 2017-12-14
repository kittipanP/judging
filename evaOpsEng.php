

<?php
  include 'logon/session.php';
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
    if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  

  $colname_Recordset1_stu = "-1";

  $colname_Recordset1_stu = "-1";
  if (isset($_GET['con_id'])) {
  $prm = $_GET['con_id'];
  $prmii = $_GET['con_id'];
  }
  

  $judger = $_SESSION['login_id'];

  $updateSQL_com = sprintf("UPDATE contestant   
    INNER JOIN type_contest ON type_contest.typ_id = contestant.type_contest_typ_id
    INNER JOIN committee ON committee.fkcon_id = contestant.con_id
    SET com_evai=%s, com_evaii=%s, com_evaiii=%s, com_evaiv=%s, com_evav=%s, com_evavi=%s, com_evavii=%s, com_comment=%s
    WHERE (con_id = $prm) AND (contestant.type_contest_typ_id = 4) AND (committee.judger = $judger)" ,
                       GetSQLValueString($_POST['com_evai'], "int"),
                       GetSQLValueString($_POST['com_evaii'], "int"),
                       GetSQLValueString($_POST['com_evaiii'], "int"),
                       GetSQLValueString($_POST['com_evaiv'], "int"),
                       GetSQLValueString($_POST['com_evav'], "int"),
                       GetSQLValueString($_POST['com_evavi'], "int"),
                       GetSQLValueString($_POST['com_evavii'], "int"),
                       GetSQLValueString($_POST['com_comment'], "text"));

  
      mysqli_select_db($MyConnect, $database_MyConnect);
     
      $Result1_com = mysqli_query($MyConnect, $updateSQL_com) or die(mysqli_error($MyConnect));

      $updateGoTo = "projectOpsEng.php";
      if (isset($_SERVER['QUERY_STRING'])) {
        $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
        $updateGoTo .= $_SERVER['QUERY_STRING'];
      }
      header(sprintf("Location: %s", $updateGoTo));
    }

$colname_Recordset1_stu = "-1";
if (isset($_GET['con_id'])) {
  $colname_Recordset1_stu = $_GET['con_id'];
}
mysqli_select_db($MyConnect, $database_MyConnect); 
$query_Recordset1_stu = sprintf("SELECT * FROM contestant 
    INNER JOIN type_contest ON type_contest.typ_id = contestant.type_contest_typ_id
    INNER JOIN committee ON committee.fkcon_id = contestant.con_id WHERE con_id = %s", GetSQLValueString($colname_Recordset1_stu, "int"));
$Recordset1_stu = mysqli_query($MyConnect, $query_Recordset1_stu) or die(mysqli_error($MyConnect));
$row_Recordset1_stu = mysqli_fetch_assoc($Recordset1_stu);
$totalRows_Recordset1_stu = mysqli_num_rows($Recordset1_stu);


    

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
  <title>Thailand Innovation Bazaar</title>

<link rel="icon" type="image/png" href="img/icon/westernDigital.jpg"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


<link rel="icon" type="image/png" href="img/logo/wd.png"/>
  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

      <link rel="stylesheet" href="css/style-msform.css"> 

      <!-- radio -->
      <link rel="stylesheet" href="css/radio_style.css?v=17">


  
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




<body>


        <?php 
            require_once 'web_element/nav-top.php';
        ?>
        <br>
        <br>


        

<div class="w3-container w3-margin w3-center " >

    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="msform" enctype="multipart/form-data" onSubmit="alert('Thank you for your judge.');">    

<br>
<br>


        <div class="w3-panel w3-card-4 w3-center w3-pale-green"><p align="left">Project Name: </p><h1 style="text-shadow:0px 0px 0 #444"  class="w3-text-black"><b><?php echo $row_Recordset1_stu['con_project'];?></b></h1><br></div>
        


          <input type="hidden" name="fkcon_id" value="<?php echo $_GET['con_id']; ?>" size="32" />

          <!-- Radio Button Module -->
        <div class="w3-panel w3-white">
          <div align="left">
            <h2 class="w3-text-teal" style="text-shadow:1px 1px 0 #444">Think Big</h2>
            <h3>1. Does this project demonstrate high degree of creativity?</h3>
          </div><br><br><br><br>

                    <div class="q1"><br>

          <div align="left"><h4 > 
            <i  class="fa fa-check-circle-o w3-text-teal"></i> &nbsp;Continuous</h4>
          </div>&nbsp;&nbsp;&nbsp;<!--
                    <input class="" id="rad11" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0" >
                    <label for="rad11" >&nbsp;&nbsp;0</label> -->

                    <input class="" id="rad12" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad12">&nbsp;&nbsp;1&nbsp;&nbsp;</label>

                    <input class="" id="rad13" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad13">&nbsp;&nbsp;2&nbsp;&nbsp;</label>

                    <input class="" id="rad14" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad14">&nbsp;&nbsp;3&nbsp;&nbsp;</label>

                    <input class="" id="rad15" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad15">&nbsp;&nbsp;4&nbsp;&nbsp;</label>

                    <input class="" id="rad16" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad16">&nbsp;&nbsp;5 &nbsp;&nbsp;</label>


          <div align="left">
            <h5><i  class="fa fa-check-circle-o w3-text-teal"></i> &nbsp;Breakthrough</h5>
          </div>&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;
                    <input class="" id="rad17" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='6')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="6" >
                    <label for="rad17" >&nbsp;&nbsp;6&nbsp;&nbsp;</label>

                    <input class="" id="rad18" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='7')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="7">
                    <label for="rad18">&nbsp;&nbsp;7&nbsp;&nbsp;</label>

                    <input class="" id="rad19" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='8')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="8">
                    <label for="rad19">&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;</label>

                    <input class="" id="rad110" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='9')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="9">
                    <label for="rad110">&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;</label>

                    <input class="" id="rad111" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='10')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="10">
                    <label for="rad111">&nbsp;&nbsp;10&nbsp;&nbsp;</label>
<br>

          <div align="left">
            <h5><i  class="fa fa-check-circle-o w3-text-teal"></i> &nbsp;Out of Box Changes the Fundamental</h5>
          </div>&nbsp;&nbsp;&nbsp;
                    <input class="" id="rad112" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='12')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="12" >
                    <label for="rad112" >&nbsp;&nbsp;12</label>

                    <input class="" id="rad113" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='14')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="14">
                    <label for="rad113">&nbsp;&nbsp;14</label>

                    <input class="" id="rad114" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='16')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="16">
                    <label for="rad114">&nbsp;&nbsp;16</label>

                    <input class="" id="rad115" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='18')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="18">
                    <label for="rad115">&nbsp;&nbsp;18</label>

                    <input class="" id="rad116" name="com_evai" <?php echo htmlentities(($row_Recordset1_stu['com_evai']=='20')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="20">
                    <label for="rad116">&nbsp;&nbsp;20</label>



                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
        </div>
<!--171130
          <div align="left"><br><br>
            <h3>2. Does the innovation generates high value for the company?</h3>
          </div>
                  <div class="q2"><br>
                    <input class="" id="rad21" name="com_evaii" <?php echo htmlentities(($row_Recordset1_stu['com_evaii']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0">
                    <label for="rad21" >&nbsp;&nbsp;0</label>

                    <input class="" id="rad22" name="com_evaii" <?php echo htmlentities(($row_Recordset1_stu['com_evaii']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad22" >&nbsp;&nbsp;1</label>

                    <input class="" id="rad23" name="com_evaii" <?php echo htmlentities(($row_Recordset1_stu['com_evaii']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad23" >&nbsp;&nbsp;2</label>

                    <input class="" id="rad24" name="com_evaii" <?php echo htmlentities(($row_Recordset1_stu['com_evaii']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad24" >&nbsp;&nbsp;3</label>

                    <input class="" id="rad25" name="com_evaii" <?php echo htmlentities(($row_Recordset1_stu['com_evaii']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad25" >&nbsp;&nbsp;4</label>

                    <input class="" id="rad26" name="com_evaii" <?php echo htmlentities(($row_Recordset1_stu['com_evaii']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad26" >&nbsp;&nbsp;5</label>
                  </div>
-->

        <div class="w3-panel w3-white">
          <div align="left">
            <h2 class="w3-text-green" style="text-shadow:1px 1px 0 #444">Make it Happen</h2>
            <h3>2. Does the project demonstrate systematic approach in their execution and problem solving?</h3>
          </div>
                    <input class="" id="rad31" name="com_evaiii" <?php echo htmlentities(($row_Recordset1_stu['com_evaiii']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0">
                    <label for="rad31" >&nbsp;&nbsp;0</label>

                    <input class="" id="rad32" name="com_evaiii" <?php echo htmlentities(($row_Recordset1_stu['com_evaiii']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad32" >&nbsp;&nbsp;1</label>

                    <input class="" id="rad33" name="com_evaiii" <?php echo htmlentities(($row_Recordset1_stu['com_evaiii']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad33" >&nbsp;&nbsp;2</label>

                    <input class="" id="rad34" name="com_evaiii" <?php echo htmlentities(($row_Recordset1_stu['com_evaiii']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad34" >&nbsp;&nbsp;3</label>

                    <input class="" id="rad35" name="com_evaiii" <?php echo htmlentities(($row_Recordset1_stu['com_evaiii']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad35" >&nbsp;&nbsp;4</label>

                    <input class="" id="rad36" name="com_evaiii" <?php echo htmlentities(($row_Recordset1_stu['com_evaiii']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad36" >&nbsp;&nbsp;5</label>

          <div align="left"><br>
            <h3>3. Does the project deliver high impact outcome?</h3>
          </div>
                    <input class="" id="rad41" name="com_evaiv" <?php echo htmlentities(($row_Recordset1_stu['com_evaiv']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0">
                    <label for="rad41" >&nbsp;&nbsp;0</label>

                    <input class="" id="rad42" name="com_evaiv" <?php echo htmlentities(($row_Recordset1_stu['com_evaiv']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad42" >&nbsp;&nbsp;1</label>

                    <input class="" id="rad43" name="com_evaiv" <?php echo htmlentities(($row_Recordset1_stu['com_evaiv']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad43" >&nbsp;&nbsp;2</label>

                    <input class="" id="rad44" name="com_evaiv" <?php echo htmlentities(($row_Recordset1_stu['com_evaiv']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad44" >&nbsp;&nbsp;3</label>

                    <input class="" id="rad45" name="com_evaiv" <?php echo htmlentities(($row_Recordset1_stu['com_evaiv']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad45" >&nbsp;&nbsp;4</label>

                    <input class="" id="rad46" name="com_evaiv" <?php echo htmlentities(($row_Recordset1_stu['com_evaiv']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad46" >&nbsp;&nbsp;5</label>
                  <br>
                  <br>
                  <br>
        </div>



        <div class="w3-panel w3-white">
          <div align="left">
            <h2 class="w3-text-orange" style="text-shadow:1px 1px 0 #444">Do it Together</h2>
            <h3>4. Does the project demonstrate cross-functional collaboration?</h3>
          </div>
                    <input class="" id="rad51" name="com_evav" <?php echo htmlentities(($row_Recordset1_stu['com_evav']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0">
                    <label for="rad51" >&nbsp;&nbsp;0</label>

                    <input class="" id="rad52" name="com_evav" <?php echo htmlentities(($row_Recordset1_stu['com_evav']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad52" >&nbsp;&nbsp;1</label>

                    <input class="" id="rad53" name="com_evav" <?php echo htmlentities(($row_Recordset1_stu['com_evav']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad53" >&nbsp;&nbsp;2</label>

                    <input class="" id="rad54" name="com_evav" <?php echo htmlentities(($row_Recordset1_stu['com_evav']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad54" >&nbsp;&nbsp;3</label>

                    <input class="" id="rad55" name="com_evav" <?php echo htmlentities(($row_Recordset1_stu['com_evav']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad55" >&nbsp;&nbsp;4</label>

                    <input class="" id="rad56" name="com_evav" <?php echo htmlentities(($row_Recordset1_stu['com_evav']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad56" >&nbsp;&nbsp;5</label>

          <div align="left"><br>
            <h3>5. Does the project enhance communication and relationship with their customers?</h3>
          </div>
                    <input class="" id="rad61" name="com_evavi" <?php echo htmlentities(($row_Recordset1_stu['com_evavi']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0">
                    <label for="rad61" >&nbsp;&nbsp;0</label>

                    <input class="" id="rad62" name="com_evavi" <?php echo htmlentities(($row_Recordset1_stu['com_evavi']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad62" >&nbsp;&nbsp;1</label>

                    <input class="" id="rad63" name="com_evavi" <?php echo htmlentities(($row_Recordset1_stu['com_evavi']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad63" >&nbsp;&nbsp;2</label>

                    <input class="" id="rad64" name="com_evavi" <?php echo htmlentities(($row_Recordset1_stu['com_evavi']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad64" >&nbsp;&nbsp;3</label>

                    <input class="" id="rad65" name="com_evavi" <?php echo htmlentities(($row_Recordset1_stu['com_evavi']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad65" >&nbsp;&nbsp;4</label>

                    <input class="" id="rad66" name="com_evavi" <?php echo htmlentities(($row_Recordset1_stu['com_evavi']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad66" >&nbsp;&nbsp;5</label>

                  <br>
                  <br>
                  <br>
        </div>
        <div class="w3-panel w3-white">
          <div align="left">
            <h2 class="w3-text-green" style="text-shadow:1px 1px 0 #444">Bonus</h2>
            <h3>6. Overall presentation flow and clarity.</h3>
          </div>
                    <input class="" id="rad71" name="com_evavii" <?php echo htmlentities(($row_Recordset1_stu['com_evavii']=='0')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="0">
                    <label for="rad71" >&nbsp;&nbsp;0</label>

                    <input class="" id="rad72" name="com_evavii" <?php echo htmlentities(($row_Recordset1_stu['com_evavii']=='1')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="1">
                    <label for="rad72" >&nbsp;&nbsp;1</label>

                    <input class="" id="rad73" name="com_evavii" <?php echo htmlentities(($row_Recordset1_stu['com_evavii']=='2')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="2">
                    <label for="rad73" >&nbsp;&nbsp;2</label>

                    <input class="" id="rad74" name="com_evavii" <?php echo htmlentities(($row_Recordset1_stu['com_evavii']=='3')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="3">
                    <label for="rad74" >&nbsp;&nbsp;3</label>

                    <input class="" id="rad75" name="com_evavii" <?php echo htmlentities(($row_Recordset1_stu['com_evavii']=='4')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="4">
                    <label for="rad75" >&nbsp;&nbsp;4</label>

                    <input class="" id="rad76" name="com_evavii" <?php echo htmlentities(($row_Recordset1_stu['com_evavii']=='5')?'checked':'', ENT_COMPAT, 'utf-8'); ?> type="radio" value="5">
                    <label for="rad76" >&nbsp;&nbsp;5</label>

                  <br>
                  <br>
                  <br>
        </div>

          <div align="left">
            <br>
              <p class="w3-text-white" for="com_comment"><h3> Comment : </h3></p>
          </div>

          <textarea name="com_comment" value="" size="32" placeholder=""><?php echo htmlentities($row_Recordset1_stu['com_comment'], ENT_COMPAT, 'utf-8'); ?></textarea> 


  <!-- Button -->

  <div class="button-box">
    <!--<button class="button trigger">Submit!</button>-->

        <button type="submit" name="submit" class="action-button button trigger" value="Submit" >Submit!</button>
  </div>
        <input type="hidden" name="MM_update" class="submit action-button" value="msform" />
        <input type="hidden" name="MM_update" value="form1" />


                    <input type="submit" name="submit" class="action-button" value="Update record!!" />
                    <input type="hidden" name="MM_update" class="submit action-button" value="form1" />
                    <input type="hidden" name="MM_update" value="form1" />
                    <input type="hidden" name="con_id" value="<?php echo $row_Recordset1_stu['con_id'];?>" />
    </form>


<br>
<br>




</div>
</div>




  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>




  

<?php 
    //Footer
    require_once 'web_element/footer.php'; 
?> 

</body>
</html>
