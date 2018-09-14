<?php if (!$cols) {return;} ?>

<thead>
    <tr>
        <?php foreach ($cols as $col) { ?>
        <th>
        	<?php echo $col; ?>
			<button id="name" data-title="<?php echo $col; ?>"></button>
		</th>
        <?php  }?>
    </tr>
</thead>
