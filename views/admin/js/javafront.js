

function verifm (){
	 if (f.refe.value=='')
	 {
	alert ("Please Enter a reference  ");
	return false;
	}
	else if(isNaN(f.marque.value)==false) {
		alert ("Please Enter a valid marque")	;
	
    }	
    

	
	else if (f.destinataire.value=='choose...')
	{ 
	alert ("Choose a type ");
	return false;
	}	
	
	else if (isNaN(f.prix.value)) {
		alert ("only numbers ");
	return false;
		
	}
	
	else if (isNaN(f.qte.value)) {
		alert ("only numbers ");
	return false;
		
	}
	else if (f.desciption.value=='') 
	{
		alert ("Description");
	return false;
	}
	
	
			alert ("Welcome Among Us") ;
		
		
}

function verifcat (){
	 if (f.refe.value=='')
	 {
	alert ("Please Enter Correctly a reference  ");
	return false;
	}
	else if(f.nomc.value == '' ) {
		alert ("Please Enter Categorie Name")	;
		return ;
    }
	
	
			alert ("Done !!!") ;
		
		
}



