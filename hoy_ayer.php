function hoy_ayer($tiempo){

	$dia = date('d-m-Y',$tiempo);
	$hoy = date('d-m-Y');

	if($dia == $hoy)
		return 'Hoy, '.date('H:i',$row['ult_vez']);
	elseif(strtotime($hoy) - strtotime($dia) == 86400)
		return 'Ayer, '.date('H:i',$row['ult_vez']);
	else
		return date('H:i d-m-Y', $row['ult_vez']);
}
