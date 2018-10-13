function funcSuccess(data)
{
	if ($("#result").val() != '') 
	{
		elText = $("#result").val();
		elText = elText.replace(elText,elText+data);
		$("#result").val(elText); 
	} else 
	{
		$("#result").val(data);
	}
}
function funcResult(data)
{
		$("#result").val('');
		$("#result").val(data);
}
function Request_Ajax(click,val) 
{
	$(document).ready (function () {
		$(click).bind("click", function () {
		$.ajax({
		 url: 'value.php',
		type: "POST",                     
		 data:({number: $(val).val()}),
		 dataType: "html",
		 success:funcSuccess
			});
		});
	});
}

Request_Ajax('#num','#num')
Request_Ajax('#num1','#num1')
Request_Ajax('#num2','#num2')
Request_Ajax('#num3','#num3')
Request_Ajax('#num4','#num4')
Request_Ajax('#num5','#num5')
Request_Ajax('#num6','#num6')
Request_Ajax('#num7','#num7')
Request_Ajax('#num8','#num8')
Request_Ajax('#num9','#num9')

Request_Ajax('#operations1','#operations1')
Request_Ajax('#operations2','#operations2')
Request_Ajax('#operations3','#operations3')
Request_Ajax('#operations4','#operations4')
Request_Ajax('#operations5','#operations5')
Request_Ajax('#operations6','#operations6')
Request_Ajax('#squad','#result','squad')

			$(document).ready (function () {
		    $('#enter').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({result: $('#result').val()}),
		    dataType: "html",
		    success:funcResult
		  });
		});
	})
			$(document).ready (function () {
		    $('#factorial').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({factorial: $('#result').val()}),
		    dataType: "html",
		    success:funcResult
		  });
		});
	})
			$(document).ready (function () {
		    $('#squad').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({squad: $('#result').val()}),
		    dataType: "html",
		    success:funcResult
		  });
		});
	})
			$(document).ready (function () {
		    $('#clear').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({clear: $('#result').val()}),
		    dataType: "html",
		    success:funcResult
		  });
		});
	})
			$(document).ready (function () {
		    $('#procent').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({procent: $('#result').val()}),
		    dataType: "html",
		    success:funcResult
		  });
		});
	})
			$(document).ready (function () {
		    $('#sqrt').bind("click", function () {
			$.ajax({
		    url: 'value.php',
		    type: "POST",                     
		    data:({sqrt: $('#result').val()}),
		    dataType: "html",
		    success:funcResult
		  });
		});
	})
