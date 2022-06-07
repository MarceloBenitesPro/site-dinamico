$(function(){  
	//Aqui vai todo o códico de javascript.
	$('nav.mobile').click(function(){
       // o que vai acontecer quando clicarmos na nav.mobile
       var listaMenu = $('nav.mobile ul');
       //if(listaMenu.is('hidden') == true)
       //listaMenu.fadeIn();
       //else
       	 //listaMenu.fadeOut();
       	 //abrir ou fechar o menu

         if(listaMenu.is(':hidden') == true){
         // <i class="fa-solid fa-xmark"></i>
         var icone = $('.botao-menu-mobile').find('i');
         icone.removeClass('fa-bars');
         icone.addClass('fa-xmark');
         listaMenu.slideToggle();
        }
       else{
       	 var icone = $('.botao-menu-mobile').find('i');
         icone.removeClass('fa-xmark');
         icone.addClass('fa-bars');
         listaMenu.slideToggle();
         }
       	 
        //<i class="fa-solid fa-xmark"></i>
        //<i class="fa-solid fa-square-xmark"></i>

	});

        if($('target').length > 0){
    //O elemento existe, portanto precisamos dar o scroll em algum elemento.
    var elemento = '#'+$('target').attr('target');

    var divScroll = $(elemento).offset().top;

    $('html,body').animate({scrollTop:divScroll},2000);
  }

  carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').hide();
			$('.container-principal').load(INCLUDE_PATH+'pages/'+pagina+'.php');
			
			setTimeout(function(){
				initialize();
				addMarker(-27.609959,-48.576585,'',"Minha casa",undefined,false);

			},1000);

			$('.container-principal').fadeIn(1000);
			window.history.pushState('', '','contato');

			return false;
		})
	}
});