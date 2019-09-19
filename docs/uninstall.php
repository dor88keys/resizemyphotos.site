<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/styles.css?v=1.0"> -->
	<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/cedckdcmlfabmjkangihdbimghccobhp">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="includes/style.css">

	<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  	
<!-- 	hotjar	 -->
	<!-- Hotjar Tracking Code for resizemy.photos -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:570703,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
	
	<!-- 	analytics -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101979275-1', 'auto');
<?php
  $version = $_GET["version"];
  $medium = $_GET["utm_medium"];
  if ($medium == 'uninstall'){
    echo "ga('set', 'appName', 'Resizemy.photos');";
    echo "ga('set', 'appVersion', '".$version."');";
    echo "ga('send', 'screenview', {screenName: 'Uninstall'});";
    echo "window.onload = function () {";
    echo "ga('send', 'event', 'extension', 'uninstall','".$version."');";
    echo "};";
  }
?>
  ga('send', 'pageview');

</script>



  <title>The easiest way to crop and resize images online</title>
  <meta name="description" content="">

</head>

<body class="uninstall">

	
  <div class="container">
    
    <div class="row nav">
      <div class="col-sm-6">
        <img src="images/logo.png" alt="">
      </div>
      <div class="col-sm-6 pull-right">
        Got comments? ideas? Email us at <a href="mailto:theguys@resizemy.photos">theguys@resizemy.photos</a>
      </div>
    </div>
    
  <div class="row content">
<!--   <h1>May we ask why you chose to leave?</h1> 
		<h4>(We would truly appreciate it...)</h4>
		<div class="spacer"></div> -->
		<div class="col-sm-12">
<!-- 		<h1>May we ask why did you choose to leave?</h1>
		<h2>It would mean a lot to us.</h2>
			 -->
			<div id="gform">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScrV_46yrIYqkPkSKPIcbuUoTAtFS_Yn1TkX03Z1YaIQRI8Cw/viewform?embedded=true" width="860" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
</div>
			
<!-- 		<form action="/mail.php" method="post" enctype="text/plain" id="feedback">
						
			<ul>
				<li><input type="radio" name="reason" value="not working as expected">It wasn't working the way I expected</br></li>
				<li><input type="radio" name="reason" value="no features">It didn't have the features I was looking for</br></li>
				<li><input type="radio" name="reason" value="technical issues">I experienced technical issues</br></li>
				<li><input type="radio" name="reason" value="Other">Other: <input type="text" name="other"></br></li>
				<li id="more-info" style="display:none;">
					<textarea name="more-info" form="feedback">
					Can you please provide more info?
					</textarea><br/>
					Can we get back in touch with you:
<!-- 					<input type="email" name="email" value="email"> -->
				</li>
				<li><input type="submit" value="Send us your feedback" class="send"/></li>
			</ul>
		</form> -->
  </div>
<!-- end of col-sm-12 -->
  </div>
  <script>
  document.getElementById("feedback").onchange = function(e) {
  	if (e.target.name =="reason"){
  		//document.getElementById("more-info").style.display = 'block';
  	}
  }
  
  document.getElementById("feedback").onsubmit = function(e) {

	e.preventDefault();
	
	var f = e.target,
		formData = new FormData(f),
		xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
		    if (xhr.readyState === 4) {
		    	if (xhr.status === 200) {
	        		console.log(xhr.response); //Outputs a DOMString by default
	        		document.getElementById("feedback").innerHTML = xhr.responseText;
		    	}
    		}
  		}
	
	xhr.open("POST", f.action);
	xhr.send(formData);
}
  </script>
<footer>
  
  <ul class="menu">
    <li><a href="http://resizemy.photos/how-to-resize-an-image-online">How to resize an image online</a></li>
    <li><a href="http://resizemy.photos/how-to-crop-an-image-online">How to crop an image online</a></li>
  </ul>
  
        <div id="feedback">
        <i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;
 Got a question? Have ideas? Requests? Drop us a note: <a href="mailto:theguys@resizemy.photos">theguys@resizemy.photos</a>
 </div>
        <div class="clr"></div>
      <div id="the-small-stuff">
          All rights reserved bla bla bla ResizeMy.Photos 2017 &nbsp;&nbsp;  | &nbsp;&nbsp;
            <a href="http://resizemy.photos/terms.html" target="_blank">Terms &amp; Conditions  </a> &nbsp;&nbsp;  | &nbsp;&nbsp;
            <a href="http://resizemy.photos/feedback.html">feedback & suggestions</a>
        </div>
    </footer>

  </div>
</body>

</html>