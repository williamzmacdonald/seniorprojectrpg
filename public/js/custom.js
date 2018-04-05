/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

document.getElementById('cl').onclick = function(){clear()};

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar-custom").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

//this function can remove a array element. (removes pop-up chats)
Array.remove = function(array, from, to) {
    var rest = array.slice((to || from) + 1 || array.length);
    array.length = from < 0 ? array.length + from : from;
    return array.push.apply(array, rest);
};

//this variable represents the total number of popups can be displayed according to the viewport width
var total_popups = 0;

//arrays of popups ids
var popups = [];

//this is used to close a popup
function close_popup(id)
{
    for(var iii = 0; iii < popups.length; iii++)
    {
        if(id == popups[iii])
        {
            Array.remove(popups, iii);
            
            document.getElementById(id).style.display = "none";
            
            calculate_popups();
            
            return;
        }
    }   
}

//displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
function display_popups()
{
    var right = 220;
    
    var iii = 0;
    for(iii; iii < total_popups; iii++)
    {
        if(popups[iii] != undefined)
        {
            var element = document.getElementById(popups[iii]);
            element.style.right = right + "px";
            right = right + 320;
            element.style.display = "block";
        }
    }
    
    for(var jjj = iii; jjj < popups.length; jjj++)
    {
        var element = document.getElementById(popups[jjj]);
        element.style.display = "none";
    }
}

//creates markup for a new popup. Adds the id to popups array.
function register_popup(id, name)
{
    
    for(var iii = 0; iii < popups.length; iii++)
    {   
        //already registered. Bring it to front.
        if(id == popups[iii])
        {
            Array.remove(popups, iii);
        
            popups.unshift(id);
            
            calculate_popups();
            
            
            return;
        }
    }               
    
    var element = '<div class="popup-box chat-popup" id="'+ id +'">';
    element = element + '<div class="popup-head">';
    element = element + '<div class="popup-head-left">'+ name +'</div>';
    element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
    element = element + '<div style="clear: both"></div></div><div class="popup-messages"></div></div>';
    
    document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element;  

    popups.unshift(id);
            
    calculate_popups();
    
}

//calculate the total number of popups suitable and then populate the toatal_popups variable.
function calculate_popups()
{
    var width = window.innerWidth;
    if(width < 540)
    {
        total_popups = 0;
    }
    else
    {
        width = width - 200;
        //320 is width of a single popup box
        total_popups = parseInt(width/320);
    }
    
    display_popups();
    
}

//recalculate when window is loaded and also when window is resized.
window.addEventListener("resize", calculate_popups);
window.addEventListener("load", calculate_popups);

function check_web_storage_support() {
    if(typeof(Storage) !== "undefined") {
        return(true);
    }
    else {
        alert("Web storage unsupported!");
        return(false);
    }
}

function addnew() {
    var x = document.getElementById('list');
    var y = document.getElementById('note');
    if (x.style.display != "none") {
        x.style.display = "none";
        y.style.display = "block";
    }
}

function save() {
    var x = document.getElementById('list');
    var y = document.getElementById('note');
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
    }
	var formData = {
		title: document.getElementById('title').val(),
		description: document.getElementById('area').val(),
	}
	
	$.ajax({

            type: "POST",
            url: "notes",
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data);

                var note = '<tr id="task' + data.id + '"><td>' + data.id + '</td><td>' + data.task + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                note += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                note += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.id + '">Delete</button></td></tr>';
				$('#list').append(note);
                

                $('#frmTasks').trigger("reset");

                $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
	
}

function clear() {
    document.getElementById('area').value = "";
    document.getElementById('title').value = ""; 
}

function openNav() {
    document.getElementById("mySidenav").style.height = "100px";
    document.getElementById("pgs").style.marginBottom = "100px";
}

function closeNav() {
    document.getElementById("mySidenav").style.height = "0";
    document.getElementById("pgs").style.marginBottom = "0";
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