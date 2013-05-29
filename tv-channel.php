<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en">
                        <!-- All-Head -->
    <head>
<meta http-equiv="Content-Type">
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <title>Western Oklahoma State College | TV DEMO</title>


    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta name="mobileoptimized" content="0" />

<script src="../flow/flowplayer/example/flowplayer-3.2.6.min.js"></script>
<!-- ### Flowplayer CSS ### -->
<style>
body {
        background: #000;
        margin: 0;
        padding: 0;
}
</style>

    </head>
                        <!-- Body -->
    <body>

<!-- 
<div class="vid">
                <a class="player" id="fms" style="display:block;width:500px;height:300px;margin:20px 0;text-align:center;">
                <img src="player/showme.png" style="border:0px;margin-top:140px;" /></a>
</div>
            <p><strong>Details:</strong> VP6 - 25fps - 1280x720 input - 200Kbps - 640x360 output - 22KHz @ 48Kbps</p> -->


<!--<div class="player" id="fms" style="display:block;width:500px;height:300px;margin:20px 0;text-align:center;"></div>-->
<div class="player" id="fms" style="display:block;width:100%;height:100%;margin:10px 0;text-align:center;"></div>

<!-- ### Flowplayer Script ### -->
    <script language="JavaScript">
$f("fms", "../flow/flowplayer/flowplayer-3.2.7.swf", {
        clip: {
                url: 'news',
                autoPlay: 'true',
                live: 'true',
                provider: 'influxis'
        },
        plugins: {
                 influxis: {
                        url: '../flow/flowplayer/example/flowplayer.rtmp-3.2.3.swf',
                        netConnectionUrl: 'rtmp://red5.wosc.edu/oflaDemo'
                 }
        }
}
);
                </script>







        </body>
 </html>

