<?php
namespace app\widgets;
use yii\helpers\Html;

class Lightbox  {

	public function img($url, $img = true, $alt = 'image', $grop = "image-1"){
		
		$img = ($img) ? Html::img($url, ['class' => 'img-responsive', 'alt' =>  $alt]) : null;
  		return Html::a ($img, $url, ['data-lightbox' => $grop]);
	}
	
}

?>	
