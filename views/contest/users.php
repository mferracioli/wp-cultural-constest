<div class="wrap">

	<!-- title -->
	<div class="icon32" id="icon-edit-pages"><br/></div>
	<h2>
		Usuários Cadastrados para "<?php echo $contest->name; ?>"
		<a class="button add-new-h2" href="?page=cultural-contest&action=users&view=list&id=<?php echo $contest->id; ?>">Gerar Lista</a>
		<a class="button add-new-h2" href="?page=cultural-contest&action=index">Voltar</a>
	</h2>
	<!-- /title -->
	
	<!-- form -->
	<form method="get" action="?page=cultural-contest">

		<!-- table -->
		<table cellspacing="0" class="widefat page fixed" style="margin-top:20px;">
			
			<thead>
				<tr>
					<th style="" class="manage-column column-cb check-column" scope="col">&nbsp;</th>
					<th style="" class="manage-column column-title" scope="col">Nome</th>
					<th style="" class="manage-column column-email" scope="col">Email</th>
					<th style="" class="manage-column column-date" scope="col">Data</th>
				</tr>
			</thead>

			<tfoot>
				<tr>
					<th style="" class="manage-column column-cb check-column" scope="col">&nbsp;</th>
					<th style="" class="manage-column column-title" scope="col">Nome</th>
					<th style="" class="manage-column column-email" scope="col">Email</th>
					<th style="" class="manage-column column-date" scope="col">Data</th>
				</tr>
			</tfoot>

			<tbody>
				
				<?php foreach($items as $item) { ?>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">
						<a href="?page=cultural-contest-users&action=show&id=<?php echo $item->id; ?>"><?php echo $item->name; ?></a>
					</td>
					<td class="post-title column-email">
						<?php echo $item->email; ?>
					</td>
					<td class="date column-date">
						<abbr title="<?echo date('d/m/Y', strtotime($item->created_at)); ?>"><?echo date('d/m/Y', strtotime($item->created_at)); ?></abbr>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<!-- /table -->

	</form>
	<!-- /form -->
	

</div>