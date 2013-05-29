<?php
	
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title>WOSC Slide Show</title>
<style type="text/css">
body, html { margin: 0; padding: 0; width: 100%; height: 100%; overflow: hidden; }
iframe { border: none; }
</style>
<script type="text/javascript">
var Dash = {
    nextIndex: 0,

    dashboards: [
        {url: "http://www.wunderground.com/cgi-bin/findweather/getForecast?brand=wxmap&query=34.61820,-99.27320&lat=34.61820&lon=-99.27320&zoom=11&type=terrain&units=english&rad=1&rad.num=6&rad.spd=25&rad.opa=70&rad.type=N0R&rad.type2=&rad.smo=1&rad.stm=0&sat=0&svr=0&cams=0&tor=0&wxsn=0&ib=0&mits=0", time: 40},
        {url: "http://links.wosc.edu/status", time: 10},
	{url: "http://rain.wosc.edu/slideshow/forecast.html", time: 20},
	{url: "http://www.google.com/calendar/embed?src=newmoodle.wosc.edu_t18ciitfp47gai2rr3co9p0sh8%40group.calendar.google.com&ctz=America/Chicago ", time: 30},

    ],

    display: function()
    {
        var dashboard = Dash.dashboards[Dash.nextIndex];
        frames["displayArea"].location.href = dashboard.url;
        Dash.nextIndex = (Dash.nextIndex + 1) % Dash.dashboards.length;
        setTimeout(Dash.display, dashboard.time * 1000);
    }
};

window.onload = Dash.display;
</script>
</head>
<body>
WOSC Slide Show
<iframe name="displayArea" width="100%" height="100%"></iframe>
</body>
</html>

';


?>
