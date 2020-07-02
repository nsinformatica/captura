<?php
    header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Landing Page - contato@netosales.com.br</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<style type="text/css">
	    #tamanho{
	        width: 350px;
	        -webkit-box-shadow: 10px 10px 37px 0px rgba(115,113,115,1);
            -moz-box-shadow: 10px 10px 37px 0px rgba(115,113,115,1);
            box-shadow: 10px 10px 37px 0px rgba(115,113,115,1);
	    }
	</style>
    <script>
            function formatar(mascara, documento){
              var i = documento.value.length;
              var saida = mascara.substring(0,1);
              var texto = mascara.substring(i)
              
              if (texto.substring(0,1) != saida){
                        documento.value += texto.substring(0,1);
              }
              
            }
    </script>
</head>
<body>
<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
    <div style="padding: 10px;"> 
    <center>
    <img src="imagem/cadeado2.png" width="125px" height="125px">
    </center>
    <form action="index1.php" method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="telefone" class="form-control" placeholder="Telefone" OnKeyPress="formatar('(##)-#####-####', this)"autocomplete="off" required>
        </div>
    
    <div style="text-align: right;">
        <button type="submit" class="btn btn-sm btn-success">Enviar</button>
    </div>
    </form>
    </div>
</div>

<center>
    
</center>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>