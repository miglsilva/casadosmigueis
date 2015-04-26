<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 03:53:55
         compiled from "C:\wamp\www\casadosmigueis\presentation\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18227553c45337f7da3-26007897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c0c20c71a73e86c1253637a382c55dee3f88c9' => 
    array (
      0 => 'C:\\wamp\\www\\casadosmigueis\\presentation\\templates\\footer.tpl',
      1 => 1428163449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18227553c45337f7da3-26007897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c4533888647_11984166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c4533888647_11984166')) {function content_553c4533888647_11984166($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\wamp\\www\\casadosmigueis/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"footer",'assign'=>"obj"),$_smarty_tpl);?>


<div class="footer">
    <div class="inner">
        <div class="newsletter-subscription" id="SideNewsletterBox">
            <div class="inner">

                <h4>Sign up for our newsletter</h4>

                <form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
subscribe.php" method="post" id="subscribe_form" class="subscribe_form" name="subscribe_form">
                    <input type="hidden" name="action" value="subscribe" />
                    <ul>
                        <li class="inputForm">
                            <label for="nl_first_name">Name</label>
                            <input class="Textbox autobox" value="Name" id="nl_first_name" name="nl_first_name" type="text" />
                        </li>
                        <li class="inputForm">
                            <label for="nl_email">Email</label>
                            <input class="Textbox autobox" value="Email" id="nl_email" name="nl_email" type="text" />
                        </li>
                        <li>

                            <input value="Submit" class="btn" type="submit" />

                        </li>
                    </ul>    
                </form>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            // <!--
            $('#subscribe_form').submit(function () {
                if ($('#nl_first_name').val() == '') {
                    alert('You forgot to type in your first name.');
                    $('#nl_first_name').focus();
                    return false;
                }

                if ($('#nl_email').val() == '') {
                    alert('You forgot to type in your email address.');
                    $('#nl_email').focus();
                    return false;
                }

                if ($('#nl_email').val().indexOf('@') == -1 || $('#nl_email').val().indexOf('.') == -1) {
                    alert('Please enter a valid email address, such as john@example.com.');
                    $('#nl_email').focus();
                    $('#nl_email').select();
                    return false;
                }

                // Set the action of the form to stop spammers
                $('#subscribe_form').append("<input type=\"hidden\" name=\"check\" value=\"1\" \/>");
                return true;

            });
            // -->
        <?php echo '</script'; ?>
>


        <div class="footer-main">
            <div class="inner">
                <div class="SiteNavMenu">
                    <ul class="sf-menu sf-horizontal">
                        <li class=" ">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
blog/"><span>Blog</span></a>

                        </li>	<li class=" ">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
shipping-returns/"><span>Shipping &amp; Returns</span></a>

                        </li>	<li class=" ">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
rss-syndication/"><span>RSS Syndication</span></a>

                        </li>
                    </ul>
                </div>
                <div id="FooterSearchForm">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
search.php" method="get" onsubmit="return check_small_search_form()">
                        <label for="footer_search_query">Search</label>
                        <input type="text" name="search_query" id="footer_search_query" class="Textbox autobox" value="Search" />
                        <input type="submit" class="Button" value="" name="Search" title="Search" />
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-links">
            <div class="inner">
                <p><span id="currencyPrices">All prices are in <span title='Pound Sterling'>GBP</span></span> &copy; 2015 <span class="footerCompanyName">Casa dos Migueis</span>. <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
sitemap/"><span>Sitemap</span></a>

                    <span class="powered-by"> Powered by <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">Casa dos Migueis</a></span>
                </p>

            </div>
        </div>

    </div>
</div>
<?php }} ?>
