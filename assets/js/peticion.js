
registerPeticion = () => {
	let data = {
		name: $("#name").val(),
		email: $("#email").val(),
		phone: $("#phone").val(),
		message: $("#message").val(),
		
    };

    let url = "api/createPeticion";

    Object.keys(data).map((d) => $(`.${d}`).hide());

    $.ajax({
		data: { data },
		type: "POST",
		url: host_url + url,
		crossOrigin: false,
		dataType: "json",
		success: (result) => {
			swal({
				title: "Éxito!",
				icon: "success",
				text: result.msg,
				button: "OK",
			}).then(() => {
                // $("#agregarUser").modal("hide");
            
               });
            }
      });
};
        

$("#sendMessageButton").on("click", () => {
	registerPeticion();
});


