$(document).on("click", ".tableRowLink", function () {
	window.location = $(this).data("href");
});