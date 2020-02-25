$(document).ready(function() {
	//alertify.success("¡Bienvenido!");
	console.log("Funciona JS");
})

$('#button-registrar').click(function(){

	var parametros= 
    "primer-nombre="+$("#primer-nombre").val()+"&"+
	"segundo-nombre="+$("#segundo-nombre").val()+"&"+
	"primer-apellido="+$("#primer-apellido").val()+"&"+
	"segundo-apellido="+$("#segundo-apellido").val()+"&"+
	"correo="+$("#registro-correo").val()+"&"+
	"registro-contrasenia="+$("#registro-contrasenia").val()+"&"+
	"confirmar-contrasenia="+$("#lconfirmar-contrasenia").val()+"&"+
	"registro-fechaNac="+$("#registro-fechaNac").val();
	
	console.log(parametros);

	$.ajax({
		type:"POST",
		data: parametros,
		datatype:'Json',
		url:"https://documenter.getpostman.com/view/9353747/SzKSULMy?version=latest",
		success:function(resultado){
			console.log(resultado);
			if(resultado==true){
				location.href='../PROYECTORAVELv2/index.php';					
			}else{
				console.log("no se pudo registrar");
			}
		}
	});
});



/*

$("#btn-publicar").click(function(){
    console.log($("#txtPub-modal").val());
    console.log($("#nombre").text());

    var parametros= 
    "nombre="+$("#nombre-lg").text()+
    "&"+"apellido="+$("#apellido").text()+
    "&"+"mensaje="+$("#txtPub-modal").val();

    console.log(parametros);
    
	$.ajax({
		url: "ajax/guardar-post-perfil.php",
		method: "POST",
		data: parametros,
		success:function(){
            console.log();
            console.log("Si guardo");
            $("#all-public").html("");
            cargarPostNoticias();
           
        },
		error: function(error){
           console.log(error);
		}
    });	
    
}); */