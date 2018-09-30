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
$(document).ready (function () {
	$('#clear').bind("click", function () 
	{
		$('#result').val('');
	});
})
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

Request_Ajax('#num','#num','number')
Request_Ajax('#num1','#num1','number')
Request_Ajax('#num2','#num2','number')
Request_Ajax('#num3','#num3','number')
Request_Ajax('#num4','#num4','number')
Request_Ajax('#num5','#num5','number')
Request_Ajax('#num6','#num6','number')
Request_Ajax('#num7','#num7','number')
Request_Ajax('#num8','#num8','number')

Request_Ajax('#operations1','#operations1','number')
Request_Ajax('#operations2','#operations2','number')
Request_Ajax('#operations3','#operations3','number')
Request_Ajax('#operations4','#operations4','number')
Request_Ajax('#sqrt','#sqrt','sqrt')
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
