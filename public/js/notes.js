/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

$(document).ready(function(){
	var url = "/seniorproject/public/rooms/notes";
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
		var x = document.getElementById('list');
		var y = document.getElementById('note');
		if (x.style.display === "none") {
			x.style.display = "block";
			y.style.display = "none";
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

				var note = "notehtmlgoeshere";
				$('#list').append(note);
			},
			error: function (data) {
				console.log('Error:', data);
			}
		});	
	});
});

document.getElementById('cl').onclick = function(){clear()};
function clear() {
	document.getElementById('area').value = "";
	document.getElementById('title').value = ""; 
}

function addnew() {
	var x = document.getElementById('list');
	var y = document.getElementById('note');
	if (x.style.display != "none") {
		x.style.display = "none";
		y.style.display = "block";
	}
}

function showNote(id)
{
	var y = document.getElementById("body"+id);
	if (y.style.display === "none") {
		y.style.display = "inline";
	}
	else if(y.style.display === "inline"){
		y.style.display = "none";
	}

	var i = 0;
	for(i; i < note.length; i++)
	{
		if(i !== id)
		{
			document.getElementById("body"+i).style.display = "none";
		}
	}
}

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
	if ($(".navbar-custom").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	} else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	}
}