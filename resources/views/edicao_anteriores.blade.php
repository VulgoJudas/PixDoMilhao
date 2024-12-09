<!DOCTYPE html>
<html lang="lang=pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="teste.css">
        <title>Pix De Um Milhão</title>
        <style>
            body{
                color:white;
                background:#353535;
            }
            h2{
                font-size:45px;

            }
            .edicao{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                
            }
            .edicaodata{
                font-size:25px;
            }
            .regulamento{
                font-size:13px;
                border-bottom:2px solid #353535;
                margin-bottom:10px;
            }
            .encerrar{
                display:block;
                width: 150px;
                height: 30px;
                border-radius:15px;
                background:yellow;
                border-bottom:2px solid yellow;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:20px;
                color:black;
            }
            .encerrar:hover{
                display:block;
                width: 150px;
                height: 30px;
                border-radius:15px;
                background:gray;
                border-bottom:2px solid gray;
                display:flex;
                justify-content:center;
                align-items:center;
                color:white;
                font-size:18px;
            }
        </style>

       
</head>
<body>
    @component("componentes/menu")

    @endcomponent

    <div class="edicao">
        <h2>EDIÇÕES ANTERIORES</h2>
        <a href="http://" class="encerrar">Encerrado</a>
        <p class="edicaodata">Sorteio dia 01/11/2024 20:30</p>
        <p>O sorteio será realizado pela LOTEP</p>
        <a href="http://" class="regulamento">Regulamento</a>
        
    </div>


    @component("componentes/rodape")

    @endcomponent

    </body>
</html>