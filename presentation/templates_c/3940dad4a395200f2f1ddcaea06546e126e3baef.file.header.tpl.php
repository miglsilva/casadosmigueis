<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 03:53:55
         compiled from "C:\wamp\www\casadosmigueis\presentation\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29745553c45334f25f1-20483198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3940dad4a395200f2f1ddcaea06546e126e3baef' => 
    array (
      0 => 'C:\\wamp\\www\\casadosmigueis\\presentation\\templates\\header.tpl',
      1 => 1428162571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29745553c45334f25f1-20483198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c453351d579_64255673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c453351d579_64255673')) {function content_553c453351d579_64255673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\wamp\\www\\casadosmigueis/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"header",'assign'=>"obj"),$_smarty_tpl);?>


<div id="Header">
    <div class="inner">
        <div class="left">
            <div id="socnet" class="Block SocialConnect icon-social-theme Moveable Panel">
                <ul>
                    <li><a href="http://www.facebook.com/Bigcommerce" 
                           class="icon-social icon-social-theme icon-facebook" 
                           title="Facebook">Facebook</a>
                    </li>
                    <li><a href="http://twitter.com/Bigcommerce" 
                           class="icon-social icon-social-theme icon-twitter" 
                           title="Twitter">Twitter</a>
                    </li>
                    <li><a href="http://pinterest.com/bigcommerce/" 
                           class="icon-social icon-social-theme icon-pinterest" 
                           title="Pinterest">Pinterest</a>
                    </li>
                    <li><a href="https://plus.google.com/+bigcommerce" 
                           class="icon-social icon-social-theme icon-googleplus" 
                           title="GooglePlus">GooglePlus</a>
                    </li>
                    <li><a href="http://www.youtube.com/BigcommerceDotCom" 
                           class="icon-social icon-social-theme icon-youtube" 
                           title="YouTube">YouTube</a>
                    </li>
                    <li><a href="http://www.linkedin.com/company/bigcommerce_2" 
                           class="icon-social icon-social-theme icon-linkedin" 
                           title="LinkedIn">LinkedIn</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("search_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
        <div id="Logo">
            <div id="LogoContainer">
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
"><span class="Logo1stWord">Casa dos Migueis</span></a></h1>
            </div>
        </div>
    </div>
</div>



<?php }} ?>
