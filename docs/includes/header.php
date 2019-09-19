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

