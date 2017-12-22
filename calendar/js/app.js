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

		var content = "";
		for (i = 0; i < obj.length; i++) {
			content += "<h1>" + obj[i].header + "</h1><p>" + obj[i].description + "</p>";
		}
	  $("#events").html(content);
	});
	 
	request.fail(function( jqXHR, textStatus ) {
		$("#events").html('На данную дату нет мероприятий');
	});
};

$('#calinput').ajaxPost();

$('#calinput').change(function() {
	$(this).ajaxPost();
})