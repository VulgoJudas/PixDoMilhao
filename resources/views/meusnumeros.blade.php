<!DOCTYPE html>
<html lang="lang=pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="teste.css">
        <title>Pix De Um Milhão</title>
        <style>
            body{
                background:#888;
            }
          a{
            display:block;
            color:yellow;
            font-size:30px;
            text-decoration:none;
          }
          .meusnumeros{
            height:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
          }
          p{
            font-size:25px;
            text-transform:bold;
          }
          .cpf{
            font-size:18px;
            text-transform:bold;
            margin:0px;
            padding:0px;
          }
          input{
            width: 300px;
            height:25px;
            border-radius:5px;
            border:1px solid black;
            padding:3px;
            margin-bottom:20px;
          }
          .vernumeros{
            background:yellow;
            color:black;
            font-size:18px;
            height:30px;
          }
          .vernumeros:hover{
            background:black;
            color:white;
            font-size:18px;
            height:30px;
          }
          
        </style>

       
</head>
    <body>  
    
        <div class="meusnumeros">
            <a href="./">PIX DO MILHÃO</a>
            <p>Para visualizar os dados da sua compra, informe seu CPF</p>
            <form action="" method="post">
                <p class="cpf">CPF:</p><br>
                <input type="text" placeholder='CPF' ><br>
                <input type="submit" value="Ver Compras" class="vernumeros" >
            </form>
        </div>

    </body>
</html>