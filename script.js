$(document).ready(function(){

$("#myRange1").change(function() {
   $('#input1').val($('#myRange1').val());
});

 $("#myRange2").change(function() {
 $('#input2').val($('#myRange2').val());
});
$("form").submit(function(event){
	event.preventDefault();
	$.ajax ({
		url: "/calc.php",
		type: "post",
		data: $(this).serialize(),
		processData: false,
		cache: false,
		success: (function (data) {
		    value1=JSON.parse(data);
			$('#result').html(value1+" руб");
		}),
	});
})

});
