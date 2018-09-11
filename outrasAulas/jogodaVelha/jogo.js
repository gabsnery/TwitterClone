var rodada = 1 ;
var matriz_jogo = Array(3);
matriz_jogo['A'] = Array(3);
matriz_jogo['B'] = Array(3);
matriz_jogo['C'] = Array(3);

matriz_jogo['A'][1] = 0;
matriz_jogo['A'][2] = 0;
matriz_jogo['A'][3] = 0;

matriz_jogo['B'][1] = 0;
matriz_jogo['B'][2] = 0;
matriz_jogo['B'][3] = 0;

matriz_jogo['C'][1] = 0;
matriz_jogo['C'][2] = 0;
matriz_jogo['C'][3] = 0;

$(document).ready(function (){
    $('#btn_iniciar_jogo').click(function(){

        if ($('#entrada_apelido_jogador_1').val() == ''){
            alert('Apelido do jogador 1 não foi preenchido');
            return false;
        }
        if ($('#entrada_apelido_jogador_2').val() == ''){
            alert('Apelido do jogador 2 não foi preenchido');
            return false;
        }

        $('#nome_jogador_1').html($('#entrada_apelido_jogador_1').val());
        $('#nome_jogador_2').html($('#entrada_apelido_jogador_2').val());

        $('#pagina_inicial').hide();
        $('#palco_jogo').show();

    });


    $('.jogada').click( function(){
        var id_campo_clicado = this.id;
        jogada(id_campo_clicado);
    });

    function jogada(id){
        var icon = '';
        var ponto = 0;
        var eixoX = '';
        var eixoY = 0;

        eixoX = id.substring(0, 1);
        eixoY = parseInt(id.substring(1, 2));

        if (matriz_jogo[eixoX][eixoY] != 0){
            return false;
        }
        if ((rodada % 2) == 1){
            icon = 'url("imagens/marcacao_1.png")'
            ponto = -1;
        }else{
            icon = 'url("imagens/marcacao_2.png")'
            ponto = 1;
        }
        rodada++;
        eixoX = id.substring(0, 1);
        eixoY = parseInt(id.substring(1, 2));

        matriz_jogo[eixoX][eixoY] = ponto;
        $('#'+id).css('background',icon);
        console.log(matriz_jogo);
        verifica_combinacao();
    }

    function verifica_combinacao() {
        var testa = 0;
        var string = 'ABC';
        for(var i=0; i<3 ; i++){
            for(var j=1; j<=3 ; j++){
                testa = testa + matriz_jogo[string.charAt(i)][j];
            }
            ganhador(testa);
            testa = 0;
        }
        for(j=1; j<=3 ; j++){
            for(i=0; i<3 ; i++){
                testa = testa + matriz_jogo[string.charAt(i)][j];
            }
            ganhador(testa);
            testa = 0;
        }
      
        testa = matriz_jogo['A'][1] + matriz_jogo['B'][2] + matriz_jogo['C'][3];
        ganhador(testa);
        testa = 0;
        testa = matriz_jogo['A'][3] + matriz_jogo['B'][2] + matriz_jogo['C'][1];
        ganhador(testa);
        testa = 0;
    }

    function ganhador(pontos){
        if (pontos == -3){
            var jogada_1 = $('#entrada_apelido_jogador_1').val();
            alert(jogada_1+' venceu');
            $('.jogada').off();
            return false;
        }
        if (pontos == 3){
            var jogada_2 = $('#entrada_apelido_jogador_2').val();
            alert(jogada_2+' venceu');
            $('.jogada').off();
            return false;
        }
    }
});