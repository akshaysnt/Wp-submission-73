
 function myFunction() {

 

 var x = document.forms["ssc_form"]["fn"];

if (x.value == "") {
        alert("First name should not be blank!!");
        return false;
}


if (! allLetter(x)) {
	alert("First Name should be all characters!!");
	return false;
}


var m = document.forms["ssc_form"]["ln"];

if (m.value == "") {
	alert("Last Name should not be blank !!");
        return false;
}


if (! allLetter(m)) {
	alert("Last Name should be all characters!!");
	return false;
}
	
var n = document.forms["ssc_form"]["msn"];

if (n.value == "") {
        alert("Mothers name should not be blank!!");
        return false;
}


if (! allLetter(n)) {
	alert("Mothers Name should be all characters!!");
	return false;
}


var y = document.forms["ssc_form"]["add"];

  if (y.value == "") {
                alert("Address should not be blank !!");
		            
		return false;
            }

	if (! allLetter(y)) {
		 alert("Address should be all characters!!");
      return false;}
    



 function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }


            function allnumeric(inputtxt)
               {
                  var numbers = /^[0-9]+$/;
                  if(inputtxt.value.match(numbers))
                  {
                    return true;
                  }
                  else
                  {
                    return false;
                  }
               }

  

            function limit(element,limit)
              {
                var max_chars = limit;

                  if(element.value.length > max_chars) {
                    element.value = element.value.substr(0, max_chars);
                  }
              }

			
			 


}

