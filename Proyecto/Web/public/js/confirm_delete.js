$(".deleteForm").on("submit", function(){
	var button = $(this).find("input[type=submit]:focus");
	return confirm(button.data("text"));
});