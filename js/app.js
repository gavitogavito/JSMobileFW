var _meses              = ['Enero','Febrero','Marzo','Abril','MAyo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
    _letras             = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'],
    _a_menues           = {}, 
    _anima_circulo, 
    map, 
    _H                  = window.innerHeight, 
    _W                  = window.innerWidth, 
    _menu_anim_drag, renderer,
    _visitador          = {};
    _animaciones        = {},
    _variables          = {},
    _swipers_activos    = {};

    
    _variables.esMobile         = $r.valida_mobile();
    _variables.tippy            = {};
    
$r.dom();

function $_funciones_de_carga()
{
    location.href = "#home";
    TweenMax.ticker.useRAF(true);
    $r.dom();

};

_hash_change = function(a)
{
    _url    = a.newURL.split("#")[1];
    _ourl   = a.oldURL.split("#")[1];

};

window.addEventListener("hashchange", _hash_change);
document.addEventListener("backbutton", function(a){a.preventDefault(); }, false);

function _recibe_errores_ajax(v)
{
    switch(v.termina)
    {
        case "_valida_login":
        break;
        default:
        break;
    };
};

function _recibe_ajax(v,b)
{
    switch(b)
    {
        case "_login":
            if(v.aviso == true)
            {

            }
        break;
        default:
           // alert("Error en la devolución del ajax", 1000);
        break;
    };
};
/* borrado de variables generales */
delete _recibe_ajax, _hash_change;