<meta charset="utf-8">
<?php
	/**
	*	@author: Vandreh Esmeraldo;
	*	@package: /view/list_common.php
	*
	* 	Este arquivo controla a criação e a 
	*   visualização de dados
	* 	em uma tabela. 
	*
	***/


	//Testar se existe conteúdo!
	#Se não existir, ele mostra a label 
	if($total == false){
		echo '<button class="btn btn-warning">';
			 echo ' <i class="fa fa-thumbs-down"></i>';
			 echo ' No existen resultados';
		echo '</button><br><br>';
		#se existir conteúdo, ele cria a tabela
	}else{

?>

<script type="text/javascript">
	alert('O cliente que investiu mais em compras foi: <?php echo $total[0]['cliente_name']; ?>')
</script>

<h3>
	<i class="fa fa-<?=$table_icon;?>"></i>
	<?php echo $table_header; ?>		
</h3>

<table class="table table-hover table-striped" id="tableGeral">
	<thead style="background-color: <?=$table_color;?>; color: white;" class="text-left">
	<?php
		//Imprimindo os títulos
		echo '<tr>';
			foreach ($table_titles as $key => $value) {
				echo '<th>',$value,'</th>';
			}
	?>
			
		</tr>
	</thead>

	<tbody>
		<?php
			foreach ($total as $key => $value) {
				echo '<tr>';
				foreach ($table_titles as $k => $v) {
					echo '<td>',$value[$k],'</td>';
				}
				echo '</tr>';
			}
		?>
	</tbody>
</table>
<?php } ?>
