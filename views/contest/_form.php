<div class="form-field">
	<label for="contest-name">Nome</label>
	<input type="text" aria-required="true" id="contest-name" name="name" value="<?php echo $item->name; ?>" />
	<p>Informe o título da campanha.</p>
</div>

<div id="poststuff" style="padding: 8px;">
	<div id="postdivrich" class="postarea" style="width:95%;">
		<?php the_editor($item->description, 'description'); ?>
	</div>
</div>