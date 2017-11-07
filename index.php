<?php
  include 'login/session.php';
?>
<!DOCTYPE html>
<html>
<title>Judging</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="icon" type="image/png" href="img/logo/wd.png"/>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/bg/inno.jpg');
    min-height: 100%;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1{
        background-attachment: scroll;
    }
}
</style>


<STYLE TYPE="TEXT/CSS"><!--
A:link  {
text-decoration:none;
}
A:visited {
text-decoration:none;
}
//--></STYLE>

<style type="text/css">

.button {
  border-radius: 1px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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


<!-- First Parallax Image with Logo Text -->
<!--171019 
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <a href="#main-menu" ><button class="button w3-center w3-padding-large w3-orange w3-xlarge w3-wide w3-animate-opacity">Innovation <span class="w3-hide-small">Compatition</span> Judging</button></a>
  </div>
</div>

-->

<div class="w3-container w3-center">


  <hr>
  <br>
  <br>
  <br>

  <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Areas</b></span> <span class="w3-text-grey">of Competitions</span></h1><hr>
</div>

<div class="w3-row-padding"> 

<div class="w3-third" id="main-menu">
<div class="w3-card-2">
                            <div class="w3-display-container ">
                                <div class="" style="min-height:">
  								  <a href="projectAdv.php" class = "textdecoration">
                                    <img src="img/images/1.png" class="w3-hover-opacity" style="width:100%">
                                      <div class="w3-display-middle w3-display-hover"> 
                                        <div class="w3-panel w3-orange w3-card-2 ">
                                          <a href="projectAdv.php" class = "textdecoration w3-center">
                                            <p>Technician, Staff and Engineer</p>
                                            </a>
                                        </div>
                                      </div>
                                  </a> 
                                </div>
                            </div>
  <div class="w3-container">
    <div class="w3-center">
      <p>Advance Process Technology</p>
    </div>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
                            <div class="w3-display-container ">
                                <div class="" >
                                  <a href="projectQlyEng.php" class = "">
                                    <img src="img/images/2-1.png" class="w3-hover-opacity" style="width:100%">

                                  <div class="w3-display-topright w3-display-hover"> 
                                    <div class="w3-panel w3-blue-grey w3-card-4 " >
                                      <a href="projectQlyEng.php">&nbsp;&nbsp;&nbsp;&nbsp;Engineering</a>
                                    </div>
                                  </div>


                                  </a>   
                                </div>
                            </div>
                            <!-- On Process ii -->
                            <div class="w3-display-container">
                                <div class="" >
                                  <a href="projectQlyDL-Tech.php" class = "">
                                    <img src="img/images/2-2.png" class="w3-hover-opacity" style="width:100%">



                                  <div class="w3-display-topright w3-display-hover"> 
                                    <div class="w3-panel w3-blue-grey w3-card-4 " >
                                      <a href="projectQlyDL-Tech.php">DL, Tech, Staff</a>
                                    </div>
                                  </div>


                                  </a>   
                                </div>
                            </div>
  <div class="w3-container">

    <div class="w3-center">
      <p>Quality</p>
    </div>
  </div>
</div>
</div>

<div class="w3-third">
<div class="w3-card-4">
                            <div class="w3-display-container ">
                                <div class="" style="min-height:">
                                  <a href="projectOpsEng.php" class = "textdecoration">
                                    <img src="img/images/3-11.png" class="w3-hover-opacity" style="width:100%">

                                  <div class="w3-display-topright w3-display-hover"> 
                                    <div class="w3-panel w3-blue-grey w3-card-4 " >
                                      <a href="projectOpsEng.php">&nbsp;&nbsp;&nbsp;&nbsp;Engineering</a>
                                    </div>
                                  </div>


                                  </a>   
                                </div>
                            </div>
                            <!-- On Process ii -->
                            <div class="w3-display-container">
                                <div class="" style="min-height:">
                                  <a href="projectOpsDL-Tech.php" class = "textdecoration">
                                    <img src="img/images/3-2.png" class="w3-hover-opacity" style="width:100%">



                                  <div class="w3-display-topright w3-display-hover"> 
                                    <div class="w3-panel w3-blue-grey w3-card-4 " >
                                      <a href="projectOpsDL-Tech.php">DL, Tech, Staff</a>
                                    </div>
                                  </div>


                                  </a>   
                                </div>
                            </div>
  <div class="w3-container">
    <div class="w3-center">
  <p>Operations/Yield/Cost/People</p></div>
  </div>
</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<?php 
    //Footer
    require_once 'web_element/footer.php'; 
?> 
</body>
</html>
