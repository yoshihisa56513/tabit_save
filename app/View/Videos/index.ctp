<!DOCTYPE html>
<html>
<head><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50626188-1', 'chu.jp');
  ga('send', 'pageview');

</script>
</head>
<body>

<?php echo $this->Html->link('旅動画を追加しよう',
	array('controller'=>'Videos',
		'action'=>'add'));
?>
<div class="videos index">







<br>


<br>

<table cellpadding="0" cellspacing="0">
<tr>
	
	
	
</tr>

<?php 
	foreach ($videos as $video):
	?>

	<tr>
		
		<td> <?php
		$v = $video['Video']['video_url'];
		 $this->Html->link($this->Common->tmb($v),'./view/'.$video['Video']['id']); ?></td>
	
	    <td><?php echo $this->Html->link($video['Video']['title'],'./view/'.$video['Video']['id']);?></td>
		<td><?php echo h($video['Video']['place']); ?></td>
		



	</tr>

	<?php endforeach; ?>
	</table>

</div>
<body>
</html>

