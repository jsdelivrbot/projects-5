$(document).ready(function()
{  
});

(function($){
    $.fn.extend({
        tableExport: function(options) {
            var defaults = {
					separator: ',',
					ignoreColumn: [],
					tableName:'yourTableName',
					type:'csv',
					pdfFontSize:14,
					pdfLeftMargin:20,
					escape:'true',
					htmlContent:'false',
					consoleLog:'false',
					worksheet: 'worksheet',
					displayHidden: 'false',
					hiddenTable:'yourHiddenTableName'
			};
            
			var options = $.extend(defaults, options);
			var el = this;
			
			if(defaults.type == 'csv' || defaults.type == 'txt')
			{
				// Header
				var tdData ="";
				$(el).find('thead').find('tr').each(function() {
				tdData += "\n";					
					$(this).filter(':visible').find('th').each(function(index,data) {
						if ($(this).css('display') != 'none'){
							if(defaults.ignoreColumn.indexOf(index) == -1){
								tdData += '"' + parseString($(this)) + '"' + defaults.separator;									
							}
						}
						
					});
					tdData = $.trim(tdData);
					tdData = $.trim(tdData).substring(0, tdData.length -1);
				});
				
				// Row vs Column
				$(el).find('tbody').find('tr').each(function() {
				tdData += "\n";
					$(this).filter(':visible').find('td').each(function(index,data) {
						if ($(this).css('display') != 'none'){
							if(defaults.ignoreColumn.indexOf(index) == -1){
								tdData += '"'+ parseString($(this)) + '"'+ defaults.separator;
							}
						}
					});

					tdData = $.trim(tdData).substring(0, tdData.length -1);
				});
				
				//output
				if(defaults.consoleLog == 'true')
				{
					console.log(tdData);
				}
				
				var base64data = "base64," + $.base64.encode(tdData);
				window.open('data:application/'+defaults.type+';filename=exportData;' + base64data);
			}
			else if(defaults.type == 'json')
			{
				var jsonHeaderArray = [];
				// get the header
				$(el).find('thead').find('tr').each(function() 
				{
					var jsonArrayTd = [];
				
					$(this).filter(':visible').find('th').each(function(index,data) {
						if ($(this).css('display') != 'none')
						{
							if(defaults.ignoreColumn.indexOf(index) == -1)
							{
								jsonArrayTd.push(parseString($(this)));									
							}
						}
					});									
					jsonHeaderArray.push({th:jsonArrayTd});						
					
				});
				
				var jsonArray = [];
				$(el).find('tbody').find('tr').each(function(){
					var jsonArrayTd = [];
				
					$(this).filter(':visible').find('td').each(function(index,data) 
					{
						if ($(this).css('display') != 'none')
						{
							if(defaults.ignoreColumn.indexOf(index) == -1)
							{
								jsonArrayTd.push(parseString($(this)));									
							}
						}
					});
					
					jsonArray.push({row:jsonArrayTd});
				});
				
				var jsonExportArray =[];
				jsonExportArray.push({header:jsonHeaderArray,data:jsonArray});
				
				var base64data = "base64," + $.base64.encode(JSON.stringify(jsonExportArray));
				window.open('data:application/json;filename=exportData;' + base64data);
			}
			else if(defaults.type == 'xml')
			{
			
				var xml = '<?xml version="1.0" encoding="utf-8"?>';
				xml += '<tabledata><fields>';

				// Header
				$(el).find('thead').find('tr').each(function() {
					$(this).filter(':visible').find('th').each(function(index,data) {
						if ($(this).css('display') != 'none'){					
							if(defaults.ignoreColumn.indexOf(index) == -1){
								xml += "<field>" + parseString($(this)) + "</field>";
							}
						}
					});									
				});					
				xml += '</fields><data>';
				
				// Row Vs Column
				var rowCount=1;
				$(el).find('tbody').find('tr').each(function() {
					xml += '<row id="'+rowCount+'">';
					var colCount=0;
					$(this).filter(':visible').find('td').each(function(index,data) {
						if ($(this).css('display') != 'none'){	
							if(defaults.ignoreColumn.indexOf(index) == -1){
								xml += "<column-"+colCount+">"+parseString($(this))+"</column-"+colCount+">";
							}
						}
						colCount++;
					});															
					rowCount++;
					xml += '</row>';
				});					
				xml += '</data></tabledata>';
				
				if(defaults.consoleLog == 'true'){
					console.log(xml);
				}
				
				var base64data = "base64," + $.base64.encode(xml);
				window.open('data:application/xml;filename=exportData;' + base64data);

			}
			else if(defaults.type == 'excel' || defaults.type == 'doc'|| defaults.type == 'powerpoint'  )
			{
				var excel="";
				// check for a hidden table
				if(defaults.hiddenTable)
				{
					excel="<table>";
					// Header
					$('#' + defaults.hiddenTable).find('thead').find('tr').each(function() {
						excel += "<tr>";
						$(this).find('th').each(function(index,data) {
							if (defaults.displayHidden == 'true' || $(this).css('display') != 'none' ){					
								if(defaults.ignoreColumn.indexOf(index) == -1){
									excel += "<td>" + parseString($(this))+ "</td>";
								}
							}
						});	
						excel += '</tr>';											
					});					
					
					// Row Vs Column
					var rowCount=1;
					$('#' + defaults.hiddenTable).find('tbody').find('tr').each(function() {
						excel += "<tr>";
						var colCount=0;
						$(this).find('td').each(function(index,data) 
						{
							if (defaults.displayHidden == 'true' || $(this).css('display') != 'none')
							{	
								if(defaults.ignoreColumn.indexOf(index) == -1)
								{
									excel += "<td>"+parseString($(this))+"</td>";
								}
							}
							colCount++;
						});															
						rowCount++;
						excel += '</tr>';
					});
					// add an extra line
					excel += '<tr><td></td><td></td></tr></table>';					
				}

				excel +="<table>";
				// Header
				$(el).find('thead').find('tr').each(function() {
					excel += "<tr>";
					$(this).filter(':visible').find('th').each(function(index,data) {
						if (defaults.displayHidden == 'true' || $(this).css('display') != 'none' ){					
							if(defaults.ignoreColumn.indexOf(index) == -1){
								excel += "<td>" + parseString($(this))+ "</td>";
							}
						}
					});	
					excel += '</tr>';											
				});					
				
				// Row Vs Column
				var rowCount=1;
				$(el).find('tbody').find('tr').each(function() {
					excel += "<tr>";
					var colCount=0;
					$(this).find('td').each(function(index,data) 
					{
						if (defaults.displayHidden == 'true' || $(this).css('display') != 'none')
						{	
							if(defaults.ignoreColumn.indexOf(index) == -1)
							{
								excel += "<td>"+parseString($(this))+"</td>";
							}
						}
						colCount++;
					});															
					rowCount++;
					excel += '</tr>';
				});					
				excel += '</table>';
				
				if(defaults.consoleLog == 'true'){
					console.log(excel);
				}
				
			    var uri = 'data:application/vnd.ms-excel; base64,'; 
			    var template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table cellspacing="0" rules="rows" border="1" style="color:Black;background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;width:100%;border-collapse:collapse;font-size:9pt;text-align:center;">{table}</table></body></html>';				
		        var ctx = { worksheet: defaults.worksheet || 'Worksheet', table: excel };
		        
		        if (navigator.msSaveBlob) 
		        {
		            var blob = new Blob([format(template, ctx)], { type: 'application/vnd.ms-excel', endings: 'native' });
		            navigator.msSaveBlob(blob, 'export.xls');
		        } 
		        else 
		        {
		            window.location.href = uri + base64(format(template, ctx));
		        }
			}
			else if(defaults.type == 'pdf')
			{
				var doc = new jsPDF('p','pt', 'a4', true);
				doc.setFontSize(defaults.pdfFontSize);
				
				// Header
				var startColPosition=defaults.pdfLeftMargin;
				$(el).find('thead').find('tr').each(function() {
					$(this).filter(':visible').find('th').each(function(index,data) {
						if ($(this).css('display') != 'none'){					
							if(defaults.ignoreColumn.indexOf(index) == -1){
								var colPosition = startColPosition+ (index * 50);									
								doc.text(colPosition,20, parseString($(this)));
							}
						}
					});									
				});					
			
			
				// Row Vs Column
				var startRowPosition = 20; var page =1;var rowPosition=0;
				$(el).find('tbody').find('tr').each(function(index,data) {
					rowCalc = index+1;
					
				if (rowCalc % 26 == 0)
				{
					doc.addPage();
					page++;
					startRowPosition=startRowPosition+10;
				}
				
				rowPosition=(startRowPosition + (rowCalc * 10)) - ((page -1) * 280);
					
					$(this).filter(':visible').find('td').each(function(index,data) {
						if ($(this).css('display') != 'none'){	
							if(defaults.ignoreColumn.indexOf(index) == -1){
								var colPosition = startColPosition+ (index * 50);									
								doc.text(colPosition,rowPosition, parseString($(this)));
							}
						}
						
					});															
					
				});					
									
				// Output as Data URI
				doc.output('datauri');
			}
			
			
			function parseString(data)
			{
				if(defaults.htmlContent == 'true'){
					content_data = data.html().trim();
				}
				else
				{
					content_data = data.text().trim();
				}
				
				if(defaults.escape == 'true')
				{
					content_data = escape(content_data);
				}
				
				return content_data;
			}
			
		    function format(s, c) 
		    {
		    		var x = s.replace(/{(\w+)}/g, 
		    		function (m, p) 
		    		{
		    			return c[p]; 
		    		});
		    		
		    		x=x.replace(/(-99999)/gi,""); 
		    		return x;
		    };
		    
		    function base64(s) 
		    { 
		    	return window.btoa(unescape(encodeURIComponent(s))); 
		    };
		}
    });
})(jQuery);
 