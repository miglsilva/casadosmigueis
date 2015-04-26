{* search_box.tpl *}
{load_presentation_object filename="search_box" assign="obj"}
{*Begin search box*}
<div class="right">
    <div id="SearchForm">
        <form action="{$obj->mLinkToSearch}" method="get" onsubmit="return check_small_search_form()">
            <label for="search_query">Search</label>
            <input type="text" name="search_query" id="search_query" class="Textbox autobox" value="Search" />
            <input type="submit" class="Button" value="" name="Search" title="Search" />
        </form>
    </div>

    <script type="text/javascript">
        var QuickSearchAlignment = 'right';
        var QuickSearchWidth = '390px';
        lang.EmptySmallSearch = "You forgot to enter some search keywords.";
    </script>
</div>
{*End search box*}