<?php
$subjek = 'Laporan BK-Digital';
$mailto = 'yourmail';



$name = $_POST['names'];
$message = $_POST['messages'];


$body = <<<EOD
<br><hr><br>

Pengirim : <font color="red">$name</font> <br>
Pesan : <font color="red">$message</font> <br>
EOD;


$headers = "From: demo@hildanku.eu\r\n"; // Buat nunjukin pengirim email.
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek." #".rand(1000,10000), $body, $headers);
?>
<?php
$random = rand(1000,5000);
?>

<meta content='0;url=./succes.php' http-equiv='refresh'/>
</head><body>
</html>
