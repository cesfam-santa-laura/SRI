function calcularEdad()
{
    var fecha=document.getElementById("txtFechaNac").value;
    
    if (typeof fecha != "string" && fecha && esNumero(fecha.getTime())) {
            fecha = formatDate(fecha, "yyyy-MM-dd");
        }
   
        // Si la fecha es correcta, calculamos la edad
        var values=fecha.split("-");
        var dia = values[2];
        var mes = values[1];
        var ano = values[0];
 
        // cogemos los valores actuales
        var fecha_hoy = new Date();
        var ahora_dia = fecha_hoy.getDate();
        var ahora_mes = fecha_hoy.getMonth()+1;
        var ahora_ano = fecha_hoy.getYear();
    
 
        // realizamos el calculo
        var edad = (ahora_ano + 1900) - ano;
        if ( ahora_mes < mes )
        {
            edad--;
        }
        if ((mes == ahora_mes) && (ahora_dia < dia))
        {
            edad--;
        }
        if (edad > 1900)
        {
            edad -= 1900;
        }
     // var meses = 0;

        /*if (ahora_mes > mes && dia > ahora_dia)
            meses = ahora_mes - mes - 1;
        else if (ahora_mes > mes)
            meses = ahora_mes - mes
        if (ahora_mes < mes && dia < ahora_dia)
            meses = 12 - (mes - ahora_mes);
        else if (ahora_mes < mes)
            meses = 12 - (mes - ahora_mes + 1);
        if (ahora_mes == mes && dia > ahora_dia)
            meses = 11;

         //calculamos los dias
        var dias = 0;
        if (ahora_dia > dia)
            dias = ahora_dia - dia;
        if (ahora_dia < dia) {
            ultimoDiaMes = new Date(ahora_ano, ahora_mes - 1, 0);
            dias = ultimoDiaMes.getDate() - (dia - ahora_dia);
        }*/
    document.getElementById('txted').value=edad;
    


}

$(function(){
			$('#txtCedula').Rut({
			 on_error: function(){ 
				 
				  alert('Rut Ingresado es Incorrecto');},
				format_on: 'keyup'
				
             
  	})
})
 

function BuscarDatosCronicos(bd_rut){
				var Cedula ="Cedula="+bd_rut;

					$.ajax({ 
						url:"../Info_PacienteCronico/BuscarInfoUsuarioCronico.php",
						data: Cedula,
						type: "POST",
						dataType: "json",
						success:
							function(respuesta)
							{	
								$('#txtrut').val(respuesta.rut);
								$('#txtName').val(respuesta.nom);
								$('#txtapell').val(respuesta.apell);
								$('#txtyear').val(respuesta.edad);
								
								$('#fcreacion').val(respuesta.edad);
								$('#txtestado').val(respuesta.edad);
								$('#txthta').val(respuesta.edad);
								$('#txtdm').val(respuesta.edad);
								$('#txtdislip').val(respuesta.edad);
								$('#txtgaa').val(respuesta.edad);
								$('#txtglucosa').val(respuesta.edad);
								$('#txtepoc').val(respuesta.edad);
								$('#txtlacfa').val(respuesta.edad);
								$('#txtri').val(respuesta.edad);
								
								$('#txtasma').val(respuesta.edad);
								$('#txtodepen').val(respuesta.edad);
								$('#txtepi').val(respuesta.edad);
								$('#txtobes').val(respuesta.edad);
								$('#txttaba').val(respuesta.edad);
								$('#txtiam').val(respuesta.edad);
								$('#txtacv').val(respuesta.edad);
								$('#txtseden').val(respuesta.edad);
								$('#txtriesgo').val(respuesta.edad);
								$('#txtFonOjo').val(respuesta.edad);
								
								$('#txtUltCont').val(respuesta.edad);
								$('#txtProxCont').val(respuesta.edad);
								$('#txtUltEmp').val(respuesta.edad);
								$('#txtfexamen').val(respuesta.edad);
								$('#txtfinsulina').val(respuesta.edad);
								$('#txtfpap').val(respuesta.edad);
								$('#txtEstPap').val(respuesta.edad);
								$('#txtrac').val(respuesta.edad);
								$('#txtTGCE').val(respuesta.edad);
								$('#txtValorTGCE').val(respuesta.edad);
								$('#txtSistol').val(respuesta.edad);
								$('#txtDiaslos').val(respuesta.edad);
								$('#txtPeso').val(respuesta.edad);
								$('#txtTalla').val(respuesta.edad);
								$('#txtImc').val(respuesta.edad);
								$('#txtHba1c').val(respuesta.edad);
								$('#txtCreat').val(respuesta.edad);
								$('#txtMicrolab').val(respuesta.edad);
								
								$('#txtColest').val(respuesta.edad);
								$('#txtHdl').val(respuesta.edad);
								$('#txtTgc').val(respuesta.edad);
								$('#txtLdl').val(respuesta.edad);
								$('#txtVfg').val(respuesta.edad);
								$('#txtRenal').val(respuesta.edad);
								$('#txtIara').val(respuesta.edad);
								$('#txtaspi').val(respuesta.edad);
								$('#txtestati').val(respuesta.edad);
								$('#txtinsul').val(respuesta.edad);
								$('#txtpulcerado').val(respuesta.edad);
								$('#txtampu').val(respuesta.edad);
								$('#txtceguera').val(respuesta.edad);
								$('#txthiv').val(respuesta.edad);
								$('#txtdemencia').val(respuesta.edad);
								$('#txtemat').val(respuesta.edad);
								$('#txtnerf').val(respuesta.edad);
								$('#txtfamrenal').val(respuesta.edad);
								$('#txtdialisis').val(respuesta.edad);
								$('#txtfdialisis').val(respuesta.edad);
								
													
								
							}
					});				
			}


 function BuscarInfo(bd_rut){
				var rut ="rut="+bd_rut;

					$.ajax({ 
						url:"../Info_Pacientes/BuscarInfoUsuario.php",
						data: rut,
						type: "POST",
						dataType: "json",
						success:
							function(respuesta)
							{	
								$('#txtCed').val(respuesta.rut);
								$('#txtNomb').val(respuesta.nom);
								$('#txtApelli').val(respuesta.apell);
								$('#txtSexo').val(respuesta.sexo);
								$('#txtFNac').val(respuesta.nac);
								$('#txted').val(respuesta.edad);
								$('#txtTelef').val(respuesta.tel);
								$('#txtdir').val(respuesta.dire);
								$('#txtPobla').val(respuesta.pobl);
								$('#txtComuna').val(respuesta.com);
								$('#txtpaises').val(respuesta.pais);
								$('#txtpuebl').val(respuesta.pueb);
								$('#txtSector').val(respuesta.sect);
								$('#txtFic').val(respuesta.ficha);
								$('#txtUser').val(respuesta.user);
								$('#txtDate').val(respuesta.date);
								$('#txtUserUpdate').val(respuesta.updateuser);
								$('#txtDateUpdate').val(respuesta.updatedate);
								
								
								
							}
					});				
			}


function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}
document.onkeypress = stopRKey; 


function eliminar(bd_rut){
				if (confirm("Esta a punto de eliminar al Paciente:"+ bd_rut
							)) {
					//Cedula es igual
					var ced ="bd_rut="+bd_rut;
					$.ajax({ 
						type: "POST",
						url:"../Info_Pacientes/eliminar.php",
						data: ced,
						success:function(respuesta)
								{
									location.reload(true);
									
									
								}
					});
				    return false;
				}	
			}
 
 
				
				


$(document).ready(function(){
    
    $("#txtCedula").focus();
   
	$('#example').dataTable();

$('[data-toggle="tooltip"]').tooltip(); 


        
var cambio = false;
        $('.nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                $(this).parent().addClass("active");
                cambio = true;
            }
        });
        if(!cambio){ 
        $('.nav li:first').addClass("active");
}        

         
$('#btnVerificar').click(function(){
            var resul = $('#formUsuario').serialize();
						$.ajax({
							url: "../Modals/validarRut.php",
							type: "POST",
							data: resul,
							success:
								function(respuesta)
								{
									$('#agrega-formulario').html(respuesta);
								}
						})
			return false;
				
              

 
 });
  	
  
 
$('#btnGuardarCambios').click(function(){
            
            
	 		var nom=document.getElementById("txtNomb").value;
	 		var apell=document.getElementById("txtApelli").value;
	 		var sexo=document.getElementById("txtSexo").value;
	 		var nac=document.getElementById("txtFNac").value;
	 		var tel=document.getElementById("txtTelef").value;
	 		var dir=document.getElementById("txtdir").value;
	 		var pobl=document.getElementById("txtPobla").value;
	 		var com=document.getElementById("txtComuna").value;
	 		var pais=document.getElementById("txtpaises").value;
	 		var sect=document.getElementById("txtSector").value;
	 		var ficha=document.getElementById("txtFic").value;

	 if(nom==""){

            alert("[ERROR] Debe ingresar Nombre del Paciente")
            document.formeditar.txtNomb.focus()

       } else if(apell==""){

            alert("[ERROR] Debes ingresar los Apellidos del Paciente")
            document.formeditar.txtApelli.focus()

       }else if(sexo==""){

            alert("[ERROR] Debe Seleccionar el SEXO ")
            document.formeditar.txtSexo.focus()

	   }else if(nac==""){

           alert("[ERROR] Debe Agregar una Fecha de Nacimiento")
             document.formeditar.txtFNac.focus()
          

       }else if(tel==""){

           alert("[ERROR] Debe Agregar un telefono")
             document.formeditar.txtTelef.focus()
          

       }else if(dir==""){

           alert("[ERROR] Debe Agregar una Direccion")
             document.formeditar.txtdir.focus()
          

       }else if(pobl==""){

           alert("[ERROR]  Agregar la Poblacion ")
             document.formeditar.txtPobla.focus()
          

       }else if(com==""){

           alert("[ERROR] Debe Ingresar la Comuna")
             document.formeditar.txtComuna.focus()

       }else if((pais=="")){

           alert("[ERROR] Debe seleccionar el PAIS de Origen del PACIENTE")
             document.formeditar.txtpaises.focus()

       }else if(sect==""){

           alert("[ERROR] Debe Seleccionar el Sector")
             document.formeditar.txtSector.focus()

       }else if(ficha==""){

           alert("[ERROR] Debe Agregar un numero de ficha el Paciente")
             document.formeditar.txtFic.focus()

       } else{	
        
        
        if (confirm("Esta Seguro de guardar la informacion del Paciente?")){
                        var datos = $('#formeditar').serialize();
						$.ajax({
							url: "../Info_Pacientes/EditarInfoUsuario.php",
							type: "POST",
							data: datos,
							success:
								function(datos)
								{
									$('#agrega-alerta').html(datos);
								}
						})
			return false;
					}
              }
	});
 

 });


