

	$(window).load(function() {
        var load = 0;
        function removing(){
            if(load == 80){
                clearInterval(id);
                $("#loaded").fadeOut(300);
                window.onscroll = function () { window.scrollTop };
            }
            else{
                load = load+1;
                  window.onscroll = function () { window.scrollTo(0, 0); };
            }
        }
         var id = setInterval(removing,10);
      
	});