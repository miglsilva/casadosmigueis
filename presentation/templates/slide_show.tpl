{* slide_show.tpl *}
{load_presentation_object filename="slide_show" assign="obj"}
{* Start slide show *}
<script type="text/javascript" src="http://cdn6.bigcommerce.com/r-cb1669ee7fc968a117f2fbcc74a0ba52071ba2d1/javascript/jquery/plugins/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.slide-show').flexslider({
            slideshowSpeed: $('.slide-show').attr('data-swap-frequency') * 1000,
            animation: "slide",
            pauseOnHover: true,
            controlNav: true,
            directionNav: true
        });
    });
</script>
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
{* End slide show *} 