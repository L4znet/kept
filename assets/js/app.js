$(document).ready(function(){

    function $_GET(param) {
        var vars = {};
        window.location.href.replace( location.hash, '' ).replace( 
            /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
            function( m, key, value ) { // callback
                vars[key] = value !== undefined ? value : '';
            }
        );
    
        if ( param ) {
            return vars[param] ? vars[param] : null;	
        }
        return vars;
    }

    let link = $('.nav_link');
    let test = $(location).attr('href');
    var url = new URL(test);
    link.click(function(e){

        

   
        var search_params = new URLSearchParams(url.search); 
        if(search_params.has('type')) {
            var type = search_params.get('type');
            console.log(type)
        }

        link.parent('li').removeClass('active');
        $('#' + $_GET('type')).addClass('active');
    })
});