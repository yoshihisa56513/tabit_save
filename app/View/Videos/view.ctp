<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "tabit" ?>:
		
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('bootstrap.min');
		echo $this->fetch('script');
	?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50626188-1', 'chu.jp');
  ga('send', 'pageview');

</script>
</head>
<body>
<?php echo $this->Html->link('旅動画一覧',
	array('controller'=>'Videos',
		'action'=>'index'));
?>
<br>

<?php echo $this->Html->link('旅動画を追加しよう',
	array('controller'=>'Videos',
		'action'=>'add'));
?>


<div class="videos view">

	
		
		<?php echo $video['Video']['video_url']; ?><br><br>
	<h3><?php echo h($video['Video']['title']) ?> </h3><br>
	<tr>	<td>場所:<?php echo h($video['Video']['place']); ?></td> <br>
		<td><p>説明：<?php echo h($video['Video']['comment']); ?></p></td> <br>



	</tr>
	</div>
</body>


</html>