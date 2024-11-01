<style>
    #wpcontent
    {
        padding-left: 0 !important;
    }

    #wpbody-content
    {
        padding-bottom: 0 !important;
    }

    #wpbody
    {
	    background: #fff;
	    padding-top: 10px;
    }
</style>

<?php
$site = preg_replace("/www\.|https?:\/\/|\/$|\/?\?.+|\/.+|^\./", '', get_home_url());
$hash = sha1("wordpress_call_button_" . $site);
?>

<script>
	window.previewPlatform = "wordpress";
	window.previewAppName = "call_button";
	window.previewToken = "<?php echo esc_attr($hash)?>";
	window.previewWebsiteURL = "<?php echo esc_attr($site)?>";
</script>

<app-root></app-root>
