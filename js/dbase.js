$("#form").on("submit", function () {
	$.ajax({
		url: "database.php",
		method: "post",
		dataType: "html",
		data: $(this).serialize(),
		success: function (data) {
			if (data) {
				window.open("admin_page.php");
			}
		},
	});
});
