<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Visor</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrapper">           
            <div id="video">
                <video id="sampleMovie" width="640" height="360" preload controls>
                    <source src="videos/big_buck_bunny.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                    <source src="videos/big_buck_bunny.ogv" type='video/ogg; codecs="theora, vorbis"' />
                    <source src="videos/prueba1.webm" type='video/webm; codecs="vp8, vorbis"' />
                    <!--<object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
                        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
                        <param name="allowFullScreen" value="true" />
                        <param name="wmode" value="transparent" />
                        <param name="flashvars" value='config={"clip":{"url":"HTML5Sample_flv.flv","autoPlay":false,"autoBuffering":true}}' />
                    </object>-->
                </video> 
            </div>
            <div id="lista">
                <ul>
                <?php

                function listar_archivos($carpeta) {
                    if (is_dir($carpeta)) {
                        if (($dir = opendir($carpeta)) == true) {
                            while (($archivo = readdir($dir)) !== false) {
                                if ($archivo != '.' && $archivo != '..' && $archivo != '.htaccess') {
                                    echo '<li><a href="' . $carpeta . "/" . $archivo . '">' . $archivo . '</a></li>';
                                }
                            }
                            closedir($dir);
                        }
                    }
                }

                echo listar_archivos('/var/www/adventista/videos');
                ?>
                </ul>
            </div>
        </div>
    </body>
</html>
