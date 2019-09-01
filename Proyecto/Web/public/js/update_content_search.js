function refresh(search) {
	var pageUrl = window.location.href;
	$.ajax({
		url: pageUrl,
		method: "GET",
		dataType: "html",
		data: "search=" + search,
		success: function(result){
			$("#content").html($(result).find("#content").html());
		}
	});
}

$(document).on("keyup", ".searchBar input[type=text]", function () {
    var search = $(this).val();
    refresh(search);
});

$(document).on("click", ".searchBar button", function () {
    var search = $(this).closest(".searchBar").find("input[type=text]").val();
    refresh(search);
});
