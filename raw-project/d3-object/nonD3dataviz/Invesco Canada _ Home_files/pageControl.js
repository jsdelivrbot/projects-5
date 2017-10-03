$(document).ready(
		function() 
		{
			doChangeLeftNavSelectedItem();
			
			// class
			$("body").on("click",".displayOptions", function () {
				var $this = $(this);
				var type = $this.data("type");
				var ucmDocumentId = $this.data("value");
				var displayTitle=$this.data("displaytitle").replace(/\&amp;/g,'&');
				displayTitle= displayTitle.replace(/\//g,'BACKSLH');
				var pageURL= $(location).attr('href');
				var productType= $this.data("producttype");
				var optionUrl = null;
				var index = -1;
				var ucmShareFlag = 0; //if 1 then is file to share not page
				
				// type we may have productType
				if(type === 'web')
				{
					optionUrl = type + "/" + displayTitle;
					
					if(ucmDocumentId && ($.trim(ucmDocumentId)).length > 0)
					{
						// if Mutual Fund make sure that the pageURL contains the proper
						// Fund id which is changed when you select another serie
						if("MF" === productType)
						{
							index = pageURL.lastIndexOf("/");
							if(index != -1)
							{
								pageURL = pageURL.substring(0,index + 1) + ucmDocumentId + pageURL.substring(pageURL.lastIndexOf("?"));
							}
						}
						
						optionUrl += "/product/" + productType + "/" + ucmDocumentId;
					}
				}
				else if (type === 'ucm')
				{
					optionUrl = type + "/" + ucmDocumentId;
					ucmShareFlag = 1;//is file to share
				}

				if(optionUrl)
				{
				    $.ajax({
				        type: "POST",
				        url: "/ivz/option/" + optionUrl,
				        data: {pageURL: pageURL},
				        success: function (data) 
				        {
				            $("#optionModalBox").html(data);
				            $("#optionModalBox" ).modal( "show" );
				             if(ucmShareFlag === 1) {
				           		pageURL = $("#directLinkURL").val();
				           	}
				            removeErrorDisplay();
				            updateSocialShare(displayTitle , pageURL);
				        }
					    ,
						error:function(data,status,er) 
						{
							console.log("/ivz/option->error: " + data.statusText + " status: " + status);
						}    
				    });
				}
			});
			
			$(".shoppingcart").on("click",function () 
	    			{
	    			    $.ajax({
	    			        type: "POST",
	    			        url: "/ivz/shoppingcart/viewShoppingCart",
	    			        success: function (data) 
	    			        {
	    			            $("#shoppingcartModalBox").html(data);
	    			            $("#shoppingcartModalBox" ).modal( "show" );
	    			        }
	    				    ,
	    					error:function(data,status,er) 
	    					{
	    						console.error("/ivz/shoppingcart/viewShoppingCart->error: " + data.statusText + " status: " + status);
	    					}    
	    			    });
	    		});
			
			// add to briefcase
		    $("#optionModalBox").on("click", "#moreOptions_briefcaseBTN", function() 
		    {
				var $this = $(this);
				var id = $this.data("value");
				var dDocType = $this.data("type");

		    	$.ajax({
			        type: "POST",
			        url: "/ivz/briefcase/add/" + dDocType + "/" + id,
					headers: { "cache-control": "no-cache" },
					cache: false,	
			        success: function (data) 
			        {
			        	clearOptionError();
			        	
			        	$("#optionErrors").text(data.errorMessage);
			        }
				    ,
					error:function(data,status,er) 
					{
						console.error("/ivz/briefcase/add->error: " + data.statusText + " status: " + status);
					}    
			    });
		    });			

		    // add order
		    $("#optionModalBox").on("click", "#moreOptions_orderBTN", function() 
		    {
		    	// contentItem is an object
		    	$.ajax({
			        type: "POST",
			        url: "/ivz/shoppingcart/addOrder",
			        data: JSON.stringify(contentItem),
			        contentType: "application/json",
					headers: { "cache-control": "no-cache" },
					cache: false,	
			        success: function (data) 
			        {
			        	clearOptionError();
			 
			        	$("#optionErrors").text(data.errorMessage);
			        }
				    ,
					error:function(response,status,er) 
					{
						console.error("/ivz/shoppingcart/addOrder->error: " + data.statusText + " status: " + status);
					}    
			    });
		    });
		    
		    // email submit
		    $("#optionModalBox").on("click", "#moreOptions_emailSend", function() 
		    {
		   	 $.ajax({
			     type: "POST",
			      url: $("#optionEmailForm").attr('action'),
		          headers: { "cache-control": "no-cache" },
		          cache: false,
			      data: $("#optionEmailForm").serialize(),
		          success: function(response) 
		          {
		        	  // write the little portion of html
		        	  $("#moreOptions_emailContainer").html(response);
		          },
		          error:function(data,status,er) 
		          {
		        	  console.error("option email submission->error: " + data.statusText + " status: " + status);
		       	 }
			    });
		    });    
		    
		    $("#optionModalBox").on("click", "#moreOptions_emailCancel", function() 
		    {
		    	clearOptionEmailError();
		    	clearFormElements();
		        $("#moreOptions_emailContainer").slideUp(800, function() {
		            $("#moreOptions_optionsContainer").slideDown(900);
		        });
		    });
		    
		    
		    $("#optionModalBox").on("click", "#moreOptions_emailBTN", function() 
		    {
		        $("#moreOptions_optionsContainer").slideUp(600, function() 
		        {
		            $("#moreOptions_emailContainer").slideDown(1000);
		        });
		    });
}); // End of doc ready

function clearOptionError()
{
	$("#optionErrors").text("");
}

function clearOptionEmailError()
{
	$("#optionEmailErrors").text("");
}

function clearFormElements()
{
	$(':input','#optionEmailForm').not(':button, :submit, :reset').val('');
}

/**
 * 
 * Highlight the selected navigation on the left NAV
 * 
 */
function doChangeLeftNavSelectedItem()
{
	// clear top navigation
	var listItems = $("#leftNavTopSection li");
	
	if(listItems.length)
	{
		listItems.each(function(idx, li) 
		{
		    if($(li).attr("id") == itemSelected)
		    	$(li).addClass('selected');
		    else
		    	$(li).removeClass('selected');
		});
	}

	// set the select option on left nav middle section
	var listItems = $("#leftNavMiddleSection li");
	if(listItems.length)
	{
		listItems.each(function(idx, li) 
		{
		    if($(li).attr("id") == itemSelected  && !$(li).hasClass("ivz_quickUseMenu"))
		    	$(li).addClass('selected');
		    else
		    	$(li).removeClass('selected');
		});
	}

	var listItems = $("#leftNavBottomSection li");
	
	if(listItems.length)
	{
		listItems.each(function(idx, li) 
		{
		    if($(li).attr("id") == itemSelected)
		    	$(li).addClass('selected');
		    else
		    	$(li).removeClass('selected');
		});
	}

	var listItems = $("#leftNavBottomSection2 li");
	
	if(listItems.length)
	{
		listItems.each(function(idx, li) 
		{
		    if($(li).attr("id") == itemSelected)
		    	$(li).addClass('selected');
		    else
		    	$(li).removeClass('selected');
		});
	}
	
}
function removeErrorDisplay() {
	if ($('#briefcaseFormId') !=null) {
		$(".errorMessage").text("");	
	}
}	

function updateSocialShare (title, url) {
	var facebookId = 1037696569587427;
	var twitterHandle = "invescoCanada";
	var encodedTitle = encodeURI(title);
	var encodedUrl = encodeURI(url);
	var encodedSource = encodeURI("www.invesco.ca");

	if (encodedTitle ==="") {
		//if is blank, then it is a PDF and we must grab title from the more Options modal
		var pdfTitle = $(".moreOptions_title").html();
		var pdfClass = $(".moreOptions_subClass").html();

		if (pdfTitle == undefined) {pdfTitle = ""};
		if (pdfClass == undefined) {pdfClass = ""};

		encodedTitle = encodeURI(pdfTitle + " | " + pdfClass);
	}

	$(".moreOptions_facebook").attr("href" , "https://www.facebook.com/dialog/share?app_id=" + facebookId +"&display=popup&href=" + encodedUrl + "&redirect_uri=" + encodedUrl +  "&description=" + encodedTitle);
	$(".moreOptions_twitter").attr("href" , "https://twitter.com/intent/tweet?text=" + encodedTitle + "&url=" + encodedUrl + "&via=" + twitterHandle);
	$(".moreOptions_linkedin").attr("href" , "https://www.linkedin.com/shareArticle?mini=true&url=" + encodedUrl + "&title=" + encodedTitle + "&source=" + encodedSource);

}
