
<?php

 

$login = $_POST["Cacador"];
$senha = MD5($_POST["Senha"]);
$connect = mysql_connect("localhost","346765","rian123");
$db = mysql_select_db("349765db2");
$query_select = "SELECT Login FROM Login WHERE Login = $login;
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array["Cacador"];

 

 if($login == " || $login == null){

    echo”<script language="javascript" type="text/javascript">alert("O campo Qual seu nome de caçador deve ser preenchido");window.location.href="JedivsSith.html";</script>”;

    }else{

      if($logarray == $login){

        echo”<script language="javascript" type="text/javascript">alert("Esse Caçador já existe");window.location.href="JedivsSith.html";</script>”;

        die();

 

      }else{

        $query = “INSERT INTO usuarios (Login,Senha) VALUES ("$login","$senha")”;

        $insert = mysql_query($query,$connect);

        if($insert){

          echo”<script language="javascript" type="text/javascript">alert("Usuário cadastrado com sucesso!");window.location.href="login.html"</script>”;

        }else{

          echo”<script language="javascript" type="text/javascript">alert("Não foi possível cadastrar esse Caçador");window.location.href="cadastro.html"</script>;

        }

      }

    }

?>






 

