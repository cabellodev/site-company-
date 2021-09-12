$(() => {
	getStates();
	getPeticion();

});

let idEdit=0;
const tabla = $("#table-peticion").DataTable({
	// searching: true,
	language: {
		url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json",
	},
	bSort : false,// hace que dta table no ordene a su criterio la lista de datos .
	columns: [
	
		{ data: "nombre_peticion" },
		{ data: "correo_peticion" },
		{ data: "telefono_peticion"},
		{ data: "nombre_estado"},
		{defaultContent: `<button type='button' name='Detalles' class='btn btn-info '>
                                  Ver Detalles   
                              </button>`,
		},
		{	defaultContent: `<button type='button' name='editButton' class='btn btn-secondary'>
                                  Estado    
                              </button>`,
		},
	]
});


$("#table-peticion").on("click", "button", function () {
	let data = tabla.row($(this).parents("tr")).data();
	if ($(this)[0].name == "Detalles") {
		cleanInput();
	    idEdit=data.id_peticion;
		$("#e_name").val(data.nombre_peticion);
		$("#e_email").val(data.correo_peticion);
		$("#e_phone").val(data.telefono_peticion);
		$("#e_message").val(data.texto_peticion);
		$("#invisible").val(data.id_peticion);
		$("#updatePeticion").modal("show");
}else { 
	$("#estado").val(data.id_estado);
	$("#cambio_estado").modal("show");
}


});







getPeticion = () => {
	let xhr = new XMLHttpRequest();
	xhr.open("get", `${host_url}/api/getPeticion`);
	xhr.responseType = "json";
	xhr.addEventListener("load", () => {
		if (xhr.status === 200) {
			let data = xhr.response;
			console.log(data);
			tabla.clear();
			tabla.rows.add(data);
			tabla.draw();
		} else {
			swal({
				title: "Error",
				icon: "error",
				text: "Error al obtener los usuarios",
			});
		}
	});
	xhr.send();
};


updatePeticion =()=>{

	let data = {
		name: $("#e_name").val(),
		email: $("#e_email").val(),
		phone: $("#e_phone").val(),
		message: $("#e_message").val(),
		id: idEdit,
		
	};
	console.log(data);
	
	
    Object.keys(data).map((d) => $(`.${d}`).hide());
	
	$.ajax({
		data: { data },
		type: "POST",
		url: host_url+"api/editPeticion",
		crossOrigin: false,
		dataType: "json",
		success: (result) => {
			swal({
				title: "Éxito!",
				icon: "success",
				text: result.msg,
				button: "OK",
			}).then(() => {
				$("#updatePeticion").modal("hide");
				getPeticion();
				idEdit=0;
			
            
               });
			},
		error: (result)=> {
			swal({
				title: "Error!",
				icon: "error",
				text: result.msg,
				button: "OK",
			});

		}
		
		
		
      });
	

}

getStates=()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("get", `${host_url}/api/getEstados`);
	xhr.responseType = "json";
	xhr.addEventListener("load", () => {
		if (xhr.status === 200) {
			let data = xhr.response;
			data.map(sta => {
				$("#estado").append(
					`<option value=${sta.id_estado}>${sta.nombre_estado}</option>`
				);
			});
		} else {
			swal({
				title: "Error",
				icon: "error",
				text: "Error al obtener estados ",
			});
		}
	});

	xhr.send();

}


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
				$("#agregarPeticion").modal("hide");
				getPeticion();
            
               });
            }
      });
};

	cleanInput = () => {
		
		$("#name").val("");
		$("#email").val("");
		$("#phone").val("");
		$("#message").val("");
	
	
		$(`.name`).hide();
		$(`.email`).hide();
		$(`.phone`).hide();
		$(`.message`).hide();

	};
	cleanInput_edit = () => {
		
		$("#e_name").val("");
		$("#e_email").val("");
		$("#e_phone").val("");
		$("#e_message").val("");
	
	
		$(`.name`).hide();
		$(`.email`).hide();
		$(`.phone`).hide();
		$(`.message`).hide();

	};
	

	$("#btn").on("click", () => {
		cleanInput();
		$("#agregarPeticion").modal("show");
  });

	$("#addPeticion").on("click", () => {
	      registerPeticion();
	});

	$("#editPeticion").on("click", () => {
		updatePeticion();
  });


	
	
	




