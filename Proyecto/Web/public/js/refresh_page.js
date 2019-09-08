// Refreshes page using ajax
function refreshPage() {
	var pageUrl = window.location.href;
	$.ajax({
		url: pageUrl,
		method: "GET",
		dataType: "html",
		success: function(result){
			var dom = $(document.createElement("html"));
			dom[0].innerHTML = result;
			$("body").html(dom.find("body"));
		}
	});
}

setInterval(function(){
	refreshPage();
}, 3 * 60 * 1000);