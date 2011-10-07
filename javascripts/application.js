jQuery(document).ready(function($){
	
	$("#cultural-contest-form").validate({
		errorLabelContainer: "#cultural-contest-form-errors"
	});
	
	try { $("#contest-name").rules("add", { required: true, messages: { required: "Campo 'Nome' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-email").rules("add", { required: true, email: true, messages: { required: "Campo 'Email' precisa ser preenchido.", email: "Email informado não é válido." } }); } catch(e) {}
	try { $("#contest-address1").rules("add", { required: true, messages: { required: "Campo 'Endereço' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-address2").rules("add", { required: true, messages: { required: "Campo 'Número' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-address3").rules("add", { required: true, messages: { required: "Campo 'N°' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-address4").rules("add", { required: true, messages: { required: "Campo 'Complemento' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-zipcode").rules("add", { required: true, messages: { required: "Campo 'CEP' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-city").rules("add", { required: true, messages: { required: "Campo 'Cidade' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-state").rules("add", { required: true, messages: { required: "Campo 'Estado' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-document").rules("add", { required: true, messages: { required: "Campo 'CPF' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-birthday").rules("add", { required: true, messages: { required: "Campo 'Data de Nascimento' precisa ser preenchido." } }); } catch(e) {}
	try { $("#contest-answer").rules("add", { required: true, messages: { required: "Campo 'Resposta' precisa ser preenchido." } }); } catch(e) {}
	
	try { $("#contest-birthday").mask("99/99/9999"); } catch(e) {}
	
});