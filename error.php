<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

preg_match('#\((.*?)\)#', $name, $match) ;
echo $code = substr($match[1], 1) ;
echo $msg = strtolower((trim($name, '(', true))) ;

if ($code == 404) {
    echo "Error 404..." ; // Can put an image here as well
}
else if ($code == 403) {
    echo "Error 403..." ; // Can put an image here as well
}

?>
 
