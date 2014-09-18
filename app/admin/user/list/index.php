<?php
include( _i('inc/authenticate.php') );

$id = _arg(3);
$pageTitle = _t('Users');
?>
<!DOCTYPE html>
<html lang="<?php echo _lang(); ?>">
<head>
	<title><?php echo _title($pageTitle); ?></title>
	<?php include( _i('inc/head.php') ); ?>
</head>
<body>
	<?php include('view.php'); ?>
</body>
</html>
<script type="text/javascript">
$(function(){
	Page.User.List.init();
});
</script>