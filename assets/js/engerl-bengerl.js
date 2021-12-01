const addUserToFile = () => {
	const newUser = {};
	newUser.name = $('#name').val();
	newUser.email = $('#email').val();

	const urlParams = new URLSearchParams(window.location.search);
	newUser.team = urlParams.get('team');
	
	const newUserJson = JSON.stringify(newUser);
	console.log("stringify: " + newUserJson);

	$.ajax({
		type: "POST",
		url: 'add-santa.php',
		data: newUserJson,
		success: function (data) {
			console.log(data);
			$('#submitMessage').text("Successfully added!");
		},
		error: function (xhr, status, error) {
			console.error(xhr);
			$('#submitMessage').text("Something went wrong");
		}
	});
}