function openNav() {
	document.getElementById("mySidenav").style.height = "100px";
}

function closeNav() {
	document.getElementById("mySidenav").style.height = "0";
}

function allowDrop(ev) {
	ev.preventDefault();
}

function drag(ev) {
	ev.dataTransfer.setData("text/html", ev.target.id);
	var img = new Image();
	img.src = 'eye.png';
	ev.dataTransfer.setDragImage(img, 10, 10);
}

function drop(ev, target) {
	ev.preventDefault();
	document.getElementById('add').style.display = "none";
	var data = ev.dataTransfer.getData("text/html");
	if(data === 'drag-npc')
	{
	   appendNPC();
	}
	else if(data == 'drag-notes')
	{
		appendNotes();
	}
	//$(event.target).attr("id");
}

function appendNPC() {
	$("#npc").clone().appendTo("#appendArea");
	document.getElementById("npc").style.display = "inline";
}


function appendNotes()
{
	$("#notes").clone().appendTo("#appendArea");
	document.getElementById("notes").style.display = "inline";
}