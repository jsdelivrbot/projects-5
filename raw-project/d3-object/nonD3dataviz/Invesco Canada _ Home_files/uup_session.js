var InvescoWeb = InvescoWeb || {};

InvescoWeb.SessionManagement = function () {
		var servertime = this.getcookie('ivzsessionservertime');
		if (servertime != null){
			servertime = Math.abs(servertime);
			var clienttimeoffset = (new Date()).getTime() - servertime;
    		this.timeoffset = clienttimeoffset;
		}else this.timeoffset = null;
		$('#confirmSessionBTN').on("click",this.renewsession); 
};

InvescoWeb.SessionManagement.prototype.renewsession = function (){
		var t = this;
		$.ajax({
			type: "GET",
	    	url: "/ivz/session/renew",
			contentType: 'application/json',
		    mimeType: 'application/json',
			success: function (data){
				$('#sessionConfirm_modal').modal( "hide" );
	    	}
	    	,
	    	error:function(data,status,er){
				$('#sessionConfirm_modal').modal( "hide" );
			}   
	    });
};

InvescoWeb.SessionManagement.prototype.hasdecision = false;

InvescoWeb.SessionManagement.prototype.isrenew = false;

InvescoWeb.SessionManagement.prototype.timer = null;

InvescoWeb.SessionManagement.prototype.getcontextpath = function (){
	return window.location.pathname.substring(0, window.location.pathname.indexOf("/",2));
};

InvescoWeb.SessionManagement.prototype.invalidatesession = function (){
		var ctx = this.getcontextpath();
		window.location.href = ctx + '/session/invalidate';
};

InvescoWeb.SessionManagement.prototype.getcookie = function (cname){
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++){
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		};
		return null;
};

InvescoWeb.SessionManagement.prototype.checksession = function (){
		var sessionexpiry = this.getcookie('ivzsessionserverexpiry');
   		if (sessionexpiry == null || this.timeoffset == null){
			clearInterval(this.timer);
			return null;
		}
   		var localtime = (new Date()).getTime();
		if (localtime - this.timeoffset > (sessionexpiry - 30000)){
			clearInterval(this.timer);
			this.invalidatesession();
		}else if ((localtime - this.timeoffset > (sessionexpiry - 120000))){
			$('#sessionConfirm_modal').modal('show');
		}else{
		}
};


InvescoWeb.SessionManagement.prototype.startmonitor = function (){
	var t = this;
	this.timer = setInterval(function(){t.checksession();}, 10000);
}




