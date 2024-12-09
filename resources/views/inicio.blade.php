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
            }
            mark{
                background:#353535;
                color:yellow;
            }
            .inicio{
                display:flex;
                justify-content:center;
                flex-direction:column;
                align-items:center;
            }
            .perguntas{
                display:flex;
                flex-direction:column;
                justify-content:center;
                width: 70%;
            }
            .centro{
                text-align:center;
            }
            .h3dasperg{
                font-size:50px;
                color:white;
            }
            .pdasperg{
                color:white;
                font-size:20px;
            }
            .respostas{
                color:white;
                font-size:20px;
            }
            .respostasbranco{
                color:black;
                font-size:35px;
                background:white;
                padding:10px;
                border-radius:15px;
            }
            .respostalink{
                color:yellow;
                border-bottom:2px solid #353535;
            }
            .participarwhats{
                display:flex;
                width: 70%;
            }
            h2{
                font-size:40px;
                color:white;
            }
            .participe{
                font-size:17px;
                color:white;
            }
            .parti{
                padding:5px;
                margin:5px;
            }
            .meulivro{
                display:block;
                background:#005500;
                width: 200px;
                height:100;
                border-bottom:2px solid #005500;
                display:flex;
                justify-content:center;
                align-items:center;
                border-radius:18px;
                font-size:23px;
                padding-left:15px;
                padding-right:15px;
                padding-top:10px;
                padding-bottom:10px;
                
            }
            .meulivro:hover{
                display:block;
                background:yellow;
                width: 200px;
                height:100;
                border-bottom:2px solid #005500;
                display:flex;
                justify-content:center;
                align-items:center;
                border-radius:18px;
                font-size:23px;
                padding-left:15px;
                padding-right:15px;
                padding-top:10px;
                padding-bottom:10px;
                color:black;
                
            }
            .contwhats{
                font-size:35px;
                color:white;
            }
            .whats{
                margin-left:15px;
                padding-left:15px;
            }
            .venda{
                background:black;
                width: 70%;
                display:flex;
                margin-top:30px;
                border-radius:15px;

            }
            .vender{
                width: 65%;
                padding:15px;
            }
            .venderbook{
                width: 35%;
            }
            .premio{
                margin:0px;
                color:yellow;
            }
            .sorteio{
                font-size:25px;
            }
            .sorteiovenda{

            }
            .premioebook{
                margin:5px;
                margin-top:10px;
                padding:5px;
                color:yellow;
            }
        </style>

       
    </head>
    <body>
        @component("componentes/menu")

        @endcomponent

        <div class="inicio">
            <div class="venda">
                <div class="vender">
                    <h2 class="premio">Prêmio em destaque</h2>
                    <p class="sorteio">SORTEIO DIA 29/11/2024</p>
                    <p class="sorteio">VOCÊ PODE SER O PRÓXIMO GANHADOR! - 1 MILHÃO DE REAIS + 1.000 BILHETES PREMIADOS</p>
                    <p>COMPRE  e-BOOK AGORA E GARANTA A SUA PARTICIPAÇÃO!</p>
                    <a href="./sorteio-venda"  class="meulivro">Comprar</a>
                </div>

                <div class="venderbook">
                    <h2 class="premioebook">COMPRE UM <br>E-BOOK</h2>
                    <p>E ganhe 1 número da sorte para concorrer!</p>
                    <p>Não fique de fora dessa, compre agora mesmo e concorra!</p>
                    <a href="" class="meulivro">Quero Comprar</a>
                </div>
            </div>
            <div class="participarwhats">
                <div class="parti">
                    <h2>É <mark>FÁCIL</mark>  PARTICIPAR!</h2>
                    <p class="participe">Aqui no Pix do Milhão, todo sonho começa com conhecimento.
                        E para te ajudar nessa jornada, toda semana lançamos uma coleção especial de e-books para te inspirar, guiar e transformar.
                        Escolha o seu conteúdo favorito e concorra a prêmios!</p>
                    <a href="" class="meulivro">Quero Meu E-book</a>
                </div>
                <div class='whats'>
                    <p class="contwhats">ENTRE NO NOSSO GRUPO DO WHATSAPP E CONCORRA DIARIAMENTE A PRÊMIOS EXCLUSIVOS!</p>
                    <a href="" class="meulivro">Entrar</a>
                </div>
            </div>
            <div class="perguntas">
                <h3 class="h3dasperg centro">PIX DO MILHÃO  <mark> é Seguro?<mark></h3>
                <p class="pdasperg centro">Dúvida? Estamos aqui para ajudar.</p>
                <p class="respostasbranco">Quem somos?</p>
                <p class="respostas">O Pix do Milhão é uma iniciativa inovadora que, semanalmente, transforma vidas e realiza sonhos. Nosso compromisso é oferecer conhecimento por meio dos nossos e-books e, com isso, dar a você a chance de concorrer a diversos prêmios.
Nossa missão vai além de oferecer prêmios — queremos mudar a vida de famílias por meio dos nossos e-books e sorteios semanais. Além do conhecimento recebido pelos e-books, nos sorteios são 1001 chances de ganhar, com prêmios de até R$ 1 milhão e MIL BILHETES PREMIADOS de até R$ 20 mil.
O Pix do Milhão não se trata apenas de ganhar dinheiro, mas de proporcionar uma transformação real. É sobre compartilhar conhecimento com e-books de qualidade e criar grandes histórias. Cada ganhador(a) tem uma trajetória única, e estamos aqui para celebrar essas conquistas e inspirar outras pessoas a acreditarem que a transformação é possível.
Por isso, acredite! Junte-se a nós adquirindo seus e-books, porque a sorte pode sorrir para você esta semana!</p>
                <p class="respostasbranco">Quem pode participar?</p>
                <p class="respostas">Qualquer pessoa pode adquirir os e-books, entretanto, para ser sorteado é necessário que seja pessoa física, brasileiro e maior de 18 anos.</p>
                <p class="respostasbranco">Como comprar?</p>
                <p class="respostas">As compras são efetuadas através do nosso site OFICIAL: www.pixdomilhao.com. A cada e-book que você compra, ganha 1 número da sorte para concorrer a 1 MILHÃO de reais e ainda 1.000 bilhetes premiados, de até 40 mil reais. Lembrando que, na hora de fazer o pix, nosso único recebedor é: PIX DO MILHÃO.</p>
                <p class="respostasbranco">O que é um e-book?</p>
                <p class="respostas">Um e-book é um livro digital que pode ser lido em dispositivos eletrônicos como computadores, celulares e tablets. Os nossos e-books contêm links que possibilitam a sua utilização por meio de libras e, ainda, como audiobooks tornando-os acessíveis para pessoas portadoras de deficiência.


Em nosso site, na aba EBOOKS, você encontra uma grande variedade de e-books com conteúdos diversos. Com isso, além de adquirir conhecimento, você concorre ao prêmio principal de R$ 1 milhão e mil prêmios instantâneos de até R$ 40 mil.</p>
                <p class="respostasbranco">Para participar, tenho que comprar um e-book?</p>
                <p class="respostas">Sim. Na aquisição de um e-book, você já tem a possibilidade de concorrer aos 1001 prêmios semanais.</p>
                <p class="respostasbranco">Como baixar o e-book e ver meus números?</p>
                <p class="respostas">Assim que você concluir o pagamento, ambos aparecem imediatamente na página de compra. Você também pode acessar ebook.pixdomilhao.com, digitar seu CPF e clicar em buscar para acessar os e-books e seus números da sorte.</p>
                <p class="respostasbranco">Comprei meus e-books, fiz o pagamento, mas aparece a mensagem: “aguardando pagamento”. O que fazer?</p>
                <p class="respostas">Atualize a página de consulta e suas compras irão aparecer normalmente. Caso ainda não apareça, entre em contato com nosso suporte através do link: www.pixdomilhao.com/suporte/atendimento.</p>
                <p class="respostasbranco">Como saber se um dos meus bilhetes é premiado?</p>
                <p class="respostas">Ao finalizar sua compra, nossa plataforma informa se você recebeu um bilhete premiado. Você também pode acessar nosso site e conferir a lista de bilhetes premiados. Caso seja premiado, seu nome constará ao lado do número do bilhete.</p>
                <p class="respostasbranco">Quando acontece o sorteio do prêmio principal?</p>
                <p class="respostas">O sorteio acontece semanalmente, toda sexta-feira, a partir das 20h.</p>
                <p class="respostasbranco">Onde posso assistir o sorteio?</p>
                <p class="respostas">Você pode acompanhar o sorteio na sede da LOTEP, na nossa live no Instagram @pixdomilhaooficial ou em nosso canal do YouTube @pixdomilhao.</p>
                <p class="respostasbranco">Como faço para receber o valor do bilhete premiado?</p>
                <p class="respostas">Nosso time entrará em contato através dos seus dados fornecidos no momento da compra. Lembrando que só ligamos por vídeo e NÃO COBRAMOS QUALQUER TAXA DE IMPOSTOS. Você recebe seu prêmio líquido, sem qualquer tipo de pagamento para retirada.</p>
                <p class="respostasbranco">O sorteio é autorizado?</p>
                <p class="respostas">SIM! Nosso sorteio é autorizado e fiscalizado pela LOTEP - Loteria Estadual da Paraíba, sob a autorização n.º LTP-PRC-0044/2024. Nosso processo é auditado e transparente.</p>
                <p class="respostasbranco">Qual o destinatário de pagamento?</p>
                <p class="respostas">Destinatário de pagamento: PIX DO MILHÃO PRÊMIOS E EBOOKS. CNPJ: 30.682.309/0001-70. Instituição: Mercado pago representações Fique atento, qualquer outro recebedor é falso!</p>
                <p class="respostasbranco">Quais as formas de pagamento?</p>
                <p class="respostas">Os pagamentos são realizados através do PIX, na modalidade “Copia e Cola”.</p>
                <p class="respostasbranco">Onde vejo os ganhadores?</p>
                <p class="respostas">Todos os ganhadores estarão no feed e destaques do nosso Instagram <a href="" class="respostalink">@pixdomilhaooficial</a> e também no site: <a href="" class="respostalink">www.pixdomilhao.com/resultados</a>.</p>
                <p class="respostasbranco">Como acionar o suporte?</p>
                <p class="respostas">Através do rodapé no site ou pelo link <a href="" class="respostalink">www.pixdomilhao.com/fale-conosco</a>, você pode entrar em contato com nosso suporte e tirar todas as suas dúvidas.</p>

            </div>
        </div>
            
        @component("componentes/rodape")

        @endcomponent
    </body>
</html>
