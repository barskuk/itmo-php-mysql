$.fn.ajaxPost = function() {
	var dt = $('#calinput').val();
	var request = $.ajax({
		url: "servicer.php",
		method: "POST",
		data: { date : dt },
		dataType: "json"
	});
	console.log(request);
	 
	request.done(function( obj ) {
	  $("#events").html( obj );
	});
	 
	request.fail(function( jqXHR, textStatus ) {
		$("#events").html('На данную дату нет мероприятий');
	});
};

$('#calinput').ajaxPost();

$('#calinput').change(function() {
	$(this).ajaxPost();
})