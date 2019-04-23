@extends("layouts.template")

@section("content")

<script type="text/javascript">
	window.onload = init;
	var songsRating;
	var dataRating;
	var count;
	function init(){
		songsRating = document.getElementById("songsRating");
		document.getElementById("viewMore").disabled = true;
		getSong();
 		document.getElementById("viewMore").disabled = false;
		viewSong();
	}
	function getSong(){
		count = 0;
		 $.get("{{route('getSongs')}}", function(data, status){
   			dataRating = data;
 		 });
    }

    function viewSong(){
    	songsRating.innerHTML = "";
    	if (dataRating.length > (count+20)) {
	    	for (var i = count; i < count+20; i++) {
                songsRating.innerHTML += "<br>"+dataRating[i].name+"<select><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select>";
            }
    	}

            count+=20;
    }
</script>

<input type="Button" value="mas" id="viewMore" name="" onclick="viewSong();">

<div id="songsRating" style="background-color:white;">
</div>


@endsection
