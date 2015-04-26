<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 03:53:55
         compiled from "C:\wamp\www\casadosmigueis\presentation\templates\slide_show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8813553c453377ec06-31983694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938b19fcf6703f585e1c950f17f16e8238028faf' => 
    array (
      0 => 'C:\\wamp\\www\\casadosmigueis\\presentation\\templates\\slide_show.tpl',
      1 => 1428257234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8813553c453377ec06-31983694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c453379a197_41105309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c453379a197_41105309')) {function content_553c453379a197_41105309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\wamp\\www\\casadosmigueis/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"slide_show",'assign'=>"obj"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript" src="http://cdn6.bigcommerce.com/r-cb1669ee7fc968a117f2fbcc74a0ba52071ba2d1/javascript/jquery/plugins/jquery.flexslider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(window).load(function () {
        $('.slide-show').flexslider({
            slideshowSpeed: $('.slide-show').attr('data-swap-frequency') * 1000,
            animation: "slide",
            pauseOnHover: true,
            controlNav: true,
            directionNav: true
        });
    });
<?php echo '</script'; ?>
>
<div class="slide-show slide-show-render slide-show-render-full flexslider Panel" data-swap-frequency="5" id="HomeSlideShow">
    <ol class="slides">
        <li class="slide">
            <a href="">
                <div class="slide-content">
                    <div class="slide-overlay">
                        <h2 class="slide-heading" style="color: #ffffff"></h2>
                        <p class="slide-text" style="color: #ffffff">This is an example of how a customizable carousel looks. </p>
                        <div class="slide-button" style=""><span class="btn" style="color: #ffffff">Customize This Carousel</span></div>
                    </div>
                    <span class="slide-image-wrapper">
                        <img class="slide-image" src="http://cdn2.bigcommerce.com/n-biq04i/w15c60i/product_images/theme_images/banner_a.jpg?t=1393806955" alt="Insert Keywords">
                    </span>
                </div>
            </a>
        </li><li class="slide">
            <a href="">
                <div class="slide-content">
                    <div class="slide-overlay">
                        <h2 class="slide-heading" style="color: #ffffff">Carousel Builder</h2>
                        <p class="slide-text" style="color: #ffffff">This is an example of how a customizable carousel looks. </p>
                        <div class="slide-button" style=""><span class="btn" style="color: #ffffff">Customize This Carousel</span></div>
                    </div>
                    <span class="slide-image-wrapper">
                        <img class="slide-image" src="http://cdn2.bigcommerce.com/n-biq04i/w15c60i/product_images/theme_images/banner_b.jpg?t=1393806955" alt="Insert Keywords">
                    </span>
                </div>
            </a>
        </li><li class="slide">
            <a href="">
                <div class="slide-content">
                    <div class="slide-overlay">
                        <h2 class="slide-heading" style="color: #ffffff">Carousel Builder</h2>
                        <p class="slide-text" style="color: #ffffff">This is an example of how a customizable carousel looks. </p>
                        <div class="slide-button" style=""><span class="btn" style="color: #ffffff">Customize This Carousel</span></div>
                    </div>
                    <span class="slide-image-wrapper">
                        <img class="slide-image" src="http://cdn2.bigcommerce.com/n-biq04i/w15c60i/product_images/theme_images/banner_c.jpg?t=1393806955" alt="">
                    </span>
                </div>
            </a>
        </li>
    </ol>
</div>
 <?php }} ?>
