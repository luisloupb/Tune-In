<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<input type="file" accept="audio/*" multiple/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/id3js/id3.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
      var metadaList = [];
      var metadaM,temp;
      var metadata;
      var data = {};
      var token = '{{csrf_token()}}';
      var elemento;
      /*----------------------------------------------------------------------------*/
      var artists = [];
      var genres = [];
      var titles = [];
      /*----------------------------------------------------------------------------*/
      document.querySelector('input[type="file"]').onchange = function(e) {
        //elemento = document.getElementById("vista");
          try {
            var lon = this.files.length;
            for (var i = 0 ; i < this.files.length; i++) {
                  id3(this.files[i], function(err, tags) {
                  artists.push(tags.artist);
                  genres.push(tags.v2.genre);
                  titles.push(tags.title);
                  //elemento.innerHTML += "<br>Nombre:"+tags.title+"<br> Artista:"+tags.artist+"<br> Genero:"+tags.v2.genre+"<br><br><br>";
                });
                  if (i == lon-1) {
                    enviar();
                  }
            }
            
          }
          catch(err) {
          }

      }

    function enviar(){
      console.log(titles);
    $.ajax({
         type: "post",
         url: "{{route('postMetadata')}}",
         data: {
            titles:titles,
            //genres:genres,
            //artists : artists,
            _token:token
          }
         ,
         success: function (msg) {
                 console.log("Se ha realizado el POST con exito "+msg);
                 //location.reload();
                 // metadaList = [];
         }
       });
      }

      function validar(tags){
          
          genres.push(tags.genre);
        if (tags.artist == null) {
          artists.push(tags.artist);
            if (tags.v1.artist == null) {
            }
            else{
                artists.push(tags.v1.artist);
            }
            if (tags.v2.artist == null) {

            }
            else{
                artists.push(tags.v2.artist);
            }
        }
        else{
          artists.push(tags.artist);
        }
        if (tags.title == null) {
          titles.push(tags.title);
            if (tags.v1.title == null) {
            }
            else{
                titles.push(tags.v1.title);
            }
            if (tags.v2.title == null) {

            }
            else{
                titles.push(tags.v2.title);
            }
        }
        else{
          titles.push(tags.title);
        }
        if (tags.genre == null) {
            if (tags.v1.genre == null) {
            }
            else{
            }
            if (tags.v2.genre == null) {

            }
            else{
                genres.push(tags.v2.genre);
            }
        }else{
          genres.push(tags.genre);
        }
      }
</script>

<div id="vista"></div>
</body> 
</html>