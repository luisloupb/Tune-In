<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="_token" content="{{csrf_token()}}" />
</head>
<body>
<button onclick="EnviarDatos();">Empezar consulta</button>>

<?php 


//$getID3 = new getID3;

 //ruta actual
/**while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "<a href=''>".$archivo."</a> <br>";
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script language="javascript">
    function EnviarDatos(){
    
      var dir =  "C:/Users/ASUS-PC/Downloads/";
      var crfs_token = $('meta[name="_token"]').attr('content');

        $.ajax({
              url: "PHPTest",
              type: 'post',
              data: {
                 dir: dir,
                 _token: crfs_token
              },
          success: function(result){
                alert('hola');  
            }
        });
    }

    
    function RecibirDatos(){

          var nombre =  $("#nombre").val();

         $.ajax({
             url: "https://app.asana.com/-/api/0.1/workspaces/",
             type: 'GET',
             dataType: 'json', // added data type
          });        
    }
</script>
</body> 
</html>