<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
?>
<br />
<center>
	<?php echo adshow('footerbanner//1').adshow('footerbanner//2').adshow('footerbanner//3'); ?>
	<div id="footer">
		Supported by <strong><a target="_blank" href="https://www.freestyle.com/">Freestyle <?php echo $_G['setting']['version']; ?> Archiver</a></strong> &nbsp; &copy 2018-2028 Freestyle Group.</a>
		<br />
		<br />
	</div>
</center>
</body>
</html>
<?php output(); ?>
