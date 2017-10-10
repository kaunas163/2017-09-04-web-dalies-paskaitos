$("#zmogus").on("submit", function(event){
	event.preventDefault();
	
	var vardas = $("#vardasI").val();
	var pavarde = $("#pavardeI").val();
	var amzius = $("#amziusI").val();
	
	$("#informacija").html(vardas + " " + pavarde + " (" + amzius + " m.)");
});