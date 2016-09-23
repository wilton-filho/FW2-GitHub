function validarNome() {
	nome = document.getElementById("nomeAluno").value;
	if (nome == "")
		alert("Nome em branco. Favor informar pelo menos parte do primeiro nome");
	else {
		document.getElementById("formulario").submit();
	}
}