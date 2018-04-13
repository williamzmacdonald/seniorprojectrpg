/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

$(document).ready(function(){
	var url = "/seniorprojectrpg/public/rooms/notes";
	
	collapseNavbar();
		
	$('.deleteNote').click(function(){
		var note_id = $(this).val();
		
		$.ajax({
			type: "DELETE",
			url: url + '/' + note_id,
			success: function(data){
				console.log(data);
				$("#note"+note_id).remove();
			},
			error: function (data){
				console.log('Error: ', data);
			}
		});
	});
	$("#save").click(function(event) {
		event.preventDefault();
		var x = document.getElementById('noteList');
		var y = document.getElementById('note');
		var z = document.getElementById('go_back');
		if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";
			z.style.display = "none";
		}
		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
		});
		var formData = {
			title: $("#title").val(),
			body: $("#area").val(),
			gameroom_id: gameroom_id,
			user_id: user_id
		}
		var state = $("#save").val();
		var type = "POST";
		var myurl = url;
		if (state == "update")
		{
			var note_id = $('#note_id').val();
			type = "PUT";
			myurl += '/' + note_id;
		}
		console.log('Data:', formData);
		$.ajax({
			type: type,
			url: myurl,
			data: formData,
			dataType: 'json',
			success: function (data) {
				console.log(data);

				if(data['id'] === 1){
					var note = 	"<li style='margin-left: 10px; border: none;'>"+
									"<div onclick='javascript:showNote("+data['id']+");' class='pointer' id='{{$note->id}}'>"+
										"<h4>"+data['title']+"</h4>"+
										"<p class='font-black' id='body"+data['id']+"' style='display: none;'>"+data['body']+"</p>"+
									"</div>"+
									"</li>";

					document.getElementById('notep').style.display = "block";
					document.getElementById('list').style.display = "block";
				}
				else{
					var note = 	"<li style='margin-left: 10px;  border-top: 1px solid gainsboro; width: 325px;'>"+
									"<div onclick='javascript:showNote("+data['id']+");' class='pointer' id='{{$note->id}}'>"+
										"<h4>"+data['title']+"</h4>"+
										"<p class='font-black' id='body"+data['id']+"' style='display: none;'>"+data['body']+"</p>"+
									"</div>"+
								"</li>";
				}
				notes[notes.length] = data;
				console.log(notes);
				$('#list').append(note);
			},
			error: function (data) {
				console.log('Error:', data);
			}
		});	
	});
});

$('#cl').click(function clear() {
	document.getElementById('area').value = "";
	document.getElementById('title').value = ""; 
});

$('#add_new').click(function addnew() {
	var x = document.getElementById('noteList');
    var y = document.getElementById('note');
    var z = document.getElementById('go_back');
	if (x.style.display != "none") {
		x.style.display = "none";
        y.style.display = "block";
        z.style.display = "block";
    }
});

$('#go_back').click(function addnew() {
	var x = document.getElementById('noteList');
    var y = document.getElementById('note');
    var z = document.getElementById('go_back');
	if (y.style.display != "none") {
		y.style.display = "none";
        x.style.display = "block";
        z.style.display = "none";
    }
});

function showNote(id)
{
	var y = document.getElementById("body"+id);
	if (y.style.display === "none") {
		y.style.display = "inline";
	}
	else if(y.style.display === "inline"){
		y.style.display = "none";
	}
	$.each(notes, function(i, note){
		if(note.id !== id)
		{
			document.getElementById("body"+note.id).style.display = "none";
		}
	});
}

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
	if ($(".navbar-custom").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
}