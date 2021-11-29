var userJson = '[ { "name":"phil", "email": "phil.limbeck@gmail.com" }, { "name":"nikolai", "email": "nikolai.atanasoski@gmail.com" } ]';
	console.log(userJson);
	
	function sendJsonToEmailService(){
		
		$.ajax({
		 type: "POST",
		 url: 'emailsSent.php',
		 data: userJson,
		 success: function(data){
		 	console.log(data);
		 },
		 error: function(xhr, status, error){
		 	console.error(xhr);
		 }
		});
		
	}
	
	function addNewUserInputField(){
		console.log("x");
	}