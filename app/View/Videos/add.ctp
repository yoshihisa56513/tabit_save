<!DOCTYPE html>
<html>
<head>
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

<div class="customers form">
	<?php echo $this ->Form->create('Video', array('class' =>'form-horizontal'));?>
<fieldset>
	<legend><?php echo __('動画追加'); ?></label>

	<div class="control-group">
	<?php

		echo $this->Form->label(
		'title',
		'<font color="red">*</font>タイトル',
		array('class' => 'control-label','for' => 'title')


		);
		echo $this->Form->input(
			'title',
			array('label' => false, 'class' => 'input-small', 'div' => array('class' =>'controls'))

		);

		?>

	</div>
	<div class="control-group">
	<?php

		echo $this->Form->label(
		'place',
		'<font color="red">*</font>場所',
		array('class' => 'control-label', 'for' => 'place')


		);
		echo $this->Form->input(
			'place',
			array('label' => false, 'class' => 'input-small', 'div' => array('class' =>'controls'))
		);

		?>

	</div>
	<div calss="control-group">
	<?php
		echo $this->Form->label(
		'video_url',
		'<font color="red">*</font>Youtube埋め込みコード',
		array('class' => 'control-label', 'for' => 'video_url')	


		);
		echo $this->Form->input(
		'video_url',
		array('label' => false, 'class' => 'input-xlarge','div' => array('class' => 'controls'))
		);
		?>
		</div>
	<div calss="control-group">
	<?php
		echo $this->Form->label(
		'comment',
		'<font color="red">*</font>コメント',
		array('class' => 'control-label', 'for' => 'comment')	


		);
		echo $this->Form->input(
		'comment',
		array('label' => false, 'class' => 'input-xlarge','div' => array('class' => 'controls'))
		);
		?>
		</div>


		<div class="form-actions">
	
		<?php 
			echo $this->Form->button('追加', array('class' => 'btn btn-primary'));

			echo $this->Html->link(__('キャンセル'), array('action' =>'index'), array('class' => 'btn'));
			?>
			</div>

			<?php 
				echo $this->Form->end();
				?>

		</div>
		</body>
		</html>