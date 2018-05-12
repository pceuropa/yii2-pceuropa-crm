<?php
use pceuropa\forms\FormBuilder;
$this->title = Yii::t('app', "Generate form code"). ": HTML, Bootsrap, JSON, Yii2";
?>

<h1><?= Yii::t('app', "Code Generator for forms") ?></h1>

<?= FormBuilder::widget([
		'test_mode' => false,
		'easy_mode' => false,
		'generator_mode' => true,
		'email_response' => false,
        'hide_button_form_save' => true
]);

?>
