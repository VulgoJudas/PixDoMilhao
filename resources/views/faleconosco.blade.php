<!DOCTYPE html>
<html lang="lang=pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="teste.css">
        <title>Pix De Um Milhão</title>
        <style>
            body{
                background:#353535;
                color:white;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;

            }
            .conosco{
                width: 70%;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
            }
            .conoscoh3{
                color:white;
                width: 370px;
                font-size:40px;
                text-align:center;
            }
            p{
                font-size:20px;
            }
            .pconosco{
                font-size:30px;
            }
            .buttonconosco{
                background:yellow;
                display:block;
                width: 250px;
                height:40px;
                color:black;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:20px;
                border-bottom:2px solid yellow;
                border-radius:30px;
            }
            .buttonconosco:hover{
                background:gray;
                display:block;
                width: 250px;
                height:40px;
                color:white;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:20px;
                border-bottom:2px solid gray;
                border-radius:30px;
            }
            .blococonosco{
                background:black;
                width: 100%;
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
                margin-bottom:50px;
                border-radius:30px;
                padding-bottom:10px;
                padding-top:10px;
            }
        </style>

       
</head>
<body>
    @component("componentes/menu")

    @endcomponent

    <div class="conosco">
        <h3 class="conoscoh3">FALE CONOSCO</h3>

        <div class="blococonosco">
            <p class="pconosco">Fale conosco</p>
            <a href="http://" class="buttonconosco">Entrar Em Contato</a>
            <p>Atendimento:</p>
            <p>Suporte 24h para melhor te atender</p>
        </div>
    </div>


    @component("componentes/rodape")

    @endcomponent

    </body>
</html>