var rodada = 1 ;
var matriz_jogo = Array(3);

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
        
        if ((rodada % 2) == 1){
            icon = 'url("imagens/marcacao_1.png")'
            ponto = -1;
        }else{
            icon = 'url("imagens/marcacao_2.png")'
            ponto = 1;
        }
        rodada++;

        $('#'+id).css('background',icon);
    }
});