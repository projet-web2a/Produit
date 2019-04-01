function verifm (){
	 if (f.username.value=='')
	 {
	alert ("Please Enter your username  ");
	return false;
	}
	else if(f.mail.value == '' || f.mail.value.indexOf('@') == -1 || f.mail.value.indexOf('.') == -1) {
		alert ("Invalid Email")	;
		return false ;
    }
	else if (f.pwd.value=='')
	{ 
	alert ("Check your password ");
	return false;
	}	
	else if (f.pwd.value.length<9) 
	{
		alert ("Password must have more than 8 caracters");
	return false;
	}
	
	else if (f.agree.checked==false)
	{ 
	return false;
	}
			alert ("Welcome Among Us") ;
		
		
}