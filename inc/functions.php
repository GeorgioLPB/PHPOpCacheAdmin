<?php
function formatBytes( $bytes, $precision = 2 )
{
        //$units = array('B', 'KB', 'MB', 'GB', 'TB');
        $units = array('b', 'Kb', 'Mb', 'Gb', 'Tb');
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        return round($bytes, $precision) . ' ' . $units[$pow];
}
function formatMBytes( $bytes, $precision = 2 )
{
        //$units = array('MB', 'GB', 'TB');
        $units = array('Mb', 'Gb', 'Tb');
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        return round($bytes, $precision) . ' ' . $units[$pow];
}
function formatInteger( $value, $unit = '' )
{
        switch( $unit )
        {
                case '':
                        return number_format( $value, 0, ',', ' ' ) ;
                        break;
                case '%':
                        return number_format( $value, 2, ',', ' ' )." $unit" ;
                        break;
                case 'files':
                case 'keys':
                case 'scripts':
                case 'strings':
                        return number_format( $value, 0, ',', ' ' )." ".$unit ;
                        break;
                case 'hexa':
                        return "0x".strtoupper( dechex( $value ) ) ;
                        break;
                default :
                        return "$value $unit" ;
                        break;
        }
}
function formatBoolean( $value )
{
	if( $value ) { return 'ON' ; }
	else{return 'OFF' ; }
}
?>