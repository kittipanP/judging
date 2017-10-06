
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
      WHERE contestant.type_contest_typ_id = 1
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



<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin" id="onProcess">
                      <h2>Advance Process Technology</h2>
                      <p>Plesas Click the project for ..</p>
                    
                    
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
                              <td></td>
                              <td><?php echo $row_studentSet['con_project']; ?></td>
                              <td><?php echo $row_studentSet['con_name']; ?></td>
                              <td><?php echo $row_studentSet['con_site']; ?></td>
                              <!--
                              <a class="btn btn-sm btn-danger" id="delete_product" data-id="<?php echo $product_id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i></a>
                              -->
                            </tr> 
                        <?php } while ($row_studentSet = mysqli_fetch_assoc($studentSet_all)); ?>               
                    </table>
                      
                      <p>&nbsp;</p>
               
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

</div>

<br>
</body>
</html>
