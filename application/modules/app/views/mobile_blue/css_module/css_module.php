<?= link_tag('css/mobile_blue/bootstrap.css') ?>
<?= link_tag('css/mobile_blue/style.css') ?>
<?= link_tag('css/mobile_blue/color.css') ?>
<?= link_tag('css/mobile_blue/component.css') ?>

<?= link_tag('http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900') ?><!--css file, You can write relative and absolute links-->
<?= link_tag('http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900') ?><!--css file, You can write relative and absolute links-->

<?= link_tag('css/mobile_blue/magnific-popup.css') ?>
<?= link_tag('css/mobile_blue/etalage.css') ?>

<?php if ($this->uri->segment(2) == 'html'): ?>
	
	<?= link_tag('css/mobile_blue/interface.css') ?>
	<?= link_tag('js/colorpicker/colpick.css') ?>
	
<?php endif ?>

