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
            .quemsomos{
                margin:0px;
                padding:0px;
                width: 70%;
                padding-top:40px;
                padding-bottom:70px;
                display:flex;
                justify-content:start;
                align-items:start;
            }
            p{
                margin:0px;
                color:white;
                font-size:18px;
                text-transform:bold;
                margin-bottom:40px;
                margin-top:15px;
            }
            .quemsomosl{
                width: 50%;
                margin-right:15px;
            }
            .quemsomosla{
                width: 50%;
            }
            mark{
                background:#353535;
                color:yellow;
                font-size:35px;
            }
            h2{
                font-size:35px;
            }
            .sobrenos{
                font-size:17px;
            }
        </style>

       
</head>
<body>
    @component("componentes/menu")

    @endcomponent

    <div class="quemsomos">
        <div class="quemsomosl">
            <p class="sobrenos">Sobre NÓS</p>
            <h2>SOMOS O <br><br><mark>PIX DO MILHÃO</mark></h2>
        </div>

        <div class="quemsomosla">
            <p><mark>O PIX DO MILHÃO</mark> é uma iniciativa inovadora que, semanalmente, transforma vidas e realiza sonhos. Nosso compromisso é oferecer conhecimento por meio dos nossos e-books e, com isso, dar a você a chance de concorrer a diversos prêmios.</p>
            <p>Nossa missão vai além de oferecer prêmios — queremos mudar a vida de famílias por meio dos nossos ebooks e sorteios semanais. Além do conhecimento recebido pelos ebooks nos sorteios são 1001 chances de ganhar, com prêmios de até R$ 1 milhão e MIL BILHETES PREMIADOS de até R$ 40 mil reais.</p>
            <p>O Pix do Milhão não se trata apenas de ganhar dinheiro, mas de proporcionar uma transformação real. É sobre compartilhar conhecimento com e-books de qualidade e criar grandes histórias. Cada ganhador(a) tem uma trajetória única, e estamos aqui para celebrar essas conquistas e inspirar outras pessoas a acreditarem que a transformação é possível.</p>
            <p>Por isso, acredite! Junte-se a nós adquirindo seus e-books, porque a sorte pode sorrir para você esta semana!</p>
        </div>
    </div>


    @component("componentes/rodape")

    @endcomponent

    </body>
</html>