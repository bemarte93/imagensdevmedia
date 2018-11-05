<?php
  $conexao = mysql_connect("den1.mysql4.gear.host", "imagensdevmedia", "Wa036S~F40r-");
  $con = mysqli_connect("den1.mysql4.gear.host","imagensdevmedia","Wa036S~F40r-","imagensdevmedia"); 
    
  if($conexao)
  {
  $baseSelecionada = mysql_select_db("imagensdevmedia");
  if (!$baseSelecionada) {
      die ('Não foi possível conectar a base de dados: ' . mysql_error());
  } } else {
      die('Não conectado : ' . mysql_error());
  }
  ?>
