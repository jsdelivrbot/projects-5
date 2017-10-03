var InvescoWeb = InvescoWeb || {};

InvescoWeb.BehaviorTracking = function () {
		var screenresolution = this.getcookie('uupid99991');
		if (screenresolution == null){
			screenresolution = $(window).width() + ' x ' + $(window).height();
			this.setcookie('uupid99991',screenresolution);
		};
};

InvescoWeb.BehaviorTracking.prototype.getcontextpath = function (){
		return window.location.pathname.substring(0, window.location.pathname.indexOf("/",2));
};


InvescoWeb.BehaviorTracking.prototype.gethostname= function (){
		return window.location.hostname;
};

InvescoWeb.BehaviorTracking.prototype.gethostnamefromurl= function (url){
		var hostname = '';
		if (url.indexOf('//') != -1){
			hostname = url.substring(url.indexOf('//')+2);
			if (hostname.indexOf('/') != -1){
				hostname = hostname.substring(0, hostname.indexOf('/'));
			}
		};
		return hostname;
};

InvescoWeb.BehaviorTracking.prototype.ishashonly= function (href){
		return href.indexOf('#') == 0;
};

InvescoWeb.BehaviorTracking.prototype.isqueryonly= function (href){
		return href.indexOf('?') == 0;
};

InvescoWeb.BehaviorTracking.prototype.hasjavascript= function (href){
		return href.indexOf('javascript:void') != -1;
};

InvescoWeb.BehaviorTracking.prototype.isprint= function (href){
		return href.indexOf('javascript:window') != -1;
};


InvescoWeb.BehaviorTracking.prototype.iswebresource= function (href){
		return href.indexOf('/ivz/resources') != -1;
};

InvescoWeb.BehaviorTracking.prototype.sharedbytwitter= function (href){
		return href.indexOf('https://twitter.com/share') != -1;
};

InvescoWeb.BehaviorTracking.prototype.iscrossdomain = function (url){
		var t = this;
		if (!url || 0 === url.length) return false;
		if (t.hasjavascript(url)) return false;
		if (t.ishashonly(url)) return false;
		if (t.isprint(url)) return false;
		if (t.isqueryonly(url)) return false;
		if (t.iswebresource(url)) return true;
		var hostnamefromurl = t.gethostnamefromurl(url);
		var hostname = t.gethostname();
		if (hostnamefromurl != null && hostnamefromurl.length > 0) return !(hostname.toUpperCase() === hostnamefromurl.toUpperCase());
		var context = t.getcontextpath();
		if (url.indexOf(context) == -1) return true;
		return false;
};

InvescoWeb.BehaviorTracking.prototype.isinpage = function (data){
		var t = this;
		var toggle = data['data-toggle'];
		var id = data['id'];
		if (toggle != 'undefined' && toggle == 'tab' && id != 'undefined'){
			return true;
		};
		return false;
}

InvescoWeb.BehaviorTracking.prototype.trackcrossdomain = function (param){
		$.ajax({ 
			url: "/ivz/track-crossdomain", 
			type: 'POST', 
			data: param,
			dataType: 'text',
			contentType: 'application/x-www-form-urlencoded',
			cache: false,
			processData:true,
			headers: {
				'X-Requested-With-BT': 'CrossDomainHttpRequest',
		    },
			success: function(data) { 
				return true;
		    },
			error:function(data,status,er) { 
				return false;
		    }
		});
};

InvescoWeb.BehaviorTracking.prototype.trackinpage = function (data){
		var param = 'data-toggle=' + data['data-toggle'];
		param = param + '&id=' + data.id;
		$.ajax({ 
			url: "/ivz/track-inpage", 
			type: 'POST', 
			data: param,
			dataType: 'text',
			contentType: 'application/x-www-form-urlencoded',
			cache: false,
			processData:true,
			headers: {
				'X-Requested-With-BT': 'InPageHttpRequest',
		    },
			success: function(data) { 
				return true;
		    },
			error:function(data,status,er) { 
				if (data.status == 408){
					var ctx = window.location.pathname.substring(0, window.location.pathname.indexOf("/",2));
					window.location.href = ctx + '/session/invalidate';
				}
				return false;
		    }
		});
};

InvescoWeb.BehaviorTracking.prototype.trackevents = function (data){
		var param = 'event_type=' + data['event_type'];
		$.ajax({ 
			url: "/ivz/track-events", 
			type: 'POST', 
			data: param,
			dataType: 'text',
			contentType: 'application/x-www-form-urlencoded',
			cache: false,
			processData:true,
			headers: {
				'X-Requested-With-BT': 'EventsHttpRequest',
		    },
			success: function(data) { 
				return data.refresh;
		    },
			error:function(data,status,er) { 
				return false;
		    }
		});
};


InvescoWeb.BehaviorTracking.prototype.getcookie = function (cname){
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++){
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		};
		return null;
};

InvescoWeb.BehaviorTracking.prototype.setcookie = function (cname,cvalue){
		var expires = '; expires=Fri, 31 Dec 9999 23:59:59 GMT';
		var path = '; path=' + this.getcontextpath();
		document.cookie = cname+"=" + cvalue + expires + path + '; secure';
};

InvescoWeb.BehaviorTracking.prototype.bindanchorlinks = function (){
		var t = this;
		$(document).on('click','a',function(event){
			//event.preventDefault();
			var url = $(this).attr('href');
			var elem = $(this);
			var data = {};
			for (var att, i = 0, atts = elem.get(0).attributes, n = atts.length; i < n; i++){
			    att = atts[i];
				data[att.nodeName] = att.nodeValue;
			}
			if (t.iscrossdomain(url)){
				elem.attr( "target", "_blank" );
				var param = 'externalurl=' + url;
				if (t.sharedbytwitter(url)){
					param = param + '&sharedmethod=twitter';
					var sharedurl = $(this).data('url');
					if (sharedurl){
						param = param + '&sharedurl=' + sharedurl;
					}
				}
				t.trackcrossdomain(param);
			}else if (t.isprint(url)){
				var data = {};
				data['event_type'] = 'print'; 
				t.trackevents(data);
			}else if (t.isinpage(data)){
				t.trackinpage(data);
			}
		});
};

InvescoWeb.BehaviorTracking.prototype.bindclicks = function (){
		var t = this;
		$(document).on('click','#ivz_pageControls_print',function(event){
				var data = {};
				data['event_type'] = 'print'; 
				data['event_url'] = $(location).attr('href'); 
				t.trackevents(data);
		});
}

InvescoWeb.BehaviorTracking.prototype.track = function (){
		this.bindanchorlinks();
		this.bindclicks();
};






