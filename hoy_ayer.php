function hoy_ayer($tiempo){

$dia = date('d-m-Y',$tiempo);
$hoy = date('d-m-Y');

if($dia == $hoy)
	return 'Hoy, '.date('H:i',$tiempo);
elseif(strtotime($hoy) - strtotime($dia) == 86400)
	return 'Ayer, '.date('H:i',$tiempo);
else
	return date('d-m-Y H:i', $tiempo);
}
