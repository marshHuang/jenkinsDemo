<?php
    header("Content-type: application/octet-stream");

    header('Content-Disposition: attachment; filename="'. basename('https://oss.hdyl.net.cn/files/541347453287329792.mp3').'"');

    header("Content-Length: ". filesize('https://oss.hdyl.net.cn/files/541347453287329792.mp3'));

    readfile('https://oss.hdyl.net.cn/files/541347453287329792.mp3');
?>