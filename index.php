<?php
header("Content-Type: audio/mpegurl;");
echo file_get_contents('i.m3u');
