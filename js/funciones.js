function $_hace_secciones(_url)
{
    // refresca los elementos dom al cambiar la url
    $r.dom();

    _all = $r.select(".seccion_abierta");
    for (var i = _all.length - 1; i >= 0; i--) {
    	if(_all[i].style.display == 'block')
    		_all[i].style.display = 'none';
    };
    delete _all;
    switch(_url)
    {
        case "seccion":
        	console.log("seccion");
        break;
        default:
        	console.log("Bienvenido default");
        break;
    };

    // cordova.plugins.firebase.analytics.setCurrentScreen(_url);	
};
