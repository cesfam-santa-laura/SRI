<?php
$options="";


if ($_POST["elegido"]=="0") {
    $options= '
    <option value="0">    --SELECCIONE--   </option>
    ';    
}

if ($_POST["elegido"]=="1") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="IRA ALTA">IRA ALTA</option>
    <option value="SBO">SBO</option>
    <option value="NEUMONIA">NEUMONIA</option>
    <option value="ASMA">ASMA</option>
    <option value="EPOC">EPOC</option>
    <option value="ITS">ITS</option>
    <option value="VIH">VIH</option>
    <option value="OTRAS RESPIRATORIAS">OTRAS RESPIRATORIAS</option>
    <option value="SALUD MENTAL">SALUD MENTAL</option>
    <option value="OTRAS MORBILIDADES">OTRAS MORBILIDADES</option>
    ';    
}
if ($_POST["elegido"]=="2") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="RECETA">RECETA</option>
    <option value="INFORMES">INFORMES</option>
    <option value="ORTESIS">ORTESIS</option>
    <option value="IC">INTERCONSULTAS</option>
   
    ';    
}

if ($_POST["elegido"]=="3") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="CV">CV (HTA-DM-DLP)</option>
    <option value="TUBERCULOSIS">TUBERCULOSIS</option>
    <option value="IRA">IRA</option>
    <option value="ERA">ERA</option>
    <option value="SALUD MENTAL">SALUD MENTAL</option>
    <option value="OTROS PROBL. SALUD">OTROS PROBL. SALUD</option>
   
    ';    
}

if ($_POST["elegido"]=="4") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="1 MES">1 MES</option>
    <option value="3 MESES">3 MES</option>
    <option value="7 AÑOS">7 AÑOS</option>
    <option value="OTRAS EDADES">OTRAS EDADES</option>
    ';    
}

if ($_POST["elegido"]=="5") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="INTEGRAL">INTEGRAL</option>
    <option value="PROCEDIMIENTO">PROCEDIMIENTO</option>
    
    ';    
}

if ($_POST["elegido"]=="6") {
    $options= '
    <option value="CLAP">CLAP</option>
    
    ';    
}

if ($_POST["elegido"]=="7") {
    $options= '
    <option value="CIRUGIA MENOR">CIRUGIA MENOR</option>
    
    ';    
}

if ($_POST["elegido"]=="8") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="NUEVA">NUEVA</option>
	<option value="CONTROL">CONTROL</option>
    ';    
}

if ($_POST["elegido"]=="11") {
    $options= '
    <option value="">--SELECCIONE--</option>
    <option value="RIESGO PSICOSOCIAL">RIESGO PSICOSOCIAL</option>
    <option value="PATOLOGÍA CRÓNICA">INTEGRANTE DE PATOLOGÍA CRÓNICA</option>
	<option value="PROBLEMA DE SM">INTEGRANTE CON PROBLEMA DE SM</option>
	<option value="ADULTO MAYOR DEPENDIENTE">ADULTO MAYOR DEPENDIENTE</option>
	<option value="ADULTO MAYOR CON DEMENCIA">ADULTO MAYOR CON DEMENCIA</option>
	<option value="INTEGRANTE CON ENFERMEDAD TERMINAL">INTEGRANTE CON ENFERMEDAD TERMINAL</option>
	<option value="INTEGRANTE DEPENDIENTE SEVERO">INTEGRANTE DEPENDIENTE SEVERO</option>
	<option value="OTRAS ÁREAS DE INTERVENCIÓN">OTRAS ÁREAS DE INTERVENCIÓN</option>
	
	    
    ';    
}

echo $options; 


?>



