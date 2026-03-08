function menuopen(){
		document.getElementsByClassName("menuopen")[0].style.display = "none";
		document.getElementsByClassName("menuclose")[0].style.display = "block";
		document.getElementsByClassName("menutoggle")[0].style.display = "block";
}
function menuclose(){
		document.getElementsByClassName("menuclose")[0].style.display = "none";
		document.getElementsByClassName("menutoggle")[0].style.display = "none";
		document.getElementsByClassName("menuopen")[0].style.display = "block";
}

function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (10+o.scrollHeight)+"px";
}

function loadgif(){
		document.getElementsByClassName("loadgif")[0].style.display = "block";
}
function xloadgif(){
    document.getElementsByClassName("loadgif")[0].style.display = "none";
}

function merch(){
		document.getElementsByClassName("merch")[0].style.display = "block";
}

function xmerch(){
		document.getElementsByClassName("merch")[0].style.display = "none";
}

  function checkpass() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementsByClassName("nmatch")[0].style.display = "block";
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
    }
    else {
         document.getElementsByClassName("nmatch")[0].style.display = "none";
         loadgif();
    }
    return ok;
}

  function checkpass1() {
    var pass1 = document.getElementById("pass3").value;
    var pass2 = document.getElementById("pass4").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementsByClassName("nmatch1")[0].style.display = "block";
        document.getElementById("pass3").style.borderColor = "#E34234";
        document.getElementById("pass4").style.borderColor = "#E34234";
        ok = false;
    }
    else {
         document.getElementsByClassName("nmatch1")[0].style.display = "none";
         loadgif();
    }
    return ok;
}

function merchant(){
	    document.getElementsByClassName("customer")[0].style.display = "none";
		document.getElementsByClassName("merchant")[0].style.display = "block";
}

function customer(){
		document.getElementsByClassName("merchant")[0].style.display = "none";
		document.getElementsByClassName("customer")[0].style.display = "block";
}

