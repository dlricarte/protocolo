<!DOCTYPE html>
<!--
#AUTOR: RENAN JHONATHA
#DATA: 28 DE JUNHO DE 2014
#FUNÇÃO: Aplicação e desenvolvimento de envio do fluxo de documentos e exames de uma portaria
#EQUIPE: DESENVOLVIMENTO DO PRODÍGIO - SISTEMA DE LAUDO ELETRONICO
-->

<html lang="pt-br">
	<title>Laudo Eletrônico</title>
	<head>
		<meta charset="UTF-8">	
	    <link rel="shortcut icon" href="imagens/favicon.png"/>
	</head>
		<body>
			<center><h3>PRODÍGIO</h3></center>
			<hr>
			<!-- Formulário de envio com os dados-->
			<form name="entrada" action="inc/comandos_sql.php" method="POST">
				<!-- Tabela de opções da portaria-->
				<table width=22% align="center" border="0">
						<tr>
							<td width="4">
							<input type="radio" name="processo" value="PED">	
							</td>
							<td width="4"><center><img type="submit" src="imagens/selecionar.png" title="Clique para selecionar uma Entrada de Docoumento"></center></td>
							<td width="15">Entrada de Documento</td>
						</tr>
						<tr>
							<td width="4">
							<input type="radio" name="processo" value="PEE">
							<td width="4"><center><img type="submit" src="imagens/selecionar.png" title="Clique para selecionar uma Entrada de Exame"></center></td>
							<td width="15">Entrada de Exame</td>
						</tr>
						<tr>
							<td colspan="3"><p><br/></p>								
								<center><input type="submit" name="criar" value="Abrir Solicitação" title="Clique aqui para Abrir a solicitação"></center>	
							</td>
						</tr>
				</table>				
				</form>

				<p><br/></p>
				<p><br/></p>
			<!-- Rodapé da página-->
			<center><br><font size=2>Desenvolvido por ®<br>
			Desenvolvimento do PRODÍGIO - Soluções Inteligentes
			</font></center>
		</body>
</html>
<script>

if (form.entrada.processo.value = ""){
 alert ();
}
</script>