<!DOCTYPE html>
<html>
<head>
<title>403 Forbidden</title>
</head>
<body>

<?php
$i=0;
foreach ($guild as $s) :
?>
<p><?php echo "VALOR I:",++$i?></p>
<p><?php echo $s->GuildNo?></p>
<?php
endforeach
;

?>
</body>
</html>