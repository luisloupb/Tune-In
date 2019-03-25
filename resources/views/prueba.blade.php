<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<input type="file" accept="audio/*" multiple/>

<a href="" onClick="enviar();" >enviar</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/id3js/id3.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
      var metadaList = [];
      var metadaM,temp;
      var metadata;
      document.querySelector('input[type="file"]').onchange = function(e) {
          try {
            var token = '{{csrf_token()}}';
            for (var i = 0 ; i < this.files.length; i++) {
                  id3(this.files[i], function(err, tags) {
                   var data={title:tags.title,album:tags.album,artist:tags.artist,genre:tags.v1.genre,_token:token};
                   enviar(data);
                });
            }
          }
          catch(err) {
            
          }
      }

    function enviar(data){
    
    console.log(data);
    $.ajax({
        type: "post",
        url: "{{route('postMetadata')}}",
        data: data,
        success: function (msg) {
                // alert("Se ha realizado el POST con exito "+msg);
                // metadaList = [];
        }
      });
      }

</script>
</body> 
</html>