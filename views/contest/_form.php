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

<div class="form-field">
	
	<label>Exibir Campos</label>
	
	<p style="width:95%;">
		<input type="checkbox" <?php if ((bool)$item->show_name) { ?>checked="checked"<?php } ?> name="show_name" id="show-name" value="1" style="display:inline; width:auto;" /> Nome 
		<input type="checkbox" <?php if ((bool)$item->show_email) { ?>checked="checked"<?php } ?> name="show_email" id="show-email" value="1" style="display:inline; width:auto;" /> Email
		<input type="checkbox" <?php if ((bool)$item->show_address1) { ?>checked="checked"<?php } ?> name="show_address1" id="show-address1" value="1" style="display:inline; width:auto;" /> Endereço 
		<input type="checkbox" <?php if ((bool)$item->show_address2) { ?>checked="checked"<?php } ?> name="show_address2" id="show-address2" value="1" style="display:inline; width:auto;" /> Número 
		<input type="checkbox" <?php if ((bool)$item->show_address3) { ?>checked="checked"<?php } ?> name="show_address3" id="show-address3" value="1" style="display:inline; width:auto;" /> Complemento 
		<input type="checkbox" <?php if ((bool)$item->show_address4) { ?>checked="checked"<?php } ?> name="show_address4" id="show-address4" value="1" style="display:inline; width:auto;" /> Bairro 
		<input type="checkbox" <?php if ((bool)$item->show_zipcode) { ?>checked="checked"<?php } ?> name="show_zipcode" id="show-zipcode" value="1" style="display:inline; width:auto;" /> CEP <br/>
		<input type="checkbox" <?php if ((bool)$item->show_city) { ?>checked="checked"<?php } ?> name="show_city" id="show-city" value="1" style="display:inline; width:auto;" /> Cidade 
		<input type="checkbox" <?php if ((bool)$item->show_state) { ?>checked="checked"<?php } ?> name="show_state" id="show-state" value="1" style="display:inline; width:auto;" /> Estado 
		<input type="checkbox" <?php if ((bool)$item->show_document) { ?>checked="checked"<?php } ?> name="show_document" id="show-document" value="1" style="display:inline; width:auto;" /> CPF 
		<input type="checkbox" <?php if ((bool)$item->show_birthday) { ?>checked="checked"<?php } ?> name="show_birthday" id="show-birthday" value="1" style="display:inline; width:auto;" /> Data de Nascimento 
		<input type="checkbox" <?php if ((bool)$item->show_answer) { ?>checked="checked"<?php } ?> name="show_answer" id="show-answer" value="1" style="display:inline; width:auto;" /> Resposta 
	</p>
	
</div>