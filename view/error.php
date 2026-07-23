
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Raleway:600);
html, body {
	width:100%;
	height:100vh;
	margin:0;
	padding:0;
}
*{
	-webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}
body {
	background:url(assets/images/back.jpg);
	background-size:cover;
	background-attachment:fixed;
}
.wrapper_404 {
	position:relative;
	min-height:100vh;
}
#mainContent_404 {
	font-family: 'Raleway', sans-serif;
	position: absolute;
	min-width:300px;
	padding: 0 15px;
	width:100%;
	top:50%; 
	left: 50%; 
	-ms-transform: translateX(-50%) translateY(-50%);
	-webkit-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}
#mainContent_404 h4 {
	font-family: 'Raleway', sans-serif;
	color:#333;
	line-height:1.8;
}
#mainContent_404 img {
	max-width:100%;
	margin:15px 0;
}
#mainContent_404 a {
	text-decoration:none;
}
#mainContent_404 #srs {
	-webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow:    0px 0px 10px 0px rgba(0, 0, 0, 0.75);
	box-shadow:         0px 0px 10px 0px rgba(0, 0, 0, 0.75);
	border:4px solid #fff;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
#mainContent_404 #srs:hover {
	border:4px solid #D9443F;
}
.box-box {
	display: inline-block;
	margin: 0 auto;
}
#mainContent_404 > ul {
  display: inline-block;
}
#mainContent_404 li {
  clear: both;
  float: left;
  font-size: 13px;
  list-style: outside none none;
  padding-left: 15px;
  position: relative;
	color: #525252;
}
#mainContent_404 li::before {
  color: #D9443F;
  content: "*";
  font-size: 25px;
  left: 0;
  position: absolute;
  top: 4px;
}
#mainContent_404 a:hover {
	color: #D9443F;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 640px) {
#img_404 { height:60px;}
#mainContent_404 img {
	max-width:300px;
	margin:0;
}
#mainContent_404 h4 {
	font-size:14px;
}
}
</style>


<section>
	<div class="container text-center wrapper_404">
    	<div id="mainContent_404">
        	<img src="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/assets/images/404.png" id="img_404" alt="Error 404 – Page Not Found!">
            <h3>The Page You Are Searching For Is Not Available</h3>
            <h4>The reasons for this might be:</h4>
            <ul>
            	<li>The page does not exist</li>
            	<li>The page is outdated and was moved or removed</li>
            	<li>The address (URL) is not correct</li>
            </ul>
            <br>
			<p>We apologize for the inconvenience. In the meantime, browse through our products and services here: <br> <a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>">Home</a> - <a href="<?php echo "https://" . $_SERVER['SERVER_NAME']; ?>/contact">Contact Us</a></p>
            <!-- <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME']; ?>/"><img class="img-responsive box-box" src="<?php //echo "http://" . $_SERVER['SERVER_NAME']; ?>/images/srs-seo.png" id="srs"></a> -->
        </div>
    </div>
</section>

