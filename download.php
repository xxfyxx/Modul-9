<?php
header("content-type:application/zip");
header("content-length:".filesize($file));
header("content-Disposition: attachment;filename=$file");
readfile($file);
?>