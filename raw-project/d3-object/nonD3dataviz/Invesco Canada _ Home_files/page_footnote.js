       $(document).ready(function(){        		
    	   doAjaxDashboardRightSideBarLoadContent();    	       	   
       });//End of doc ready
   

		function doAjaxDashboardRightSideBarLoadContent() {
			
	      	 var contextPathVal = $('#contextPathId').val();	       	 
	       	
	         $.ajax({
	             type: "GET",    	 
	             url: contextPathVal + "/page-footnote/getfootnotecontent",	             
	             headers: { "cache-control": "no-cache" },
	             cache: false,
	             success: function(response) {
//	            	console.log('calling right side bar data load for dashboard ');
	            	$('#pageFootnoteID').html(response);
	            	},
	         	 error:function(data,status,er) {
	         		console.error("error: "+data.statusText+" status: "+status);
	         	 }
	         });		
		}		