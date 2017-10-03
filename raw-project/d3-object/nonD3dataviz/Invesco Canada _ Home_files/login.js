$(document).ready(function(){
	$("#loginsubmit").on("click", function(){login('loginformid', 'loginsubmit', 'loginerror', 'username');});
	$('#loginformid').keydown(function(e) {
		var key = e.which;
		if (key == 13) {
			login('loginformid', 'loginsubmit', 'loginerror', 'username');
		}
	});
	$("#mobileloginsubmit").on("click", function(){login('mobileloginformid', 'mobileloginsubmit', 'mobileloginerror', 'mobileusername');});
	$('#mobileloginformid').keydown(function(e) {
		var key = e.which;
		if (key == 13) {
			login('mobileloginformid', 'mobileloginsubmit', 'mobileloginerror', 'mobileusername');
		}
	});

});

function getContextPath() {
   return window.location.pathname.substring(0, window.location.pathname.indexOf("/",2));
}


function login(loginformid, loginsubmit, loginerror, username){
	    form_url = "/ivz/log-in/modal";    
	    $('#' + loginsubmit).attr("disabled", true);    
	    $('#' + loginerror).html('');
	    $.post(form_url, $('#' + loginformid).serialize(), function(data)
	    		{           
	                if (data && data.error == true)
	                {
						$('#' + username).val(data.username);
	                    $('#' + loginerror).text(data.message).html();
	                }
	                else if (data && data.error == false)
	                {
	                    if (data.message.length == 0)
	                    {
							var ctx = getContextPath();
							var redirecturl = data.redirecturl;
							if (redirecturl.indexOf('/change-password') != -1){
		                        window.location.href = ctx + redirecturl;
							}else{
								if(redirecturl.indexOf('/client/list')!=-1){ //for investor
									window.location.href = ctx + data.redirecturl;
									return;
								}
								redirecturl = window.location.href;
								if (redirecturl.indexOf('/forgot-user-id') != -1 || redirecturl.indexOf('/forgot-password') != -1 || 
										redirecturl.indexOf('/change-password') != -1 || redirecturl.indexOf('/registration') != -1 ||
										redirecturl.indexOf('/investor-registration') != -1 ||
										redirecturl.indexOf('/home') != -1 || redirecturl.indexOf('/error') != -1){
									if(data.redirecturl==''){
										if(data.userType=='' || data.userType=='investor')
											window.location.href = ctx + '/client/list';
										else
											window.location.href = ctx + '/dashboard';
									}
									else	
										window.location.href = ctx + data.redirecturl;
								}else{
									window.location.href = window.location.href.split("#")[0];
								}
							}
	                    }
	                    else{
						}
	                }
	                $('#' + loginsubmit).attr("disabled", false);    
	            }    
	    );     
}

function getCookie(cname){
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++){
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		}
		return "";
}


function bin2String(array){
		var result = "";
		for (var i = 0; i < array.length; i++){
			result += String.fromCharCode(parseInt(array[i]));
		}
		return result;
}


function hex2Bin(str){
		var result = [];
		if (str == null || str.length == 0 || str.length % 2 != 0) return result;
		for (var i = 0; i <= str.length - 2; i++){
			if (i % 2 == 0){
				result.push('0x' + str.substring(i, i+2));
			}
		}
		return result;
}


