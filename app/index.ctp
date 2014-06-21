<?php echo $this->Html->link('動画を追加しよう',
	array('controller'=>'Videos',
		'action'=>'add'));
?>
<div class="videos index">


<h2><?php echo __('旅動画一覧');?></h2>

<br>

<br>

<table cellpadding="0" cellspacing="0">
<tr>
	
	
	<th><?php echo __('埋め込みコード'); ?></th>
	<th><?php echo __('タイトル'); ?></th>
	<th><?php echo __('場所'); ?></th>
	
	
</tr>

<?php 
	foreach ($videos as $video):
	?>

	<tr>
		
		<td>
 
<?php

preg_match('/www.youtube.\/embed\/([A-Za-z0-9]*)/', $video['Video']['video_url'], $youtubeUrl);
$youtubeId = str_replace("www.youtube.com/embed/","",$youtubeUrl[0]);
echo $youtubeUrl[0]
 
echo "<a href='" .esc_url(get_permalink()). "' >";
echo "<img class='y_thumbnail' src='http://img.youtube.com/vi/$youtubeId/0.jpg'></a>"  ;
?>
 

</td>
			<td><?php echo $this->Html->link(h($video['Video']['title'], array('controller'=>'Videos','action'=>'view') ?></td>
		<td><?php echo h($video['Video']['place']); ?></td>
		



	</tr>

	<?php endforeach; ?>
	</table>

</div>

