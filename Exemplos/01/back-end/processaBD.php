<?php
	$nomeAluno = $_POST['nomeAluno'];

	$conexao = new mysqli("localhost", "wiltonpf", "@ula_fw2", "wiltonpf_apresentacao");

	if ($conexao->connect_error)
		print "Falha na conexao";
	else {
		$consulta = "select * from alunos where nome like '%".$nomeAluno."%'";
		$resultado = $conexao->query($consulta);
		
		if ($resultado->num_rows > 0) {
			while($linha = $resultado->fetch_assoc()) {
				print "Nome = ".$linha["nome"]."<br>";
				print "Nota = ".$linha["nota"]."<br><br>";
			}
		}
		else print "Tabela vazia!!!";
		$conexao->close();
	}
?>