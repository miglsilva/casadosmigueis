{* main.tpl *}
{load_presentation_object filename="main" assign="obj"}
{*Begin main*}
<div class="main">
    <div class="inner">
        <div class="Content Widest" id="LayoutColumn1">
            {include file="slide_show.tpl"}
            {include file="product_list.tpl"}
            
            
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
{*End main*}