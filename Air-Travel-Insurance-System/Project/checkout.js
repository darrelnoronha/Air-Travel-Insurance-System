 
 
 function validateForm(){
   var y = document.forms["fam"]["zip"].value;
    var x = document.forms["fam"]["ccnum"].value;
    var a = document.forms["fam"]["expyear"].value;
    var b = document.forms["fam"]["cvv"].value;
    alert(y);
 document.getElementById("zip").style.borderColor = '#c9e6ff';
 document.getElementById("ccnum").style.borderColor = '#c9e6ff';  
 document.getElementById("expyear").style.borderColor = '#c9e6ff';
 document.getElementById("cvv").style.borderColor = '#c9e6ff';
      if (isNaN(y) || y.length < 6 || y.length > 6) {
        document.getElementById("zip").style.borderColor = 'red';
      return false;
      }
    
      if (isNaN(x) || x.length < 16 || x.length > 16) {
        document.getElementById("ccnum").style.borderColor = 'red';
      return false;
      }
      
      if (isNaN(a) || a.length < 4 || a.length > 4) || a < 2019 || a > 2025 {
        document.getElementById("expyear").style.borderColor = 'red';
      return false;
      }
	  if (isNaN(b) || b.length < 3 || b.length > 3) {
        document.getElementById("cvv").style.borderColor = 'red';
      return false;
      }
}