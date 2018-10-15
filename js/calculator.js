function Request(click)
{
	$(document).ready (function () {
		$(click).bind("click", function () {
				num = $(click).val()
				elText = $("#result").val()
				if (elText != '') {
					elText = elText.replace(elText,elText+num)
					$("#result").val(elText);
				} else if (elText == '') {
					val_input = $('#result').val(num)
				}
		});
	});
}
$(document).ready (function () {
	$('#clear').bind("click", function () {
		elText = $("#result").val()
		index = elText.length
		elText = elText.substr(0,index-1)
		$("#result").val(elText)
	});
});
$(document).ready (function () {
	$('#enter').bind("click", function () {

		plus = elText.indexOf('+')
		pow = elText.indexOf('^')
		minus = elText.indexOf('-')
		divided = elText.indexOf('/')
		multipilied = elText.indexOf('*')

		if (plus > 0)
		{
			one_p = elText.substr(0,plus);
			two_p = elText.substr(plus+1);
			answer_p = Number(one_p)+Number(two_p);
			$("#result").val(answer_p)
		}
		else if (minus > 0)
		{
			one_m = elText.substr(0,minus);
			two_m =  elText.substr(minus+1);
			answer_m = Number(one_m)-Number(two_m);
			$("#result").val(answer_m)
		}
		else if (pow > 0)
		{
			one_pow = elText.substr(0,pow);
			two_pow =  elText.substr(pow+1);
			answer_pow = Math.pow(one_pow, two_pow);
			$("#result").val(answer_pow)
		}
		else if (divided>0)
		{
			one_d = elText.substr(0,divided);
			two_d =  elText.substr(divided+1);
			answer_d = Number(one_d)/Number(two_d);
			$("#result").val(answer_d)
		}
		else if (multipilied>0)
		{
			one_mu = elText.substr(0,multipilied);
			two_mu =  elText.substr(multipilied+1);
			answer_mu = Number(one_mu)*Number(two_mu);
			$("#result").val(answer_mu)
		}
		else if (elText == '')
		{
				$("#result").val('Вы нечего не ввели !')
		}
	});
});

num1 = Request('#num')
num2 = Request('#num1')
num3 = Request('#num2')
num4 = Request('#num3')
num5 = Request('#num4')
num6 = Request('#num5')
num7 = Request('#num6')
num8 = Request('#num7')
num9 = Request('#num8')
num0 = Request('#num9')

operations1 = Request('#operations1')
operations2 = Request('#operations2')
operations3 = Request('#operations3')
operations4 = Request('#operations4')
operations5 = Request('#operations5')
operations6 = Request('#operations6')

result = Request('#result')
