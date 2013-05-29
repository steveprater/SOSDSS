<?php
	
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title> WOSC Slide Show </title>
<meta http-equiv="refresh" content="1800" > <!-- 30 minutes -->
<!-- <meta http-equiv="refresh" content="30" > --> <!-- 30 seconds for testing -->
<style type="text/css">
body, html { margin: 0; padding: 0; width: 100%; height: 100%; overflow: hidden; }
iframe { border: none; }
</style>
<script type="text/javascript">
var Dash = {
    nextIndex: 0,

    leftdashboards: [
	{url: "http://rain.wosc.edu/slideshow/livemap.html", time: 20},
	{url: "http://rain.wosc.edu/slideshow/forecast.html", time: 20},
	{url: "https://www.google.com/calendar/embed?src=newmoodle.wosc.edu_n5rhsjrr1em2k7jp9ptgpurcm8@group.calendar.google.com&mode=AGENDA&ctz=America/Chicago&gsessionid=OK", time: 20}
    ],

    rightdashboards: [
        {url: "http://rain.wosc.edu/slideshow/pres.html", time: 30}

    ],


    display: function()
    {
	var dashIndex = Dash.nextIndex;
        var dashboard = Dash.leftdashboards[dashIndex];
        var dashboard2 = Dash.rightdashboards[dashIndex];
	frames["displayArea2"].location.href = dashboard.url;
	//frames["displayArea"].location.href = dashboard2.url;
        Dash.nextIndex = (Dash.nextIndex + 1) % Dash.leftdashboards.length;
        setTimeout(Dash.display, dashboard.time * 1000);
    }
};

// {url: "http://www.wunderground.com/cgi-bin/findweather/getForecast?brand=wxmap&query=34.61820,-99.27320&lat=34.61820&lon=-99.27320&zoom=11&type=terrain&units=english&rad=1&rad.num=6&rad.spd=25&rad.opa=70&rad.type=N0R&rad.type2=&rad.smo=1&rad.stm=0&sat=0&svr=0&cams=0&tor=0&wxsn=0&ib=0&mits=0", time: 40},
// {url: "https://docs.google.com/spreadsheet/pub?key=0AtCs8oPrTSk_dEN1bHBtUHo4XzRPVG8zbGxPT1RueFE&single=true&gid=0&output=html", time: 10}



window.onload = Dash.display;
</script>

</head>
<body style="background: #000;">




<span id="center" style="width:100%;height:30px;">
<center><font size="5"><strong></strong></font></center>
</span>

<span id="right" style="position:absolute;right:0;top:30;width:66.66666666%;height:100%;border-top: 2px solid #050;border-left:0px solid #050;">
<iframe src="https://docs.google.com/presentation/embed?id=1dNZ1pVsSW8cfZiMYi9x1pS8PM6vf1fGOwb-9WaRZEyU&start=true&loop=true&delayms=10000" 
frameborder="0" width="100%" height="100%" allowfullscreen="true" mozallowfullscreen="true" 
webkitallowfullscreen="true">
</iframe>
</span>

<span id="lefttop" style="position:absolute;left:0;top:30;width:33.33333333%;height:57%;border-top: 2px solid #050;border-right:0px solid #050;">
<iframe name="displayArea2" width="100%" height="100%">
</iframe>
</span>

<span id="leftbottom" style="position:absolute;left:0;bottom:0;width:33%;height:42%;border-bottom: 2px solid #050;border-right:0px solid #050;">
<iframe width="100%" height="100%" src="http://rain.wosc.edu/slideshow/tv-channel.php" scrolling="no" frameborder="0" style="border: 0px none transparent;">
</iframe>
</span>




</body>
</html>

<!-- <iframe width="100%" height="100%" src="http://www.ustream.tv/embed/522594?autoplay=true" scrolling="no" frameborder="0" style="border: 0px none transparent;">
</iframe> -->

';


?>
