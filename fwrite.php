<html>
    <head>
        <title>Pemrosesan file</title>
    </head>
    <body>
        <h2>Penulisan data</h2>
        <?php
        $file='C:\\Teks.txt';
        $fo=fopen($file,'w');
        $data='tes fwrite OK in '.$file.'!';
        fwrite($fo,$data);
        fclose($fo);
        echo("Cek isi file di <b> $file <\b> !");
        ?>
    </body>
</html>