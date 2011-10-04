jQuery(document).ready(function($){
	
	$("#cultural-contest-form").validate({
		errorLabelContainer: "#cultural-contest-form-errors"
	});
	
	$("#contest-name").rules("add", { required: true, messages: { required: "Campo 'Nome' precisa ser preenchido." } });
	$("#contest-email").rules("add", { required: true, email: true, messages: { required: "Campo 'Email' precisa ser preenchido.", email: "Email informado não é válido." } });
	$("#contest-address1").rules("add", { required: true, messages: { required: "Campo 'Endereço' precisa ser preenchido." } });
	$("#contest-address2").rules("add", { required: true, messages: { required: "Campo 'Número' precisa ser preenchido." } });
	$("#contest-address3").rules("add", { required: true, messages: { required: "Campo 'N°' precisa ser preenchido." } });
	$("#contest-address4").rules("add", { required: true, messages: { required: "Campo 'Complemento' precisa ser preenchido." } });
	$("#contest-zipcode").rules("add", { required: true, messages: { required: "Campo 'CEP' precisa ser preenchido." } });
	$("#contest-city").rules("add", { required: true, messages: { required: "Campo 'Cidade' precisa ser preenchido." } });
	$("#contest-state").rules("add", { required: true, messages: { required: "Campo 'Estado' precisa ser preenchido." } });
	$("#contest-document").rules("add", { required: true, messages: { required: "Campo 'CPF' precisa ser preenchido." } });
	$("#contest-birthday").rules("add", { required: true, messages: { required: "Campo 'Data de Nascimento' precisa ser preenchido." } });
	$("#contest-answer").rules("add", { required: true, messages: { required: "Campo 'Resposta' precisa ser preenchido." } });
	
	$("#contest-birthday").mask("99/99/9999");
	
});