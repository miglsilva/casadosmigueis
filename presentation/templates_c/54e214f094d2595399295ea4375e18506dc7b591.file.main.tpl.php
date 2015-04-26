<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 03:53:55
         compiled from "C:\wamp\www\casadosmigueis\presentation\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19076553c453370d773-62767445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e214f094d2595399295ea4375e18506dc7b591' => 
    array (
      0 => 'C:\\wamp\\www\\casadosmigueis\\presentation\\templates\\main.tpl',
      1 => 1428843175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19076553c453370d773-62767445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c45337480f2_23701031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c45337480f2_23701031')) {function content_553c45337480f2_23701031($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\wamp\\www\\casadosmigueis/presentation/smarty_plugins\\function.load_presentation_object.php';
?>
<?php echo smarty_function_load_presentation_object(array('filename'=>"main",'assign'=>"obj"),$_smarty_tpl);?>


<div class="main">
    <div class="inner">
        <div class="Content Widest" id="LayoutColumn1">
            <?php echo $_smarty_tpl->getSubTemplate ("slide_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            
            
            <div class="RecentNews" id="HomeRecentBlogs" style="display:">
                <div class="inner">
                    <h4>Recent Updates</h4>
                    <ul>
                        <li>
                            <p><a href="http://wine-shop.mybigcommerce.com/your-first-blog-post/"><strong>Your first blog post!</strong></a>
                                Blogging is a great way to improve your Search Engine Optimization (SEO), &hellip;</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
