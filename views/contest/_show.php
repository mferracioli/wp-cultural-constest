<div id="cultural-contest-description">
	<?php echo $contest->description; ?>
</div>

<div  id="cultural-contest-form-wrap">

	<form action="" method="POST" id="cultural-contest-form">
	
		<p class="cultural-contest-form-field name">
			<label id="contest-name">Nome:</label><br/>
			<input type="text" name="name" id="contest-name" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field email">
			<label id="contest-email">Email:</label><br/>
			<input type="text" name="email" id="contest-email" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field address1">
			<label id="contest-address1">Endereço:</label><br/>
			<input type="text" name="address1" id="contest-address1" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field address2">
			<label id="contest-address2">N°:</label><br/>
			<input type="text" name="address2" id="contest-address2" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field address3">
			<label id="contest-address3">Complemento:</label><br/>
			<input type="text" name="address3" id="contest-address3" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field address4">
			<label id="contest-address4">Bairro:</label><br/>
			<input type="text" name="address4" id="contest-address4" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field zipcode">
			<label id="contest-zipcode">CEP:</label><br/>
			<input type="text" name="zipcode" id="contest-zipcode" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field city">
			<label id="contest-city">Cidade:</label><br/>
			<input type="text" name="city" id="contest-city" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field state">
			<label id="contest-state">Estado:</label><br/>
			<input type="text" name="state" id="contest-state" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field document">
			<label id="contest-document">CPF:</label><br/>
			<input type="text" name="document" id="contest-document" class="textfield" />
		</p>
	
		<p class="cultural-contest-form-field answer">
			<label id="contest-answer">Sua Resposta:</label><br/>
			<textarea name="answer" id="contest-answer" class="textfield"></textarea>
		</p>
	
		<p class="cultural-contest-form-field submit">
			<input type="submit" value="Enviar Resposta" id="contest-submit" name="submit"/>
		</p>
	
	</form>
	
</div>
