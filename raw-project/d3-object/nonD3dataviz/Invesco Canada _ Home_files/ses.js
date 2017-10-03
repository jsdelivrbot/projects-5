//AutoComplete Functions to top Nav searchbox
			$(document).ready(function() {
				
//				$(".ivz_sesSearchBTN").on("click", function () {
//						$(this).parent().submit();
//				});
						
				$('.ivz_sesSearchBTN').on('click', function() {
					var $this= $(this);
					var thisField = $this.prev("input").val();
					if(thisField.trim().length > 0){
						$this.prev("input").val(thisField);
						$this.closest("form").submit();
					}
		            return false;

					//var thisField = $this.prev("input").val();

					//var url = "/ivz/search-results?q=";
					//if(thisField.length > 0){
					//	window.location = url+thisField;
					//}
				});
				
			    $('#navFormQ').keydown(function(event) {
			        if (event.keyCode == 13) {
						var $this= $(this);
						var thisField = $this.val();
						if(thisField.trim().length > 0){
				            this.form.submit();
						}
			            return false;
			         }
			    });
			    
			    $('#navMobileFormQ').keydown(function(event) {
			        if (event.keyCode == 13) {
						var $this= $(this);
						var thisField = $this.val();
						if(thisField.trim().length > 0){
				            this.form.submit();
						}
			            return false;
			         }
			    });
			    
	            $("#navFormQ").autocomplete({ 
	                source: function (request, response) { 
		       	     var contextPathVal = $('#contextPathId').val();	       	 
	       	      	 var contextLocalLang = $('#localLang').val();	       	 
	                    $.ajax({ 
	                        type: "GET", 
	                        contentType: "application/json; charset=UTF-8", 
	                        url: contextPathVal+"/autosuggest", 
	                        dataType: "json", 
	                        data: "key=" + encodeURIComponent(request.term)  + "&lang="+contextLocalLang, 
	                        success: function (data) {
	             
	                                response($.map(data.suggests, function (item) { 
	                                    return { 
	                                        label: item, 
	                                        value: item 
	                                    }; 
	                                }));
	                                formatautoCompletePanel();
	                        } 
	                    }); 
	                }, 
	                minLength: 3, 
	                select: function (event, ui) { 
	                	$("#navFormQ").val(ui.item.label);
						this.form.submit();
	                },
	                messages: {
	                    noResults: '',
	                    results: function() {}
	                }
	            }); 
			 });		
//AutoComplete Functions for main body searchbox
			$(document).ready(function() {
//				$(".ivz_sesSearchBTN").on("click", function () {
//					this.navForm.submit();
//				});

				$('.ivz_sesMainSearchBTN').on('click', function() {
					var $this= $(this);
					var thisField = $this.prev("input").val();
					if(thisField.trim().length > 0){
						$this.closest("form").submit();
					}
		            return false;

					//var thisField = $this.prev("input").val();

					//var url = "/ivz/search-results?q=";
					//if(thisField.length > 0){
					//	window.location = url+thisField;
					//}
				});

				$('#requeryQ').keydown(function(event) {
			        if (event.keyCode == 13) {
						var $this= $(this);
						var thisField = $this.val();
						if(thisField.trim().length > 0){
				            this.form.submit();
						}
			            return false;
			         }
			    });
			    
	            $("#requeryQ").autocomplete({ 
	                source: function (request, response) { 
		       	      	 var contextPathVal = $('#contextPathId').val();	       	 
		       	      	 var contextLocalLang = $('#localLang').val();	       	 
	                    $.ajax({ 
	                        type: "GET", 
	                        contentType: "application/json; charset=UTF-8", 
	                        url: contextPathVal+"/autosuggest", 
	                        dataType: "json", 
	                        data: "key=" + encodeURIComponent(request.term) + "&lang="+contextLocalLang, 
	                        success: function (data) { 
	                                response($.map(data.suggests, function (item) { 
	                                    return { 
	                                        label: item, 
	                                        value: item 
	                                    }; 
	                                }));
	                        } 
	                    }); 
	                }, 
	                minLength: 3, 
	                select: function (event, ui) { 
	                	$("#requeryQ").val(ui.item.label);
						this.form.submit();
	                },
	                messages: {
	                    noResults: '',
	                    results: function() {}
	                }
	            }); 
            });
			
function formatautoCompletePanel () {
	var currWidth = $("#navFormQ").parent().parent().width() + "px";
	$("#ui-id-1").css('width' , currWidth);
}