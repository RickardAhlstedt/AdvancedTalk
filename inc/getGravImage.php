<?php
/**
 * Description of getGravImage
 *
 * @author Ricky
 */
function getGravImage($mail, $default, $size) {
    $grav_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($mail))) . "?d=" . urlencode($default) . "&s=" . $size;
    return $grav_url;
}

?>
