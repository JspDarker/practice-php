<?php
function convertToMd5($string) {
    return md5(md5($string));
}
echo convertToMd5('12K^#');
//echo convertToMd5('99998888'); 6bd8ac39e2f2c795f6a50b4fde6e31fa