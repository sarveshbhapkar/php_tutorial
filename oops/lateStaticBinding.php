<?php
class Countrysale{

    static $totalsale=1000;
    function getTotalsale()
    {
        echo self::$totalsale;

    }
}

class Citysale extends Countrysale{

    static $totalsale=10;
  
    function getTotalsale()
    {
        echo self::$totalsale;

    }
}

$city =new Countrysale();
$city->getTotalsale();

?>