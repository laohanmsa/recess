<?php
$title = 'Uninstall';
$selectedNav = 'apps';
include_once($viewsDir . 'common/header.php');
?>
<h1>To <span class="removed">Uninstall</span> <?php echo $app->name; ?>...</h1>
<ol>
	<li><span class="highlight">Open <?php echo $_ENV['dir.documentRoot']; ?>recess-config.php</span></li>
	<li>Find the <span class="highlight">Config::$applications</span> array.</li>
	<?php 
	$appClass = Library::getFullyQualifiedClassName(get_class($app));
	?>
	<li><span class="highlight">Remove the string '<?php echo $appClass; ?>'</span></li>
	<li>[Optional] Delete the directory <?php echo $_ENV['dir.apps'] . substr($appClass,0,strpos($appClass,'.')); ?></li>
</ol>
<h2>Th-Th-Th-Th-That's all folks. <a href="<?php echo $controller->urlToMethod('home'); ?>">Head back to apps.</a></h2>
<?php include_once($viewsDir . 'common/footer.php'); ?>