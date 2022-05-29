<?php
    //estabelecendo a conexão com banco de dados
    $conexao=mysql_pconnect('localhost','root','') or die("Problema ao efetuar a conexão com banco de dados");
       
    //abrindo o banco de dados que foi criado na área phpMyAdmin
    $abre_banco=mysql_select_db('trabalhe_conosco',$conexao) or die("Problema ao abrir o banco de dados");
   
	$nome=$_POST['trabnome'];
	$email=$_POST['trabemail'];
	$telefone=$_POST['telefone'];
	$data=$_POST['data'];
	$mensagem=$_POST['trabmensagem'];


    $comando=mysql_query("insert into tbl_trabalheConosco(nm_candidato,email_candidato,celular_candidato,nasc_candidato,sobre_candidato)values('$nome','$email','$telefone','$data','$mensagem')") or die(mysql_error());

    echo "<script language=javascript> window.alert('Dados enviados com sucesso!'); </script>";

    $fecha_banco=mysql_close($conexao);

    echo "<script language=javascript>window.location.href = 'http://localhost/Livraria%20Lunar/'; </script>";
    
    ?>