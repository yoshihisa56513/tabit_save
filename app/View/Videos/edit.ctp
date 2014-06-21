<div class="customers form">
	<?php echo $this ->Form->create('Video', array('class' =>'form-horizontal'));?>
<fieldset>
	<legend><?php echo __('動画更新'); ?></label>

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
		'<font color="red">*</font>動画',
		array('class' => 'control-label', 'for' => 'video_url')	


		);
		echo $this->Form->input(
		'video_url',
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