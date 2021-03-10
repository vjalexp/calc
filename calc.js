// Модульная реклама //
function stepMinus1() {
myInit = document.getElementById("repeater1").value;
if(myInit>1) {
document.getElementById("repeater1").value = +myInit-1;
	}
}
function stepPlus1() {
myInit = document.getElementById("repeater1").value;
if(myInit<30) {
document.getElementById("repeater1").value = +myInit+1;
	}
}

// Строчная реклама //
function stepMinus2() {
myInit = document.getElementById("repeater2").value;
if(myInit>1) {
document.getElementById("repeater2").value = +myInit-1;
	}
}
function stepPlus2() {
myInit = document.getElementById("repeater2").value;
if(myInit<30) {
document.getElementById("repeater2").value = +myInit+1;
	}
}

// Частные объявления //
function countit(what){
formcontent=what.form.charcount.value
what.form.displaycount.value=formcontent.length
}
