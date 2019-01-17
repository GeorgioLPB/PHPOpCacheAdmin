<?php
$result = opcache_reset() ;
if( true === $result )
{ echo "<h3>The cache has been purged</h3>" ; }
else
{ echo "<h3>There was a problem while purging the cache</h3>" ; }
echo "<p><pre>" ;
var_dump( $result ) ;
echo "</pre></p>" ;
?>