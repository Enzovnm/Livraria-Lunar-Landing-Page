<?php
    //estabelecendo a conexão com banco de dados
    $conexao=mysql_pconnect('localhost','root','') or die("Problema ao efetuar a conexão com banco de dados");
       
    //abrindo o banco de dados que foi criado na área phpMyAdmin
    $abre_banco=mysql_select_db('BD_contato',$conexao) or die("Problema ao abrir o banco de dados");
   
    
   
    //executando o comando sql para listar os registros da tabela
    $comando=mysql_query("select * from TB_contato") or die(mysql_error());
   
    if(mysql_num_rows($comando) > 0)    // se resultou algum registro(linha)
    {       
        echo "<center>";
        echo "<table style='border:2px solid rgb(0,0,0)'>";
        echo "<tr style='border:2px solid rgb(0,0,0)'><th colspan=4 style='border:2px solid rgb(0,0,0);text-align:center'>Dados Cadastrados</th></tr>";
        echo "<tr style='border:2px solid rgb(0,0,0)'><th style='border:2px solid rgb(0,0,0);text-align:center'>Código</th><th style='border:2px solid rgb(0,0,0);text-align:center'>Nome</th><th style='border:2px solid rgb(0,0,0);text-align:center'>Sexo</th><th style='border:2px solid rgb(0,0,0);text-align:center'>E-mail</th></tr>";
               
        while ($linha=mysql_fetch_array($comando))
        {
			$contnome=$linha['Nome_cliente'];
            $contemail=$linha['Email_cliente'];
            $contmensagem=$linha['ms_cliente'];
           
           
            //imprimindo o vetor
            echo "<tr style='border:2px solid rgb(0,0,0)'><td style=' style='border:2px solid rgb(0,0,0);text-align:center'>$nome</td><td style='border:2px solid rgb(0,0,0);text-align:center'>$sexo</td><td style='border:2px solid rgb(0,0,0);text-align:center'>$email</td></tr>";
        }
        echo "</table>";
        echo "</center>";
    }
    else
    {
        echo "<script language=javascript> window.alert('Não existem registros para exibir!!!'); window.history.back(); </script>";
    }
   
    //carrega a página index.html novamente, do zero
    echo "<br/><br/>";
    echo "<center>";
    echo "<form>";
    echo "<input type='button' value='MENU' onClick='window.history.back()'/>";
    echo "</form>";
    echo "</center>";
    //fechando o banco de dados
    $fecha_banco=mysql_close($conexao);