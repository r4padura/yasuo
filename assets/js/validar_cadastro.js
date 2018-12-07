function validarCadastro(form) {
	if (form.nome.value==""||form.nome.value==null) {
	alert('Por favor digite um nome');
	form.nome.focus();
	return false;
	}
	
	if (form.email.value==""||form.email.value==null) {
	alert('Por favor digite um email válido');
	form.email.focus();
	return false;
	}
	
	if (form.senha.value==""||form.senha.value==null||form.senha.value.length<6) {
	alert('A senha deve conter no mínimo 6 caracteres');
	form.senha.focus();
	return false;
	}
} 