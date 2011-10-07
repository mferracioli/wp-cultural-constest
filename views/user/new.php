<div id="cultural-contest-description">
	<?php echo $contest->description; ?>
</div>

<div  id="cultural-contest-form-wrap">

	<div  id="cultural-contest-form-errors">
	</div>

	<form action="#" method="POST" id="cultural-contest-form">
		
		<input type="hidden" name="action" value="create" />
		<input type="hidden" name="contest_id" value="<?php echo $contest->id; ?>" />
		
		<?php if ((bool)$contest->show_name) { ?>
		<p class="cultural-contest-form-field name">
			<label for="contest-name">Nome:</label><br/>
			<input type="text" name="user_name" id="contest-name" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_email) { ?>
		<p class="cultural-contest-form-field email">
			<label for="contest-email">Email:</label><br/>
			<input type="text" name="user_email" id="contest-email" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_address1) { ?>
		<p class="cultural-contest-form-field address1">
			<label for="contest-address1">Endereço:</label><br/>
			<input type="text" name="user_address1" id="contest-address1" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_address2) { ?>
		<p class="cultural-contest-form-field address2">
			<label for="contest-address2">N°:</label><br/>
			<input type="text" name="user_address2" id="contest-address2" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_address3) { ?>
		<p class="cultural-contest-form-field address3">
			<label for="contest-address3">Complemento:</label><br/>
			<input type="text" name="user_address3" id="contest-address3" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_address4) { ?>
		<p class="cultural-contest-form-field address4">
			<label for="contest-address4">Bairro:</label><br/>
			<input type="text" name="user_address4" id="contest-address4" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_zipcode) { ?>
		<p class="cultural-contest-form-field zipcode">
			<label for="contest-zipcode">CEP:</label><br/>
			<input type="text" name="user_zipcode" id="contest-zipcode" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_city) { ?>
		<p class="cultural-contest-form-field city">
			<label for="contest-city">Cidade:</label><br/>
			<input type="text" name="user_city" id="contest-city" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_state) { ?>
		<p class="cultural-contest-form-field state">
			<label for="contest-state">Estado:</label><br/>
			<input type="text" name="user_state" id="contest-state" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_document) { ?>
		<p class="cultural-contest-form-field document">
			<label for="contest-document">CPF:</label><br/>
			<input type="text" name="user_document" id="contest-document" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_birthday) { ?>
		<p class="cultural-contest-form-field birthday">
			<label for="contest-birthday">Data de Nascimento:</label><br/>
			<input type="text" name="user_birthday" id="contest-birthday" class="textfield" />
		</p>
		<?php } ?>
	
		<?php if ((bool)$contest->show_answer) { ?>
		<p class="cultural-contest-form-field answer">
			<label for="contest-answer">Sua Resposta:</label><br/>
			<textarea name="user_answer" id="contest-answer" class="textfield"></textarea>
		</p>
		<?php } ?>
	
		<p class="cultural-contest-form-field submit">
			<input type="submit" value="Enviar Resposta" id="contest-submit" />
		</p>
	</form>
	
</div>