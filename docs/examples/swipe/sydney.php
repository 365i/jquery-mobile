<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sydney</title>
	<link rel="stylesheet"  href="../../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../../_assets/css/jqm-demos.css">
	<link rel="stylesheet" href="swipe-page.css">
	<link rel="shortcut icon" href="../../_assets/favicon.ico">
	<script src="../../../js/jquery.js"></script>
	<script src="../../_assets/js/"></script>
	<script src="../../../js/"></script>
	<script src="swipe-page.js"></script>
</head>
<body>

<div data-role="page" id="sydney" class="demo-page" data-dom-cache="true" data-theme="a" data-prev="seoul">

	<div data-role="header" data-position="fixed" data-fullscreen="true" data-id="hdr" data-tap-toggle="false">
		<h1>Sydney</h1>
        <a href="swipe-page.html" data-ajax="false" data-direction="reverse" data-icon="delete" data-iconpos="notext" data-shadow="false" data-icon-shadow="false">Back</a>
    </div><!-- /header -->
	
	<div data-role="content">

		<div id="trivia-sydney" class="trivia ui-content" data-role="popup" data-position-to="window" data-tolerance="50,30,30,30" data-theme="d">
        	<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
        	<p>The Sydney Opera House provides 45,000 square metres (11 acres) of usable office space out of 18,000 square metres (4.5 acres) of land. It is 183 metres (600 feet) tall and about 120 metres (388 feet) wide at its widest point. It is supported on 580 concrete piers sunk up to 25 metres below sea level. It has about 1000 rooms. It has five theatres, five rehearsal studios, two main halls, four restaurants, six bars and numerous souvenir shops. <small>source:&nbsp;sheppardsoftware.com</small></p>
        </div>

	</div><!-- /content -->
    
    <div data-role="footer" data-position="fixed" data-fullscreen="true" data-id="ftr" data-tap-toggle="false">
		<div data-role="controlgroup" class="control ui-btn-left" data-type="horizontal" data-mini="true">
        	<a href="#" class="prev" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="d">Previous</a>
        	<a href="#" class="next" data-role="button" data-icon="arrow-r" data-iconpos="notext" data-theme="d">Next</a>
        </div>
        
		<a href="#trivia-sydney" data-rel="popup" class="trivia-btn ui-btn-right" data-role="button" data-icon="info" data-iconpos="left" data-theme="d" data-mini="true">Trivia</a>
    </div><!-- /footer -->

</div><!-- /page -->

</body>
</html>
