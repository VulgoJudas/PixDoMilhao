<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            margin:0px;
            padding:0px;
        }
        .menu{
            height:150px;
            width: 100%;
            background-color:black;
            color:white;
            border-bottom:1px solid green;
            display:flex;
            justify-content:center;
            align-items:center;
            
        }
        ul{
            list-style:none;
            font-size:18px;
            margin:0px;
            padding:0px;
            display:flex;
            flex-direction:row;
            
        }
        li{
            height:25px;
            margin-left:8px;
            margin-right:8px;
            padding:5px;
            
        }
        a{
            text-decoration:none;
            color:white;
            padding-bottom:3px;
            border-bottom:2px solid black;
        }
        a:hover{
            color:yellow;
            padding-bottom:3px;
            border-bottom:2px solid yellow;
        }
        .logo{
            margin-right:15px;
        }

        .logoimg{
            margin-right:40px;
            color:yellow;
            font-size:25px;
            text-transform:bolder;
            height:50px;
            margin-top:6px;
            display:flex;
            align-items:center;
        }

    </style>
</head>
<body>
    <div class="menu">
       <div>
        <a href="./" class="logo">
            <div class="logoimg">Pix Do Milhão</div>
        </a>
       </div>

        <ul>
            <a href="./"  ><li>Início</li></a>
            <a href="./ganhadores"><li>Ganhadores</li></a>
            <a href="./quem-somos"><li>Quem Somos</li></a>
            <a href="./fale-conosco"><li>Fale Conosco</li></a>
            <a href="./edicao-anteriores"><li>Edições Anteriores</li></a>
            <a href="./meus-numeros"><li>Meus Números</li></a>
        </ul>
    </div>
    
</body>
</html>