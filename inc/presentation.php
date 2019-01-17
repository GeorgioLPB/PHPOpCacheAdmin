<?php
echo "\n\t\t<tr>" ;
echo "\n\t\t\t<td><a href='".PHP_MANUEL_URL.str_replace( '_', '-', $key )."' target='_blank'>$key</a></td>" ;

if( isset( $valeur ) ) { unset( $valeur ) ; }
switch( $val['src'] )
{
	case 'cfg':
		if( isset( $opcache_get_configuration['directives']['opcache.'.$key] ) )
		{ $valeur = $opcache_get_configuration['directives']['opcache.'.$key] ; }
		break;
	case 'ini':
		if( null !== ini_get( 'opcache.'.$key ) )
		{ $valeur = ini_get( 'opcache.'.$key ) ; }
		break;
}

if( isset( $valeur ) )
{
	switch( $val['type'] )
	{
		case 'bytes':
			echo "\n\t\t\t<td class='right'>".$valeur."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatBytes( $valeur )."</td>" ;
			break ;
		case 'Mbytes':
			echo "\n\t\t\t<td class='right'>".$valeur."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatMBytes( $valeur )."</td>" ;
			break ;
		case 'files':
			echo "\n\t\t\t<td class='right'>".$valeur."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatInteger( $valeur, 'files' )."</td>" ;
			break ;
		case 'seconds':
			echo "\n\t\t\t<td class='right'>".$valeur."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatInteger( $valeur )." Seconds</td>" ;
			break ;
		case 'percent':
			echo "\n\t\t\t<td class='right'>".$valeur."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatInteger( $valeur, '%' )."</td>" ;
			break ;
		case 'hexa':
			echo "\n\t\t\t<td class='right'>".$valeur."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatInteger( $valeur, 'hexa' )."</td>" ;
			break ;
		case 'bool':
			echo "\n\t\t\t<td class='right'>".( ( $valeur ) ? 'TRUE' : 'FALSE' )."</td>" ;
			echo "\n\t\t\t<td class='right'>".formatBoolean( $valeur )."</td>" ;
			break ;
		case 'location':
			echo "\n\t\t\t<td colspan='2'>".$opcache_get_configuration['directives']['opcache.'.$key]."</td>" ;
			break ;
	}
}
else
{ echo "\n\t\t\t<td colspan='2' class='disabled'></td>" ; }

echo "\n\t\t\t<td>".$val['comment']."</td>" ;
echo "\n\t\t</tr>" ;
?>
