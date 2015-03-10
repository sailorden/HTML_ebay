<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<?= link_js('var base_url ="'.$this->config->site_url().'";',$index_page = FALSE) ?><!--base url for js-->
<?= link_js('var folder_template ="'.$folder_template.'";',$index_page = FALSE) ?><!--folder template for js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?= link_js('js/prefixfree.min.js') ?>

<!-- END PLUGINS -->
<?php if(isset($js)):  ?><?= $js ?><?php endif ?><!--This file contains the js using the class in question -->
