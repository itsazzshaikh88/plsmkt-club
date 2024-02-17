
function submitClubData(event) {

	event.preventDefault(); // Prevent the default form submission

	// Get the form data
	var formData = new FormData(event.target);
	let loader = '<i class="fa fa-spinner"></i> Wait ...';


	// Perform Ajax request using jQuery
	$.ajax({
		type: 'POST',
		url: base_url + 'profile/save_detail',
		data: formData,
		dataType:"json",
		processData: false, // Prevent jQuery from processing the data
		contentType: false, // Prevent jQuery from setting content type
		beforeSend: function () {
			$("#update_btn").html(loader)
		},
		success: function (response) {
			// Handle the Ajax response if needed
			let green = '#28a745'
				let red = '#dc3545'
			

			if(response['status'] == 1 )
			{
				toastMessage({
					msgText: 'Data updated successfully',
					background: green
				});
			location.reload()
			}else
			{
				toastMessage({
					msgText: 'Data is not update',
					background: red
				});
			}
		}
	});
}



