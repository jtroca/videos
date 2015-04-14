<!DOCTYPE html >
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="css/global.css"/>
        <link rel="stylesheet" href="css/index.css"/>
        <link rel="stylesheet" href="assets/video-js.css"/>
        <script src="assets/video.dev.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>
    <body>
        
        <div class="video">
        <!--div class="cover"></div-->
            <video onclick="return checkers(this)" style="position:relative !important; width: 100% !important; height: 100% !important; bottom:0;" id="vid" class="video-js vjs-default-skin" preload="auto" width="100%" height="100%" data-setup="{}" autoplay onclick="document.getElementsByTagName('video')[0].play()" poster="">
                <source src="http://www.fuckanewgirltonight.com/video/sales22.mp4" type="video/mp4 codecs='avc1.42E01E, mp4a.40.2'"/>
                <source src="http://www.fuckanewgirltonight.com/video/sales17_48k.webm" type="video/webm "/>
                <source src="http://www.fuckanewgirltonight.com/video/sales1.3gp" type="video/3gp"/>
                <source src="http://www.fuckanewgirltonight.com/video/sales20.flv" type="video/flv"/>
            </video>
        </div>
        
        <script>
        
        videojs.options.flash.swf = "assets/video-js.swf";
        var myPlayer = videojs("vid");  
        function checkers(vid)
        {
            var space = false;
            $(document).keyup(function(evt) {
                if (evt.keyCode == 32) {
                    space = false;
                }
                }).keydown(function(evt) {
                    if (evt.keyCode == 32) {
                        space = true;
                        }
                        });                                                                                                                                  }                        
        
        </script>
        </body>
        </html>

