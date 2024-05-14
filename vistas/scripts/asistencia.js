var tabla;

function init(){
$("#formulario").on("submit",function(e){
   	registrar_asistencia(e);
   })


}

function limpiar(){
	$("#codigo_persona").val("");
	setTimeout('document.location.reload()',4000); //Tiempo en pantalla
}

function registrar_asistencia(e){
     e.preventDefault();
     $("#btnGuardar").prop("disabled",true);
     var formData=new FormData($("#formulario")[0]);

     $.ajax({
     	url: "../ajax/asistencia.php?op=registrar_asistencia",
     	type: "POST",
     	data: formData,
     	contentType: false,
     	processData: false,

     	success: function(datos){
     			$("#movimientos").html(datos);
     		
     	}
     });
     limpiar();
}





init();