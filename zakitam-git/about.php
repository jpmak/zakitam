<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>zaiktam</title>
<meta name="description" content="">
<meta name="author" content="">
<link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet" type="text/css">




</head>
<body>
<div style="height:500px; overflow:hidden; position:relative; " id="wrap">
  <?php
include dirname(__FILE__).'/header.php'; 
?>
  <!-- Header -->
  <div style="max-width:1920px;  width:100%; margin:0 auto; position:absolute; top:0;">
    <div class="p-header">
      <video autoplay class="img img-responsive" height="760" id="home-main-video" loop muted="muted" width="1920">
        <source src="https://res.cloudinary.com/splacer/video/upload/c_fill,h_760,w_1920,x_0,y_225/v1/Production/Splacer_Dancer_VIDEO_1280x720.webm" type="video/webm" />
        <source src="https://res.cloudinary.com/splacer/video/upload/c_fill,h_760,w_1920,x_0,y_225/v1/Production/Splacer_Dancer_VIDEO_1280x720.mp4" type="video/mp4" />
        <source src="https://res.cloudinary.com/splacer/video/upload/c_fill,h_760,w_1920,x_0,y_225/v1/Production/Splacer_Dancer_VIDEO_1280x720.ogv" type="video/ogg" />
   </video>
      <div class="home-title">
        <div class="sp-home-big-head sp-bold">zakitam 工作室:佛山市禅城区建新路莺岗街621号火山滑板店</div>
        <div class="sp-home-big-head sp-bold"><span>zakitam studio:Volcano Skate Shop, Ying Gang Street, Jian Xin Road, Chan Cheng District, Foshan, China.</span></div>
        <h2><span class="sp-home-head-1 sp-pointer"><a href="tel:13927225336">Tel | 13927225336</a></span></h2>
        <!--
        <img alt="Video pause" height="40" id="main-video-pause" onclick="stopVideo(&#39;home-main-video&#39;); toggleElemById(&#39;main-video-play&#39;); toggleElemById(&#39;main-video-pause&#39;)" src="https://www.splacer.co/assets/video_pause-df5fc376f1d785f855f8c609ba05bef4.png" />
        <img alt="Video play" height="40" id="main-video-play" onclick="startVideo(&#39;home-main-video&#39;); toggleElemById(&#39;main-video-pause&#39;); toggleElemById(&#39;main-video-play&#39;)" src="https://www.splacer.co/assets/video_play-661abbfb3ff18aaf0afb456a6388b47d.png" style="display: none;" /></div>
      -->
    </div>
  </div>
  <!-- Footer --> 
</div>
</div>

<?php
include dirname(__FILE__).'/footer.php'; 
?>
<!--
<script src="https://www.splacer.co/assets/application-305bb38705e313cbef2dbaea3c9ffd0a.js"></script>
-->
<script type="text/javascript"> 
$(document).ready(function(){ 
	$(".navbar-toggle").click(function(){
$(".navbar").toggleClass("navblue-on");
});
});
</script>
</body>
</html>