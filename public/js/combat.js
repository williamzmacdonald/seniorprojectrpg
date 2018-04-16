$("#edit_combat").click(function(event) {
    event.preventDefault();
    var x = document.getElementById("combat_list").querySelectorAll(".delete_combat");
    var y = document.getElementById("combat_list").querySelectorAll(".player_combat");
    var z = document.getElementById("combat_list").querySelectorAll(".avatar_combat");
    var a = document.getElementById("combat_list").querySelectorAll(".health");
    var b = document.getElementById("combat_list").querySelectorAll(".initiative");
    var c = document.getElementById("combat_list").querySelectorAll(".add_combat");

    var i = 0;
    for(i; i < x.length; i++) {
        if(x[i].style.display != "none") {
            x[i].style.display = "none";
            y[i].style.left = "40px";
            z[i].style.marginLeft = "0";
            a[i].style.right = "100px";
            b[i].style.right = "25px";
            c[i].style.display = "none";
        }
        else {
            x[i].style.display = "block";
            y[i].style.left = "125px";
            z[i].style.marginLeft = "80px";
            a[i].style.right = "150px";
            b[i].style.right = "75px";
            c[i].style.display = "block";
        }
    }
});