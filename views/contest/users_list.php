<div class="wrap">

	<!-- title -->
	<div class="icon32" id="icon-edit-pages"><br/></div>
	<h2>
		Usuários Cadastrados para "<?php echo $contest->name; ?>"
		<a class="button add-new-h2" href="?page=cultural-contest&action=users&id=<?php echo $contest->id; ?>">Voltar</a>
	</h2>
	<!-- /title -->
	
	<div class="form-wrap">
		<div class="form-field">
			<textarea style="width: 95%;; height:600px;"><?php foreach($items as $item) {  echo $item->name . ";" . $item->email . "\n"; } ?></textarea>
		</div>
	</div>
	
</div>
