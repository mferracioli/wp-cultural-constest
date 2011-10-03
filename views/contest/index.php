<div class="wrap">

	<!-- title -->
	<div class="icon32" id="icon-edit-pages"><br/></div>
	<h2>
		Concursos
		<a class="button add-new-h2" href="?page=cultural-contest&action=new">Criar Concurso</a>
	</h2>
	<!-- /title -->
	
	<!-- form -->
	<form method="get" action="?page=cultural-contest">

		<!-- filters -->
		<!--
		<ul class="subsubsub">
			<li><a class="current" href="?page=cultural-contest">Todos <span class="count">(<?php echo count($items); ?>)</span></a></li>
		</ul>
		-->
		<!-- /filters -->

		<!-- table -->
		<table cellspacing="0" class="widefat page fixed" style="margin-top:20px;">
			
			<thead>
				<tr>
					<th style="" class="manage-column column-cb check-column" scope="col">&nbsp;</th>
					<th style="" class="manage-column column-title" scope="col">Título</th>
					<th style="" class="manage-column column-comments num" scope="col"><div class="vers"><img src="<?php echo bloginfo('url'); ?>/wp-admin/images/comment-grey-bubble.png" alt="Respostas"></div></th>
					<th style="" class="manage-column column-date" scope="col">Data</th>
				</tr>
			</thead>

			<tfoot>
				<tr>
					<th style="" class="manage-column column-cb check-column" scope="col">&nbsp;</th>
					<th style="" class="manage-column column-title" scope="col">Título</th>
					<th style="" class="manage-column column-comments num" scope="col"><div class="vers"><img src="<?php echo bloginfo('url'); ?>/wp-admin/images/comment-grey-bubble.png" alt="Comments"></div></th>
					<th style="" class="manage-column column-date" scope="col">Data</th>
				</tr>
			</tfoot>

			<tbody>
				
				<?php foreach($items as $item) { ?>
				<tr class="alternate iedit">
					<th class="check-column" scope="row">&nbsp;</th>
					<td class="post-title page-title column-title">
						<strong><a title="Visualizar Cadastros" href="?page=cultural-contest&action=users&id=<?php echo $item->id; ?>" class="row-title"><?php echo $item->name; ?></a></strong>
						<div class="row-actions">
							<span class="edit"><a title="Editar essa página" href="?page=cultural-contest&action=edit&id=<?php echo $item->id; ?>">Editar</a> | </span>
							<span class="trash"><a href="?page=cultural-contest&action=delete&id=<?php echo $item->id; ?>" title="Excluir" class="submitdelete" onclick="if(!confirm('Deseja excluir este concurso e seus usuários?')) return false;">Excluir</a></span>
						</div>
					</td>
					<td class="comments column-comments">
						<div class="post-com-count-wrapper">
							<a class="post-com-count" title="<?php echo $contestModel->countContestUsers($item->id); ?> cadastro(s)" href="?page=cultural-contest&action=users&id=<?php echo $item->id; ?>"><span class="comment-count"><?php echo $contestModel->countContestUsers($item->id); ?></span></a>
						</div>
					</td>
					<td class="date column-date">
						<abbr title="<?echo date('d/m/Y', strtotime($item->created_at)); ?>"><?echo date('d/m/Y', strtotime($item->created_at)); ?></abbr>
						<!--
						<br/>
						Publicado
						-->
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<!-- /table -->

	</form>
	<!-- /form -->
	

</div>