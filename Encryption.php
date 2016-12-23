<html>
<?php
function encryp (){
$word = $_GET['w'];
$hex ='';
 for ($i=0; $i<strlen($word); $i++){
        $nw = ord($word[$i]);
        $hexCode = dechex($nw);
        $hex .= '0'.$hexCode;
        }

        for ($i=0;$i<strlen($hex);$i++){
        $hexar =strval($hex);
        $hexar = str_split($hexar, 1);

        }
        for ($i=1;$i<strlen($hex);$i++){
         $s = implode("s4",$hexar);
        $a = str_rot13("abcdefghijklmnopqrstuvwxyz1234567890"). strtoupper(str_rot13("abcdefghijklmnopqrstuvwxyz1234567890"));
         $s = substr_replace ($s, "b02lasakso2io89asnfa" , $i,$i);
        }
        echo($s."\n");
        return $s;
        }
        $as = encryp();
$p = $_GET['p'];
if ($p === $as) {
echo "OKAY!";
}else{
echo "NOT OKAY!";
}
?>
</html>
