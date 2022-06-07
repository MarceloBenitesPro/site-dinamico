$(function(){
    var  atual = -1;
    var maximo = $('.box-especilidade').length - 1;
    var timer;
    var animacaoDelay = 3;

    executaranimacao();
    function executaranimacao(){
        $('.box-especilidade').hide();
        timer = setInterval(logicaAnimacao,animacaoDelay*1000);

        function logicaAnimacao(){
            atual++;
            if(atual > maximo){
                clearInterval(timer);
                return false;
            }
            $('.box-especilidade').eq(atual).fadeIn();
        }
    }
})