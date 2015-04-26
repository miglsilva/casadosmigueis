{* smarty *}
{config_load file="site.conf"}
{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>{$smarty.config.site_title}</title>
        <meta http-equiv="Content-Type" />
        <meta content="text/html"; charset=UTF-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'/>


        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/casadosmigueis.css" />

        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/custom.1.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/custom.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/flexslider.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/grid.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/imodal.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/iselector.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/product.attributes.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/product.quickview.css" />        
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/slide-show.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/social.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/store.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/styles-slide-show.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/styles.1.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/styles.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/theme.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/ui.all.css" />
        <link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}styles/white.css" />

        <link rel="shortcut icon" 
              href="http://cdn2.bigcommerce.com/n-biq04i/w15c60i/product_images/default_favicon.ico?1404963323" />

        <script>
            //<![CDATA[ 
            (function () {
                // this happens before external dependencies (and dom ready) to reduce page flicker
                var node, i;
                for (i = window.document.childNodes.length; i--; ) {
                    node = window.document.childNodes[i];
                    if (node.nodeName == 'HTML') {
                        node.className += ' javascript';
                    }
                }
            })();
            //]]>
        </script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/common.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/imodal.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/init.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/iselector.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/jquery.autobox.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/jquery.flexslider.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/jquery.form.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/jquery.validate.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/main.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/menudrop.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/product.attributes.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/product.functions.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/quicksearch.js"></script>
        <script type="text/javascript" src="{$obj->mSiteUrl}scripts/quickview.js"></script>

        <script>
            //<![CDATA[
            config.ShopPath = 'http://wine-shop.mybigcommerce.com';
            config.AppPath = '';
            config.FastCart = 1;
            var ThumbImageWidth = 330;
            var ThumbImageHeight = 330;
            //]]>
        </script>
    </head>
    <body id="home">
        <div class="page">
            <div class="header">
                <div class="inner">
                    {*colocar imagem de reload*}
                    <div id="AjaxLoading"><img src="" alt="" />&nbsp;Loading... Please wait...</div>
                    {include file="top_menu.tpl"}
                    {include file="header.tpl"}
                    {include file="page_menu.tpl"}
                    {include file="main.tpl"}
                    {include file="footer.tpl"}
                    <script type="text/javascript" src="{$obj->mSiteUrl}scripts/jquery.bgiframe.min.js"></script>
                    <script type="text/javascript" src="{$obj->mSiteUrl}scripts/superfish.js"></script>

                    <script type="text/javascript">
                        $(function () {
                            if (typeof $.fn.superfish == "function") {
                                $("ul.sf-menu").superfish({
                                    delay: 800,
                                    dropShadows: false,
                                    speed: "fast"
                                })
                                        .find("ul")
                                        .bgIframe();
                            }
                        })
                    </script>
                    <script type="text/javascript">

                        $(window).load(function () {
                            $('input[type=checkbox]').not('.UniApplied').uniform();
                        });
                    </script> 
                </div>

            </div>
        </div>
        </div>
    </body>
</html>
