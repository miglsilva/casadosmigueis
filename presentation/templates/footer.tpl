{* footer.tpl *}
{load_presentation_object filename="footer" assign="obj"}
{*Begin footer*}
<div class="footer">
    <div class="inner">
        <div class="newsletter-subscription" id="SideNewsletterBox">
            <div class="inner">

                <h4>Sign up for our newsletter</h4>

                <form action="{$obj->mSiteUrl}subscribe.php" method="post" id="subscribe_form" class="subscribe_form" name="subscribe_form">
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
        <script type="text/javascript">
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
        </script>


        <div class="footer-main">
            <div class="inner">
                <div class="SiteNavMenu">
                    <ul class="sf-menu sf-horizontal">
                        <li class=" ">
                            <a href="{$obj->mSiteUrl}blog/"><span>Blog</span></a>

                        </li>	<li class=" ">
                            <a href="{$obj->mSiteUrl}shipping-returns/"><span>Shipping &amp; Returns</span></a>

                        </li>	<li class=" ">
                            <a href="{$obj->mSiteUrl}rss-syndication/"><span>RSS Syndication</span></a>

                        </li>
                    </ul>
                </div>
                <div id="FooterSearchForm">
                    <form action="{$obj->mSiteUrl}search.php" method="get" onsubmit="return check_small_search_form()">
                        <label for="footer_search_query">Search</label>
                        <input type="text" name="search_query" id="footer_search_query" class="Textbox autobox" value="Search" />
                        <input type="submit" class="Button" value="" name="Search" title="Search" />
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-links">
            <div class="inner">
                <p><span id="currencyPrices">All prices are in <span title='Pound Sterling'>GBP</span></span> &copy; 2015 <span class="footerCompanyName">Casa dos Migueis</span>. <a href="{$obj->mSiteUrl}sitemap/"><span>Sitemap</span></a>

                    <span class="powered-by"> Powered by <a href="{$obj->mSiteUrl}">Casa dos Migueis</a></span>
                </p>

            </div>
        </div>

    </div>
</div>
{*End footer *}