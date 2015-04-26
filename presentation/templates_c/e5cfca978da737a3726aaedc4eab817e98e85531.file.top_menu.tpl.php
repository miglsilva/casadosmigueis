<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 03:53:55
         compiled from "C:\wamp\www\casadosmigueis\presentation\templates\top_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30936553c45334273c3-82155697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5cfca978da737a3726aaedc4eab817e98e85531' => 
    array (
      0 => 'C:\\wamp\\www\\casadosmigueis\\presentation\\templates\\top_menu.tpl',
      1 => 1428152560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30936553c45334273c3-82155697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c45334a0562_54163879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c45334a0562_54163879')) {function content_553c45334a0562_54163879($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\wamp\\www\\casadosmigueis/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"top_menu",'assign'=>"obj"),$_smarty_tpl);?>


<div class="TopMenu">
    <div class="inner">
        <ul style="display:">
            <li style="display: none;">
                <div class="phoneIcon">Call us on </div>
            </li>
            <li style="display:none" class="HeaderLiveChat">
                
            </li>
            <li class="First">
                <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
">Home</a>
            </li>
            <li style="display:">
                <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
account.php">My Account</a>
            </li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
giftcertificates.php">Gift Certificates</a></li>
            <li style="display:" id="TopLogin">
                <div><a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
login.php' onclick=''>Sign in</a> or <a href='<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
login.php?action=create_account' onclick=''>Create an account</a></div>
            </li>
            <li id="TopCurrency">
                <div class="currency-converter">
                    <p>All prices are in <a href="#">All prices are in <span title='Pound Sterling'>GBP</span></a></p>
                    <div class="Block Moveable Panel" id="SideCurrencySelector" style="display:none;"></div>
                </div>
            </li>
            <li class="last CartLink" style="display:">
                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
cart.php" title="View Cart">View Cart</a>
                    <div class="MiniCart"></div>
                </div> <i class="icon" title="View Cart">&nbsp;</i><a href="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSiteUrl;?>
cart.php" title="View Cart" id="ShowMiniCart"><span id="items-count"> (1 item)</span></a>
            </li>
        </ul>
    </div>
</div>





<?php }} ?>
