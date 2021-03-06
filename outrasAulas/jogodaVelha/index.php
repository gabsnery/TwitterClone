<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jogo da Velha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <!-- <script src="jogo.js"></script>-->
    <script type="text/javascript" src="jogo.js?<?php echo time(); ?>"></script>
</head>
<body>

    <div id="pagina_inicial"  align = "center">
        <table border="1" width = "600px;">
            <tbody>
                <tr>
                    <td colspan = "3" align = "center">JOGO DA VELHA</td>
                </tr>
                <tr>
                    
                    <td align = "center">
                        <img src="imagens/jogador_1.png" alt="Foto do Jogador 1">
                        <br>
                        <input id="entrada_apelido_jogador_1" type="text" placeholder="Digite um apelido" maxlength="10" style="border:0px">
                    </td>
                    <td align = "center" id = "btn_iniciar_jogo">
                        <img src="imagens\iniciar.png" alt="Botao iniciar">
                    </td>
                    <td align = "center">
                        <img src="imagens/jogador_2.png" alt="Foto do Jogador 2">
                        <br>
                        <input id="entrada_apelido_jogador_2" type="text" placeholder="Digite um apelido" maxlength="10" style="border:0px">
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    <div id="palco_jogo"  align = "center" style="display:none;margin-top:50px;">
        <div style="display:inline-block;">
            <img src="imagens\jogador_1.png" alt="">
            <br>
            <span id="nome_jogador_1"></span>
        </div>
        <div style="display:inline-block;">
            <table >
                <tr >
                    <td style="border-bottom: solid 1px red; border-right: solid 1px red;">
                        <div class="jogada" id="A1" style="width : 100px; height : 100px;"></div>
                    </td>
                    <td style="border-bottom: solid 1px red; border-right: solid 1px red;">
                        <div class="jogada" id="A2" style="width : 100px; height : 100px;"></div>
                    </td>
                    <td style="border-bottom: solid 1px red;">
                        <div class="jogada" id="A3" style="width : 100px; height : 100px;"></div>
                    </td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 1px red; border-right: solid 1px red;">
                        <div class="jogada" id="B1" style="width : 100px; height : 100px;"></div>
                    </td>
                    <td style="border-bottom: solid 1px red; border-right: solid 1px red;">
                        <div class="jogada" id="B2" style="width : 100px; height : 100px;"></div>
                    </td>
                    <td style="border-bottom: solid 1px red;">
                        <div class="jogada" id="B3" style="width : 100px; height : 100px;"></div>
                    </td>
                </tr>
                <tr>
                    <td style=" border-right: solid 1px red;">
                        <div class="jogada" id="C1" style="width : 100px; height : 100px;"></div>
                    </td>
                    <td style=" border-right: solid 1px red;">
                        <div class="jogada" id="C2" style="width : 100px; height : 100px;"></div>
                    </td>
                    <td>
                        <div class="jogada"  id="C3" style="width : 100px; height : 100px;"></div>
                    </td>
                </tr>
            </table>
        </div>
        <div style="display:inline-block;">
            <img src="imagens\jogador_2.png" alt="">
            <br>
            <span id="nome_jogador_2"></span>
        </div>
    </div>

</body>
</html>
