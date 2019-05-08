var token =  $('meta[name=csrf-token]').attr('content');
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
                    console.log(tags);
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
     url: "postMetadata",
     data: {
        titles:titles,
        genres:genres,
        artists : artists,
        generosv2 : generosv2,
        _token:token
      }
     ,
     success: function () {
        window.location="http://localhost:8000/getListRecommended";
     }
 });
}

function verdatos(){
   for (var i = titles.length - 1; i >= 0; i--) {
         document.getElementById("vista").innerHTML += "<br> titulo: "+titles[i];
      }
      document.getElementById("BtnVerDatos").disabled = true;
}
