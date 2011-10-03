<div class="wrap">

	<!-- title -->
	<div class="icon32" id="icon-edit-pages"><br/></div>
	<h2>
		Novo Concurso
	</h2>
	<!-- /title -->
	
	<!-- message -->
	<?php if (isset($message)) { ?>
	<div class="updated below-h2" id="message"><p><?php echo $message ?></p></div>
	<?php } ?>
	<!-- /message -->
	
	<!-- form -->
	<form method="POST" action="?page=cultural-contest&action=create">
		
		<div class="form-wrap">
			<?php require(dirname(__FILE__) . "/_form.php"); ?>
			<p class="submit" style="padding:8px;"><input type="submit" value="Adicionar concurso" id="submit" name="submit" class="button"></p>
		</div>
		
	</form>
	<!-- /form -->
	
</div>