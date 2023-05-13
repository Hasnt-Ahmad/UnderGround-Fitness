function validation(){


    firstName=document.myForm.firstName.value;
    LastName=document.myForm.LastName.value;
    contactEmail=document.myForm.contactEmail.value;
    contactNumber=document.myForm.contactNumber.value;
    contactsubject=document.myForm.contactsubject.value;
    contactTextArea=document.myForm.contactTextarea.value;

   
    

    if(firstName=="" || LastName=="" || contactEmail=="" || contactNumber=="" || contactsubject=="" || contactTextArea=="" ){
        alert("Field Cannot be Empty");
        return false;
    }
    if((!isNaN(firstName))){
        alert("Name Cannot be Integer");
        return false;
    }
    if((!isNaN(LastName))){
        alert("Name Cannot be Integer");
        return false;
    }
    if((!isNaN(contactEmail))){
        alert("Name Cannot be Integer");
        return false;
    }
    if((!isNaN(contactsubject))){
        alert("Name Cannot be Integer");
        return false;
    }  
   
}
