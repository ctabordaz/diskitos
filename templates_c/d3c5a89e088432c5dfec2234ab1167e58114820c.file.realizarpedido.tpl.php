<?php /* Smarty version Smarty-3.0.9, created on 2015-04-29 22:32:58
         compiled from "C:/xampp/htdocs/diskitos/templates\realizarpedido.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160055413ffa7db128-15457260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c5a89e088432c5dfec2234ab1167e58114820c' => 
    array (
      0 => 'C:/xampp/htdocs/diskitos/templates\\realizarpedido.tpl',
      1 => 1430339571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160055413ffa7db128-15457260',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<br><br>
<div class="container">
        <header class="codrops-header">
                <h1>Relizar Pedido <span>Solicite los albumes a sus proveedores</span></h1>
                <br>
                <nav class="codrops-demos">
                        <a href="">DISKITOS S.A</a>
                </nav>
        </header>
        <section class="content">
                <div class="dummy-browser">
                        <div class="dummy-header"></div>
                        <div class="checkout">
                                <a class="checkout__button" href="#"><!-- Fallback location -->
                                        <span class="checkout__text">
                                                <svg class="checkout__icon" width="30px" height="30px" viewBox="0 0 35 35">
                                                        <path fill="#fff" d="M33.623,8.004c-0.185-0.268-0.486-0.434-0.812-0.447L12.573,6.685c-0.581-0.025-1.066,0.423-1.091,1.001 c-0.025,0.578,0.423,1.065,1.001,1.091L31.35,9.589l-3.709,11.575H11.131L8.149,4.924c-0.065-0.355-0.31-0.652-0.646-0.785 L2.618,2.22C2.079,2.01,1.472,2.274,1.26,2.812s0.053,1.146 0.591,1.357l4.343,1.706L9.23,22.4c0.092,0.497,0.524,0.857,1.03,0.857 h0.504l-1.15,3.193c-0.096,0.268-0.057,0.565,0.108,0.798c0.163,0.232,0.429,0.37,0.713,0.37h0.807 c-0.5,0.556-0.807,1.288-0.807,2.093c0,1.732,1.409,3.141,3.14,3.141c1.732,0,3.141-1.408,3.141-3.141c0-0.805-0.307-1.537-0.807-2.093h6.847c-0.5,0.556-0.806,1.288-0.806,2.093c0,1.732,1.407,3.141,3.14,3.141 c1.731,0,3.14-1.408,3.14-3.141c0-0.805-0.307-1.537-0.806-2.093h0.98c0.482,0,0.872-0.391,0.872-0.872s-0.39-0.873-0.872-0.873 H11.675l0.942-2.617h15.786c0.455,0,0.857-0.294,0.996-0.727l4.362-13.608C33.862,8.612,33.811,8.272,33.623,8.004z M13.574,31.108c-0.769,0-1.395-0.626-1.395-1.396s0.626-1.396,1.395-1.396c0.77,0,1.396,0.626,1.396,1.396S14.344,31.108,13.574,31.108z M25.089,31.108c-0.771,0-1.396 0.626-1.396-1.396s0.626-1.396,1.396-1.396c0.77,0,1.396,0.626,1.396,1.396 S25.858,31.108,25.089,31.108z"/>
                                                </svg>
                                        </span>
                                </a>
                                <div class="checkout__order">
                                        <div class="checkout__order-inner">
                                                <table class="checkout__summary">
                                                        <thead>
                                                        <tr><th>Su Pedido</th><th>Precio</th></tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr><th colspan="2">Total <span class="checkout__total">$56.20</span></th></tr>
                                                    </tfoot>
                                                    <tbody>
                                                                <tr><td>BattleBorn <span>The Killers</span></td><td>$9.90</td></tr>
                                                                <tr><td>21 <span>Adele</span></td><td>$5.50</td></tr>
                                                                <tr><td>Out Of Exile <span>Audioslave</span></td><td>$11.00</td></tr>
                                                                <tr><td>London <span>Frank Sinatra</span></td><td>$19.90</td></tr>
                                                                <tr><td>Cure For Pain <span>Morphine</span></td><td>$9.90</td></tr>
                                                        </tbody>
                                                </table><!-- /checkout__summary -->
                                                <button class="checkout__option checkout__option--silent checkout__cancel"><i class="fa fa-angle-left"></i> Continue Seleccionando</button><button class="checkout__option">Realizar Pedido</button>
                                                <button class="checkout__close checkout__cancel"><i class="icon fa fa-fw fa-close"></i>Cerrar</button>
                                        </div><!-- /checkout__order-inner -->
                                </div><!-- /checkout__order -->
                        </div><!-- /checkout -->
                        <div class="dummy-grid dummy-grid--filled">
                                <div class="dummy-grid__item"><img src="./images/Caratulas/BattleBorn.jpg" /></div>
                                <div class="dummy-grid__item"><img src="./images/Caratulas/21.png" /></div>
                                <div class="dummy-grid__item"></div>
                                <div class="dummy-grid__item"></div>
                                <div class="dummy-grid__item"></div>
                                <div class="dummy-grid__item"></div>
                                <div class="dummy-grid__item"></div>
                                <div class="dummy-grid__item"></div>
                        </div><!-- /dummy-grid -->
                </div>
        </section> 
</div><!-- /container -->

<script>
        (function() {
                [].slice.call( document.querySelectorAll( '.checkout' ) ).forEach( function( el ) {
                        var openCtrl = el.querySelector( '.checkout__button' ),
                                closeCtrls = el.querySelectorAll( '.checkout__cancel' );

                        openCtrl.addEventListener( 'click', function(ev) {
                                ev.preventDefault();
                                classie.add( el, 'checkout--active' );
                        } );

                        [].slice.call( closeCtrls ).forEach( function( ctrl ) {
                                ctrl.addEventListener( 'click', function() {
                                        classie.remove( el, 'checkout--active' );
                                } );
                        } );
                } );
        })();
</script>