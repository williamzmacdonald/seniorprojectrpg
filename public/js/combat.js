$("#edit_combat").click(function(event) {
    event.preventDefault();
    var a = document.getElementById("combat_list").querySelectorAll(".health");
    var b = document.getElementById("combat_list").querySelectorAll(".initiative");
    var c = document.getElementById("combat_list").querySelectorAll(".delete_combat");
    var d = document.getElementById("add_combat");

    var i = 0;
    for(i; i < c.length; i++) {
        if(c[i].style.display != "none") {
            a[i].style.right = "100px";
            b[i].style.right = "25px";
            c[i].style.display = "none";
            d.style.display = "none";
        }
        else {
            a[i].style.right = "150px";
            b[i].style.right = "75px";
            c[i].style.display = "block";
            d.style.display = "block";
        }
    }
});