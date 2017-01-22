changePasswordVisiblity= function (what, id) {  
                what = parseInt(what,10);  
                var theEl = document.getElementById(id);  
      
                if (what === 1) { //show  
                    $(theEl).vendorCss("TextSecurity","none");  
                } else {  
                    $(theEl).vendorCss("TextSecurity","disc");  
                }  
                if(!$.os.webkit) {  
                    if(what === 1)  
                        theEl.type="text";  
                    else  
                        theEl.type="password";  
                }  
                theEl = null;  
            }
function ShowHidePW() {  
  
    if (!pwState) {  
        pwFixer.changePasswordVisiblity(1,"password");  
        pwState = true;  
    } else {  
        pwFixer.changePasswordVisiblity(0,"password");  
        pwState = false;  
    }  
}  			