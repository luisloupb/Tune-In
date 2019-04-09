<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<input type="file" accept="audio/*" multiple/>
<input type="Button" value="enviar" name="" onclick="enviar();">
<input type="Button" value="verdatos" name="" onclick="verdatos();">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/id3js/id3.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
      var token = '{{csrf_token()}}';
      var titles = [];
      var artists = [];
      var genre,genres = [];
      /*----------------------------------------------------------------------------*/
      document.querySelector('input[type="file"]').onchange = function(e) {
          try {
            var lon = this.files.length;
            for (var i = 0 ; i < this.files.length; i++) {
                  id3(this.files[i], function(err, tags) {
                  artists.push(tags.artist);
                  genres.push(tags.v2.genre);
                  titles.push(tags.title);
                });
            }  
          }
          catch(err) {
          }
      }

    function enviar(){
    $.ajax({
         type: "post",
         url: "{{route('postMetadata')}}",
         data: {
            titles:titles,
            genres:genres,
            artists : artists,
            _token:token
          }
         ,
         success: function (msg) {
                 console.log("los datos se enviaron al servidor correctamente!"+msg);
         }
     });
    }

    function verdatos(){
      $.ajax({
        type:"get",
        url:"{{ route('getGenres')}}",
        success:function(msg){
          console.log("get exitoso"+msg);
        }
    });
    }

</script>

<div id="vista"></div>
</body> 
</html>