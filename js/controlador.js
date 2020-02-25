$(document).ready(function() {
	//alertify.success("¡Bienvenido!");
	console.log("Funciona JS");
	alertify.success('Bienvenido');
})

$('#iniciar-sesion').click(function(){

	var parametros = {
		usuario: $("#login-usuario").val(),
		contraseña: $("#login-contraseña").val(),
	};
	console.log(parametros);
	$.ajax({
		type:"POST",
		data: parametros,
		datatype:'Json',
		url:"https://documenter.getpostman.com/view/9353747/SzKSULMy?version=latest",
		success:function(resultado){
			console.log(resultado);
			if(resultado==true){
				location.href='../PROYECTORAVELv2/Tours.html';					
			}else{
				console.log("no se pudo registrar");
				alertify.error('No concuerdan los datos');
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