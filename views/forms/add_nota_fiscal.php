<?php
	if(isset($_POST['acao'])) {
		$arquivo = $_FILES['file'];

		$arquivoNovo = explode('.',$arquivo['name']);

		if ($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg') {
			die('Voce nao pode fazer upload desse tipo de arquivo');
		}else{
			if (!file_exists($GLOBALS['project_path']."/uploads/")) {
				mkdir($GLOBALS['project_path']."/uploads/", 0777, true);
			}
			move_uploaded_file($arquivo['tmp_name'], $GLOBALS['project_path']."/uploads/".time().$arquivo['name']);
			echo 'Upload realizado com sucesso';
		}

	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<br>
	<div class="row">
		<div class="col-md-4">
		<label> Inserir Nota Fiscal: (somente arquivos jpg)</label><br><br>
			<input type="file" name="file" required/>
		</div>
		<div class="col-md-4"><br><br>
			<input type="submit" name="acao" value="enviar" />
		</div>
	</div>
</form>
