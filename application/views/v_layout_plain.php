<?php
defined('BASEPATH') or exit('No direct script access allowed');

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>HDI - REUPLOAD</title>

	<link href="<?php echo base_url() ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url() ?>css/style_v1.8.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>css/customer.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url() ?>css/spinner.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url() ?>css/loadbar.css" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

	<script type="text/javascript" src="<?php echo base_url() ?>bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>


	<script>
		var base_url = '<?php echo base_url() ?>';
	</script>


</head>

<body style="background-color:#efefef">


	<?php echo $content ?>


	<div id="footer">
		<div style="background-color:#404241; padding:10px; text-align:center; color:#ddd; font-size:12px">
			&copy; Copyrights HDI <?php echo date('Y') ?>
		</div>
	</div>
	
</body>

</html>