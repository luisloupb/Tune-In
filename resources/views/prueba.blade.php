<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<input type="file" accept="audio/*" multiple/>
<input type="Button" value="enviar" id="enviar" name="" onclick="enviar();">
<input type="Button" value="verdatos" name="" onclick="verdatos();">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/id3js/id3.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
      var token = '{{csrf_token()}}';
      var titles = [];
      var artists = [];
      var genre,genres =[];
      var generosv1,generosv2 = [];
      /*----------------------------------------------------------------------------*/
      document.querySelector('input[type="file"]').onchange = function(e) {
           document.getElementById("enviar").disabled = true;

          try {
            if (this.files.length > 3) {
              for (var i = 0 ; i < this.files.length; i++) {
                  id3(this.files[i], function(err, tags) {
                  artists.push(tags.artist);
                  genres.push(tags.v1.genre);
                  generosv2.push(tags.v2.genre);
                  titles.push(tags.title);
                });
              }
              document.getElementById("enviar").disabled = false;
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
            generosv2 : generosv2,
            _token:token
          }
         ,
         success: function (msg) {
                alert(msg);
                location.reload();
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