function isValid(){
    var Aid = document.forms['AForm']['Aid'].value;
    var Aname = document.forms['AForm']['Aname'].value;
    var Aemail = document.forms['AForm']['Aemail'].value;
    
    if(Aid === ""){
    document.getElementById('AidjsE').innerHTML = "*Applicaint  id empty";
    
    }
    if(Aname === ""){
    document.getElementById('AnamejsE').innerHTML = "*Applicaint name empty";
    
    }
    if(Aemail === ""){
    document.getElementById('AemailjsE').innerHTML = "*Email  empty";
     return false;
    }
    
    
    else{
        return true;
    }
    
    }