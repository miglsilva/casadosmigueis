{* page_menu.tpl *}
{load_presentation_object filename="page_menu" assign="obj"}
{* Start page menu *}                    
<div class="PageMenu">
    <div class="CategoryList" id="SideCategoryList">
        <h3>Categories</h3>
        <div class="BlockContent">
            <div class="SideCategoryListFlyout">
                <div id="nav-icon">Menu</div>
                <ul class="sf-menu sf-vertical">
                    {section name=i loop=$obj->mMenu}
                        <li><a href="{$obj->mMenu[i].link_to_category}"> {$obj->mMenu[i].name}</a>
                        {section name=j loop=$obj->mMenu[i].subMenu}
                            {if $smarty.section.j.first}
                            <ul>
                            {/if}
                            <li><a href="{$obj->mMenu[i].subMenu[j].link_to_subcategory}"> {$obj->mMenu[i].subMenu[j].name}</a></li>
                            {if $smarty.section.j.last}
                            </ul>
                            {/if}
                        {/section}
                       </li>
                    {/section}                 
                </ul>
            </div>
        </div>
    </div>
</div>
{* End page menu *}  