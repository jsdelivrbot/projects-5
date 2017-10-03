var InvescoWeb = InvescoWeb || {};

InvescoWeb.WebRewardsEventsDispatcher = {
	dispatch: function(eventid){
		$.ajax({ 
			url: "/ivz/award-points", 
			type: 'POST', 
		    data: "{\"eventid\":\"" + eventid + "\"}", 
			dataType: "json",
			contentType: 'application/json',
		    mimeType: 'application/json',
			cache: false,
			processData:false,
			success: function(data) { 
				return data.success;
		    },
			error:function(data,status,er) { 
				return false;
		    }
		});
	}
}

