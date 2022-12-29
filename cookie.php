<?php
if(isset($HTTP_POST_VARS["no_induk"]))
{
    setcookie("cookie_no_induk",$HTTP_POST_VARS[no_induk]);
}
?>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <h2>Penggunaan Cookie</h2>
        <pre>
            <form action="cookie.php" method="post">
                No.induk : <input type="text" name="no_induk" size="10"> <input type="submmit" name="go" value="GO">
            </form>
            <?php
            if(isset($HTTP_POST_VARS["no_induk"]))
            {
                echo("Klik <a href=\"cek_cookie.php\">disini</a> untuk melihat data cookies");
            }
            ?>
        </pre>
    </body>
</html>