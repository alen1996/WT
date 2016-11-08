function validacijaForme() {
var x = document.forms["forma"]["polje"].value;
if (x == null || x == "") {
alert("Morate unijeti vrijednost poljsa");
return false;
}
}

function validacijaForme2() 
{

var x = document.forms["forma2"]["korisnik"].value;
var y = document.forms["forma2"]["password"].value;

if (x == null || x == ""||y == null || y == "") {
alert("Morate unijeti vrijednost svih  poljoa pravilno");
return false;
}
}




function validacijaForme5() {
var x5 = document.forms["forma5"]["adresa"].value;
var y5 = document.forms["forma5"]["fname"].value;
 



if (x5 == null || x5 == ""||y5 == null || y5 == ""||(!x5.includes("@")) ||(!x5.includes("."))) {
alert("Morate unijeti vrijednost polja pravilno");
return false;
}
}









function inputFocus(i){
    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
}
function inputBlur(i){
    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
}


