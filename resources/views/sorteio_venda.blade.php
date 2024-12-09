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
            .sorteio_venda{
                width: 70%;
                display:flex;
                justify-content:center;
                text-align:center;
                flex-direction:column;
            }

            .sorteio_venda_primeiro_bloco{
                background:black;
                color:white;
                border-radius:15px;
                padding:20px;
            }
            .logoimg_sorteio{
                color:yellow;
                font-size:25px;
                text-decoration:none;
            }
            .sorteio_bloco_sub_um{
                display:flex;
                justify-content:space-between;
            }

            .minhas_compras{
                display:flex;
                border:yellow 1px solid;
                height:25px;
                width: 230px;
                color:white;
                text-decoration:none;
                border-radius:10px;
                justify-content:center;
                align-items:center;
                
            }
            .minhas_compras:hover{
                display:flex;
                background:yellow;
                border:yellow 1px solid;
                height:25px;
                width: 230px;
                color:black;
                text-decoration:none;
                border-radius:10px;
                justify-content:center;
                align-items:center;
                
            }

            .descricao_sorteio{
                text-transform:bold;
                font-size:18px;
                margin-top:20px;
                margin-bottom:20px;
                padding:10px;
                text-align:start;

            }
            .sorteio_bloco_sub_dois{
                display:flex;
                justify-content:space-between;
            }
            .data_sorteio, .valor_rifa{
                color:white;
                font-size:25px;
            }
            mark{
                background:#353535;
                color:white;
                font-size:28px;
                padding:6px;
                border-radius:5px;
            }

            .sorteio_bloco_sub_tres{
                display:flex;
                flex-direction:column;
                justify-content:start;
                text-align:start;
                background: #353535;
                border-radius:15px;
                padding:10px;
            }
            .barato{
                font-size:25px;
                
            }
            .sub_tres{
                display:flex;
                justify-content:space-between;
                background: black;
                border:yellow 1px solid;
                border-radius:15px;
                padding:10px;
                align-items:center;
            }
            .sub_tres_p{
                font-size:20px;
            }
            .preco_ant{
                font-size:14px;
                color:red;
                margin:0px;
            }
            .preco_at{
                font-size:16px;
                color:green;
                margin:0px;
            }
            .mark{
                background:black;
                color:green;
                font-size:28px;
                padding:6px;
                border-radius:5px;
            }
            .sorteio_bloco_sub_quatro{
                display:flex;
                flex-direction:column;
                text-align:start;
            }
            .quantidade{
                display:flex;
                justify-content:space-around;
            }
            .quantidade_bloco{
                border:yellow 1px solid;
                width: 150px;
                height: 50px;
                border-radius:15px;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:25px;
                margin-bottom:60px;
            }
            .mais_menos{
                display:flex;
                justify-content:space-around;
            }
            .operadores{
                border:yellow 1px solid;
                width: 100px;
                height: 50px;
                border-radius:15px;
                display:flex;
                justify-content:center;
                align-items:center;
                font-size:35px;
                margin-bottom:30px;
            }
            #quantidade_bilhete{
                background:black;
                border:yellow 1px solid;
                height:50px;
                width:500px;
                border-radius:15px;
                color:white;
                font-size:20px;
                text-align:center;
                

            }

            #quantidade_bilhete::-webkit-inner-spin-button{
                -webkit-appearance: none;
            }
            
            
        </style>

       
</head>
    <body>
        <div class="sorteio_venda">
            <div class="sorteio_venda_primeiro_bloco">
                <div class="sorteio_bloco_sub_um">
                    <a class="logoimg_sorteio" href="./">Pix Do Milhão</a>
                    <a class="minhas_compras" href="./meus-numeros">Minhas Compras</a>
                </div>
                <p class="descricao_sorteio">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cumque aperiam, ipsam eum cupiditate laborum accusamus natus veniam commodi dolore eos,
                    quibusdam nulla eligendi voluptate repudiandae, qui nihil. Inventore, ducimus perferendis?
                </p>
                <div class="sorteio_bloco_sub_dois">
                    <p class="data_sorteio">Sorteio: 13/12/2024 20:00</p>
                    <p class="valor_rifa">Por apenas <mark>R$ 3,99</mark></p>
                </div>
                <div class="sorteio_bloco_sub_tres">
                    <h2 class="barato">Compre Mais Barato</h2>
                    <div class="sub_tres">
                        <p class="sub_tres_p">+5 E-books/Números</p>
                        <div>
                            <p class="preco_ant">de:R$19,95</p>
                            <p class="preco_at">por apenas:<mark class="mark">R$9,99</mark></p>
                        </div>
                    </div>
                </div>
                <div class="sorteio_bloco_sub_quatro">
                    <h2>Escolha a quantidade</h2>
                    <div class="quantidade">
                        <div class="quantidade_bloco">+5</div>
                        <div class="quantidade_bloco">+10</div>
                        <div class="quantidade_bloco">+20</div>
                        <div class="quantidade_bloco">+50</div>
                    </div>
                    <div class="mais_menos">
                        <div class="operadores ">-</div>
                        <input  type="number" name="" id="quantidade_bilhete">
                        <div class="operadores ">+</div>
                    </div>
                    <div>
                        <div>
                            <p>6 E-books/números</p>
                            <p>R$23,94</p>
                            <p>R$11,99</p>
                        </div>
                        <div>
                            <a href="">Ir para Pagamento</a>
                        </div>
                </div>
                </div>
            </div>

            <div>
                <div>
                    <p>Cotas premiadas</p>
                    <p>946 disponíveis/1000 cotas</p>
                </div>
                <div>
                    <p>Todas</p>
                    <p>Disponíveis</p>
                    <p>Compradas</p>
                </div>
                <p>Ver Ganhadores</p>
                <div>
                    <div>
                        <p>R$ 20.000,00</p>
                        <div>
                            <p>3784731</p>
                            <p>Disponível</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="">Minhas Compras</a>
            <div>
                <a href="http://">👉CLIQUE E VEJA TODAS AS ENTREGAS DOS PRÊMIOS DE R$ 1.000.000,00 DE TODAS AS EDIÇÕES👈</a>
                <p><a href="http://">GRUPO VIP👈</a> PARTICIPE</p>
                <p><a href="http://">CANAL INSTAGRAM👈</a> PARTICIPE</p>
                <p>VEJA QUEM GANHOU OS R$ 1.000.000,00 NA AÇÃO O DIA 06/12/2024,<a href="http://">CLIQUE AQUI👈</a></p>
                <p>ASSISTA A LIVE DO SORTEIO DE R$ 1.000.000,00 NA AÇÃO 06/12/2024 <a href="http://"> CLIQUE AQUI👈</a></p>
                <p>ALÉM DE 1 MILHÃO TODA SEXTA-FEIRA, TEMOS 1000 BILHETES PREMIADOS VALENDO ATÉ R$ 40.000,00</p>
                <p>(Ao fazer sua compra, se vier um bilhete premiado, já será notificado no ato da compra e seu nome já aparecerá em nosso site, confira e nos acione para recebimento do prêmio.)</p>
                <p>Pix do Milhão trazendo conhecimento: Escolha o seu conteúdo favorito, temos ebooks dos mais variados temas, garanta o seu e concorra a diversos prêmios.</p>
                <p>O sorteio será sexta, dia 13/12/2024, às 20 horas, ao vivo, no Instagram <a href="http://"> @pixdomilhaooficial</a></p>
                <p>SUPORTE PIX DO MILHÃO 24H:<a href="http://">CLIQUE AQUI👈</a></p>
            </div>
            <div>
                <p>
                Este bilhete de loteria está com base na portaria ALTP-PRC-2024/00503 TERMO DE AUTORIZAÇÃO º 0077/2024 PIX DO MILHAO,
                PREMIOS E EBOOKS LTDA CNPJ: 30.682.309/0001-70. Antes de contratar, consulte o Regulamento do produto.
                É proibida á venda a menores de 18 anos. Os sorteios e entrega dos prêmios serão realizados de acordo com os 
                critérios estabelecidos neste site, nos termos seguintes: O adquirente concorrer: em todos os sorteios previstos no 
                bilhete digital emitido, mesmo sendo contemplado em alguns deles. Ao contribuir, o titular do BILHETE Digital concorda 
                desde já e sem ônus a utilizar o seu nome, sua voz e imagem para a divulgação desta campanha social. Confira o resultado dos sorteios e as condições de participação em www.pixdomilhao.com.
                </p>
            </div>
            <p>Consulte nossas condições gerais e regulamento</p>
            <a href="http://">Regulamento</a>
            <p>v0.1.80-2</p>
        </div>

    </body>
</html>