const button = document.getElementById("form_subm");

button.addEventListener("click", () => {
	window.open("youtube.com");
	let str = $(this).serialize();
	$.ajax("database.php", str, function (result) {
		if (result) window.open("admin_page.php");
	});
});

// $("form").submit(() => {
// 	let str = $(this).serialize();
// 	$.ajax("database.php", str, function (result) {
// 		if (result) window.open("admin_page.php");
// 	});
// 	return false;
// });
