
<?php require_once('Connections/MyConnect.php'); ?>

<?php
    $maxRows_studentSet_all = 18;
    $pageNum_studentSet_all = 0;
    if (isset($_GET['pageNum_studentSet_all'])) {
      $pageNum_studentSet_all = $_GET['pageNum_studentSet_all'];
    }
    $startRow_studentSet_all = $pageNum_studentSet_all * $maxRows_studentSet_all;
    
    mysqli_select_db($MyConnect, $database_MyConnect);
      $query_studentSet_all = "SELECT * FROM contestant
      INNER JOIN type_contest ON type_contest.typ_id = contestant.type_contest_typ_id
      WHERE contestant.type_contest_typ_id = 4
      ORDER BY contestant.con_id DESC";
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



?>

<!DOCTYPE html>
<html>
<title>Judging</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


<link rel="icon" type="image/png" href="img/logo/wd.png"/>
<body>


        <?php 
            require_once 'web_element/nav-top.php';
        ?>

        
<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="img/images/photographer.jpg" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">Innovation Bazaar</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">Innovation Bazaar</h5>
    <h3 class="w3-hide-medium w3-hide-small">Advance Process Technology</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="index.php" class="w3-bar-item w3-button">Home</a>
    <a href="scoreResult/score.php" class="w3-bar-item w3-button">Score</a>
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="index.php" class="w3-bar-item w3-button">Home</a>
  <a href="scoreResult/score.php" class="w3-bar-item w3-button">Score</a>
</div>
</div>



<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin" id="onProcess">
                      <h2>Advance Process Technology</h2>
                      <p>Plesas Click the project for giving your judging</p>
                    
                    
                    <table class="w3-table-all w3-margin-top w3-hoverable" id="onProcessiiTable">
                        <tr>
                          
                          <th style="width:5%;">No.</th>
                          <th style="width:25%;">Poster</th>
                          <th style="width:50%;">Project Name</th>
                          <th style="width:15%;">Team Name</th>
                          <th style="width:5%;">Site</th>
                        </tr>
                        <?php 
                        $rows_all = $totalRows_studentSet_onProcess;
                        $stu_id=$row_studentSet['con_id'];


                            for($cur_page=0;$cur_page<=$pageNum_studentSet_all;$cur_page++){
                                  $a = ($rows_all - ($pageNum_studentSet_all*$maxRows_studentSet_all));
                                }
                            $b = $a;
                        ?>

                        <?php do { ?>
                            <tr>
                              <?php

                              if($row_studentSet['con_id'] < $stu_id){
                                    $b = ($b-1);
                                  } 
                          
                              ?>
                              <td><?php echo $b; ?></td>
                              <td>

							    <img src="img/poster/<?php echo $row_studentSet['con_poster']; ?>" style="width:50px;cursor:pointer" 
							    onclick="onClick(this)" class="w3-hover-opacity">
                              	

                              </td>
                              <td><a href="evaluation.php?con_id=<?php echo $row_studentSet['con_id']; ?>" ><?php echo $row_studentSet['con_project']; ?></td>
                              <td><?php echo $row_studentSet['con_name']; ?></td>
                              <td><?php echo $row_studentSet['con_site']; ?></td>
                              <!--
                              <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $product_id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
                              -->
                            </tr>
                        <?php } while ($row_studentSet = mysqli_fetch_assoc($studentSet_all)); ?>               
                    </table>



<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>
                      
                      <p>&nbsp;</p>
               
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

</div>

<br>
</body>
</html>
