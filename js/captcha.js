function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 4;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	//document.randform.randomfield.value = randomstring;
        document.getElementById("captcha_js_put").innerHTML=randomstring;
        document.getElementById("captcha_js").value=randomstring;
}
function echeck(str) {

    var at="@"
    var dot="."
    var lat=str.indexOf(at)
    var lstr=str.length
    var ldot=str.indexOf(dot)
    if (str.indexOf(at)==-1){
     


        return false
    }

    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
      
        return false
    }

    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){


       
        return false
    }

    if (str.indexOf(at,(lat+1))!=-1){
     
        return false
    }

    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){


       
        return false
    }

    if (str.indexOf(dot,(lat+2))==-1){
      
        return false
    }
   
    if (str.indexOf(" ")!=-1){


       
        return false
    }

    return true                   
}

////////////////////idil code start//////////////////
function cus_trim(strvar){
    return strvar.replace(/^\s+|\s+$/g, ''); 
}
function idilValidateForm(){
  
    var msg=new Array();
    var valid=1;
    var msg_body = document.getElementById("msg_body").value;
    //msg_body.trim();
    msg_body = cus_trim(msg_body);
    //alert(msg_body);
    if(msg_body == "Please enter your Message OR Enquiry" || msg_body == ""){
        msg[msg.length]="Please enter your Message OR Enquiry.";
        valid=0;
//        alert("Please enter your Message OR Enquiry.");
    }
    var first_name = document.getElementById("first_name").value;
   // first_name.trim();
    first_name = cus_trim(first_name);
//    alert(first_name);
     if(first_name == "Full Name"){    
        msg[msg.length]="Please enter your full name.";
        valid=0;
//       alert("Please enter your first name.")
    } 
//       return false;
    var email = document.getElementById("email").value;
    //email.trim();
    email = cus_trim(email);
//    alert(email);
    if(!echeck(email)){
        msg[msg.length]="Please enter your valid Email.";
        valid=0;
//       alert("Please enter your valid Email.")
    } 
//       return false;    
  
    var mobile = document.getElementById("mobile").value;
    //mobile.trim();
    mobile = cus_trim(mobile);
    mobilepattern = /^[0-9 \-]{10}$/;
    if(mobile == "Enter 10 digit mobile no." || (!mobilepattern.test(mobile))){         
        msg[msg.length]="Please enter 10 digit mobile no.";
        valid=0;
    }
    /*else if(!mobilepattern.test(mobile)){
        msg[msg.length]="Please enter valid mobile no.";   
        valid=0;   
    }*/
    
    /*if(mobile != "91-xxxxxxxxxx" && (!mobilepattern.test(mobile)) && (mobile.length < 10 || mobile.length > 12)) {   
        msg[msg.length]="Please enter valid mobile no.";   
        valid=0;   
    }*/
    var captcha = document.getElementById("captcha").value;
    //captcha.trim();
     captcha = cus_trim(captcha);
    var captcha_js = document.getElementById("captcha_js").value;
    //captcha_js.trim();
     captcha_js = cus_trim(captcha_js);
    captcha = captcha.toLowerCase(); 
   captcha_js = captcha_js.toLowerCase(); 
     captcha_js = cus_trim(captcha_js);
    
    if(captcha == "Type Captcha code"){    
        msg[msg.length]="Please enter captcha.";
        valid=0;
    }
    
     if(captcha != "Type Captcha code" && captcha != captcha_js){         
        msg[msg.length]="Please enter valid captcha.";
        valid=0;
    }
  // alert("tik");
    if(valid == 0){
        
        message_box="<ul>";
        for(i=0;i<msg.length;i++)
        {
            message_box+="<li>";
            message_box+=msg[i];
            message_box+="</li>";
        }
        message_box+="</ul>";
        document.getElementById("msg_validate").style.display="block";
        document.getElementById("msg_validate").innerHTML=message_box;
        return false;
//        window.location="contact-us.php#msg_validate";
//        return false;
    }
    else{
        return true;
    }
}


function scrollWin() {
    window.scrollTo(0, 710);
}