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
            justify-content:center;
            align-items:center;
            flex-direction:column;
          } 
          .ganhadores{
            width: 90%;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
          } 
          .descri{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:row;
          }
          .descriganhador{
            background:black;
            color:white;
            width: 250px;
            height:100%;
            border-radius:50px;
            padding:10px 20px 10px 20px;
            margin-bottom:30px;
            margin-right:30px;
            text-align:center;
          }
          p{
            font-size:18px;
          }
          mark{
            background:black;
            color:yellow;
          }
          .ganhadesc{
            color:white;
            font-size:35px;
            text-transform:bold;
          }
          h2{
            font-size:50px;
          }
          select{
            background:black;
            color:white;
            width: 70%;
            height:45px;
            border-radius:5px;
            border:1px solid white;
            padding:5px;
            font-size:20px;
            text-transform:bold;

          }
          
        </style>

       
</head>
<body>
    @component("componentes/menu")

    @endcomponent

    <div class="ganhadores">
        <h2>GANHADORES</h2>
        <select name="" id="">
            <option value="">Edição 25 pix do milhão R$ 3,99-R$1.000.000,00</option>
            <option value="">Edição 24 pix do milhão R$ 3,99-R$1.000.000,00</option>
            <option value="">Edição 23 pix do milhão R$ 3,99-R$1.000.000,00</option>
            <option value="">Edição 22 pix do milhão R$ 3,99-R$1.000.000,00</option>
            <option value="">Edição 21 pix do milhão R$ 3,99-R$1.000.000,00</option>
            <option value="">Edição 20 pix do milhão R$ 3,99-R$1.000.000,00</option>
            <option value="">Edição 19 pix do milhão R$ 3,99-R$1.000.000,00</option>
        </select>
        <p class="ganhadesc">Edição 25 Pix do Milhão R$ 3,99 - R$ 1.000.000,00<br>
            Sorteio dia 29/11/2024</p>
            <div class="descri">
                <div class="descriganhador">
                    <h2>Prêmio Instantâneo</h2>
                    <p><mark>R$ 5.000,00</mark></p>
                    <p>Número da sorte: 2333912</p>
                    <p>Ganhador(a): Natália s****</p>
                    <p>Telefone: ****-4354</p>
                    <p>CPF: 140.***.***-**</p>
                    <p>Data: 23/11/2024</p>
                </div>
                <div  class="descriganhador">
                    <h2>Prêmio Instantâneo</h2>
                    <p><mark>R$ 5.000,00</mark></p>
                    <p>Número da sorte: 2333912</p>
                    <p>Ganhador(a): Natália s****</p>
                    <p>Telefone: ****-4354</p>
                    <p>CPF: 140.***.***-**</p>
                    <p>Data: 23/11/2024</p>
                </div>
                <div class="descriganhador">
                    <h2>Prêmio Instantâneo</h2>
                    <p><mark>R$ 5.000,00</mark></p>
                    <p>Número da sorte: 2333912</p>
                    <p>Ganhador(a): Natália s****</p>
                    <p>Telefone: ****-4354</p>
                    <p>CPF: 140.***.***-**</p>
                    <p>Data: 23/11/2024</p>
                </div>
                
            </div>
    </div>

    @component("componentes/rodape")

    @endcomponent
    

    </body>
</html>