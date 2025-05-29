<?php






function rgbToHex($r, $g, $b) {
    return '#' . str_pad(dechex($r), 2, '0', STR_PAD_LEFT) . 
               str_pad(dechex($g), 2, '0', STR_PAD_LEFT) . 
               str_pad(dechex($b), 2, '0', STR_PAD_LEFT);
}


function hexToRgb($hex) {
    $hex = ltrim($hex, '#');

    if (strlen($hex) == 3) {
        $hex = $hex[0] . $hex[0] .
               $hex[1] . $hex[1] .
               $hex[2] . $hex[2];
    }

    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));

    return [$r, $g, $b];
}


function pr($string, $return = false, $bg = 'transparent') {

    $str = '';

    $str .= '<pre style="background-color: ' . $bg . ';">';
    $str .= print_r($string, true);
    $str .= '</pre>';

    $d = debug_backtrace();

    $str .= $d[0]['file'] . '<br />Line: <b>' . $d[0]['line'] . '</b>';

    $str .= '<hr />';

    if ($return === false){
        echo $str;
    } else {
        return $str;
    }

}


