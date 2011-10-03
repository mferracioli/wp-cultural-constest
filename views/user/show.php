<div class="wrap">
	
	<!-- title -->
	<div class="icon32" id="icon-edit-pages"><br/></div>
	<h2>
		Dados do Usuário "<?php echo $user->name; ?>" em "<?php echo $contest->name; ?>"
		<a class="button add-new-h2" href="?page=cultural-contest&action=users&id=<?php echo $user->contest_id; ?>">Voltar</a>
	</h2>
	<!-- /title -->
	
	<!-- form -->
	<form method="get" action="?page=cultural-contest">

		<!-- table -->
		<table cellspacing="0" class="widefat page fixed" style="margin-top:20px;">
			
			<thead>
				<tr>
					<th style="" class="manage-column column-cb check-column" scope="col">&nbsp;</th>
					<th style="width:150px;" class="manage-column column-title" scope="col">Campo</th>
					<th style="" class="manage-column column-title" scope="col">Valor</th>
				</tr>
			</thead>

			<tfoot>
				<tr>
					<th style="" class="manage-column column-cb check-column" scope="col">&nbsp;</th>
					<th style="width:150px;" class="manage-column column-title" scope="col">Campo</th>
					<th style="" class="manage-column column-title" scope="col">Valor</th>
				</tr>
			</tfoot>

			<tbody>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Nome</td>
					<td class="post-title page-title column-title"><?php echo $user->name; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Email</td>
					<td class="post-title page-title column-title"><?php echo $user->email; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Endereço</td>
					<td class="post-title page-title column-title"><?php echo $user->address1; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Número</td>
					<td class="post-title page-title column-title"><?php echo $user->address2; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Complemento</td>
					<td class="post-title page-title column-title"><?php echo $user->address3; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Bairro</td>
					<td class="post-title page-title column-title"><?php echo $user->address4; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">CEP</td>
					<td class="post-title page-title column-title"><?php echo $user->zipcode; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Cidade</td>
					<td class="post-title page-title column-title"><?php echo $user->city; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Estado</td>
					<td class="post-title page-title column-title"><?php echo $user->state; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">CPF</td>
					<td class="post-title page-title column-title"><?php echo $user->document; ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Data de Nascimento</td>
					<td class="post-title page-title column-title"><?php echo date('d/m/Y', strtotime($user->birthday)); ?></td>
				</tr>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">Resposta</td>
					<td class="post-title page-title column-title"><?php echo $item->answer; ?></td>
				</tr>
			</tbody>
		</table>
		<!-- /table -->

	</form>
	<!-- /form -->
	

</div>