<?php
function get_site_name()
{
    $site_name = get_bloginfo( 'name' );
    return $site_name;
}
get_site_name(); // Không hiển thị gì cả
var_dump( get_site_name() ); // Dump
echo '<br/>';
echo get_site_name(); // Phải echo ra mới hiển thị được giá trị được return
?>