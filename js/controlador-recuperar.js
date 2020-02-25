$(document).ready(function() {
	//alertify.success("¡Bienvenido!");
	console.log("Funciona JS");
})

$('#button-1').click(function(){

	var parametros= 
    "recuperar-correo="+$("#recuperar-correo").val();
	
	console.log(parametros);

	$.ajax({
		type:"POST",
		data: parametros,
		datatype:'Json',
		url:"https://documenter.getpostman.com/view/9353747/SzKSULMy?version=latest",
		success:function(resultado){
			console.log(resultado);
			if(resultado==true){
				$('#div-login').css('display','none');
				$('#div-recuperar').css('display','block');				
			}else{
				console.log(resultado);
			}
		}
	});
});

$('#button-codigo').click(function(){

	var parametros= 
    "recuperar-codigo="+$("#recuperar-codigo").val();
	
	console.log(parametros);

	$.ajax({
		type:"POST",
		data: parametros,
		datatype:'Json',
		url:"https://documenter.getpostman.com/view/9353747/SzKSULMy?version=latest",
		success:function(resultado){
			console.log(resultado);
			if(resultado==true){
				$('#div-contrasenia').css('display','block');
				$('#div-recuperar').css('display','none');		
			}else{
				console.log(resultado);
			}
		}
	});
});

$("#button-escribir").click(function(){
	$('#div-login').css('display','block');
	$('#div-recuperar').css('display','none');
})

$('#button-confirmacion').click(function(){

	var parametros= 
	"recuperar-contraseña="+$("#recuperar-contraseña").val()+"&"+
	"confimar-contrasenia="+$("#confimar-contrasenia").val();
	
	console.log(parametros);

	$.ajax({
		type:"POST",
		data: parametros,
		datatype:'Json',
		url:"https://documenter.getpostman.com/view/9353747/SzKSULMy?version=latest",
		success:function(resultado){
			console.log(resultado);
			if(resultado==true){
				$('#div-correcto').css('display','block');
				$('#div-contrasenia').css('display','none');				
			}else{
				console.log(resultado);
			}
		}
	});
});


/*
function Botones_activo(){
	$("#button-1").click(function(){
			$('#div-login').css('display','none');
			$('#div-recuperar').css('display','block');
	})

	$("#button-escribir").click(function(){
			$('#div-login').css('display','block');
			$('#div-recuperar').css('display','none');
	})

	$("#button-codigo").click(function(){
			$('#div-contrasenia').css('display','block');
			$('#div-recuperar').css('display','none');
	})
	$("#button-confirmacion").click(function(){
			$('#div-correcto').css('display','block');
			$('#div-contrasenia').css('display','none');
	})
}
*/