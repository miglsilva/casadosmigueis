<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 03:53:55
         compiled from "C:\wamp\www\casadosmigueis\presentation\templates\search_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5910553c4533557f09-08777002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '796e89df678a9a74664cad3ba1d54483715a12de' => 
    array (
      0 => 'C:\\wamp\\www\\casadosmigueis\\presentation\\templates\\search_box.tpl',
      1 => 1428162736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5910553c4533557f09-08777002',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c453357f016_05735928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c453357f016_05735928')) {function content_553c453357f016_05735928($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\wamp\\www\\casadosmigueis/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"search_box",'assign'=>"obj"),$_smarty_tpl);?>


<div class="right">
    <div id="SearchForm">
        <form action="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLinkToSearch;?>
" method="get" onsubmit="return check_small_search_form()">
            <label for="search_query">Search</label>
            <input type="text" name="search_query" id="search_query" class="Textbox autobox" value="Search" />
            <input type="submit" class="Button" value="" name="Search" title="Search" />
        </form>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">
        var QuickSearchAlignment = 'right';
        var QuickSearchWidth = '390px';
        lang.EmptySmallSearch = "You forgot to enter some search keywords.";
    <?php echo '</script'; ?>
>
</div>
<?php }} ?>
