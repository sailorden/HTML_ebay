<?= link_js('js/mobile_blue/jquery.min.js') ?><!--internal JS-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<?= link_js('js/mobile_blue/jquery.easydropdown.js') ?><!--internal JS-->
<?= link_js('js/mobile_blue/jquery.magnific-popup.js') ?><!--internal JS-->
<?= link_js('js/mobile_blue/jquery.etalage.min.js') ?><!--internal JS-->

<?= link_js('js/mobile_blue/easyResponsiveTabs.js') ?><!--internal JS-->


	
<script>
	$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
</script>

<script>
	jQuery(document).ready(function($){

		$('#etalage').etalage({
			thumb_image_width: 450,
			thumb_image_height: 450,
			
			show_hint: true,
			click_callback: function(image_anchor, instance_id){
				alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
			}
		});
		// This is for the dropdown list example:
		$('.dropdownlist').change(function(){
			etalage_show( $(this).find('option:selected').attr('class') );
		});

	});
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>

<?php if ($this->uri->segment(2) == 'html'): ?>
	
	<?= link_js('js/mobile_blue/interface.js') ?>
	
	<?= link_js('js/ckeditor/ckeditor.js') ?>
	
	<?= link_js('js/mobile_blue/inline.js') ?>
	
<?php endif ?>	