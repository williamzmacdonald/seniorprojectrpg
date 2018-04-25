$("#edit_combat").click(function(event) {
    event.preventDefault();
    var a = document.getElementById("combat_list").querySelectorAll(".health");
    var b = document.getElementById("combat_list").querySelectorAll(".initiative");
    var c = document.getElementById("combat_list").querySelectorAll(".delete_combat");
    var d = document.getElementById("add_combat");
    var e = document.getElementById("combat_list").querySelectorAll(".update_combat");
    var f = document.getElementById("combat_list").querySelectorAll(".avatar_combat");
    var g = document.getElementById("combat_list").querySelectorAll(".player_combat");

    var i = 0;
    for(i; i < c.length; i++) {
        if(c[i].style.display != "none") {
            a[i].style.right = "100px"; a[i].contentEditable = false;
            b[i].style.right = "25px"; b[i].contentEditable = false;
            c[i].style.display = "none";
            e[i].style.display = "none";
            f[i].style.left = "25px";
            g[i].style.left = "50px"; g[i].contentEditable = false;
        }
        else {
            a[i].style.right = "150px"; a[i].contentEditable = true;
            b[i].style.right = "75px"; b[i].contentEditable = true;
            c[i].style.display = "block";
            e[i].style.display = "block";
            f[i].style.left = "100px";
            g[i].style.left = "125px"; g[i].contentEditable = true;
        }
    }
});