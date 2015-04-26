{* header.tpl *}
{load_presentation_object filename="header" assign="obj"}
{* Start header *}
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
        {include file="search_box.tpl"}        
        <div id="Logo">
            <div id="LogoContainer">
                <h1><a href="{$obj->mSiteUrl}"><span class="Logo1stWord">Casa dos Migueis</span></a></h1>
            </div>
        </div>
    </div>
</div>
{*End header*}


