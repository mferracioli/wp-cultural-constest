<div class="wrap">

	<!-- title -->
	<div class="icon32" id="icon-edit-pages"><br/></div>
	<h2>
		Alterando Concurso
	</h2>
	<!-- /title -->
	
	<!-- message -->
	<?php if (isset($flashMessage)) { ?>
	<div class="updated below-h2" id="message"><p><?php echo $flashMessage ?></p></div>
	<?php } ?>
	<!-- /message -->
	
	<!-- form -->
	<form method="POST" action="?page=cultural-contest&action=update&id=<?php echo $item->id; ?>">
		
		<div class="form-wrap">
			<?php require(dirname(__FILE__) . "/_form.php"); ?>
			<p class="submit" style="padding:8px;"><input type="submit" value="Atualizar concurso" id="submit" name="submit" class="button"></p>
		</div>
		
	</form>
	<!-- /form -->
	
</div>