<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$getID3 = new getID3;
##$directorio = opendir("C:/xampp/htdocs");
 //ruta actual
/**while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
    }
    else
    {
    	$info = new SplFileInfo($archivo);
		if ($info->getExtension()=="mp3") {
			 echo $info->getFilename();
			 $tag = id3_get_tag( "C:/xampp/htdocs/Daddy.mp3");
			print_r($tag);
		}
    }
}**/

##$tag = id3_get_tag( "path/to/example.mp3" );
##print_r($tag);

?>
</body>
</html>