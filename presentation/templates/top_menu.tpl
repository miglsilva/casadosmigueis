{* top_menu.tpl *}
{load_presentation_object filename="top_menu" assign="obj"}
{* Start top menu *}
<div class="TopMenu">
    <div class="inner">
        <ul style="display:">
            <li style="display: none;">
                <div class="phoneIcon">Call us on </div>
            </li>
            <li style="display:none" class="HeaderLiveChat">
                
            </li>
            <li class="First">
                <a href="{$obj->mSiteUrl}">Home</a>
            </li>
            <li style="display:">
                <a href="{$obj->mSiteUrl}account.php">My Account</a>
            </li>
            <li><a href="{$obj->mSiteUrl}giftcertificates.php">Gift Certificates</a></li>
            <li style="display:" id="TopLogin">
                <div><a href='{$obj->mSiteUrl}login.php' onclick=''>Sign in</a> or <a href='{$obj->mSiteUrl}login.php?action=create_account' onclick=''>Create an account</a></div>
            </li>
            <li id="TopCurrency">
                <div class="currency-converter">
                    <p>All prices are in <a href="#">All prices are in <span title='Pound Sterling'>GBP</span></a></p>
                    <div class="Block Moveable Panel" id="SideCurrencySelector" style="display:none;"></div>
                </div>
            </li>
            <li class="last CartLink" style="display:">
                <div>
                    <a href="{$obj->mSiteUrl}cart.php" title="View Cart">View Cart</a>
                    <div class="MiniCart"></div>
                </div> <i class="icon" title="View Cart">&nbsp;</i><a href="{$obj->mSiteUrl}cart.php" title="View Cart" id="ShowMiniCart"><span id="items-count"> (1 item)</span></a>
            </li>
        </ul>
    </div>
</div>
{*End top menu*}
{*
<div class="box">
  <p class="box-title">Search the Catalog</p>
  <form class="search_form" method="post" action="{$obj->mLinkToSearch}">
    <p>
      <input maxlength="100" id="search_string" name="search_string"
       value="{$obj->mSearchString}" size="19" />
      <input type="submit" value="Go!" /><br />
    </p>
    <p>
      <input type="checkbox" id="all_words" name="all_words"
       {if $obj->mAllWords == "on"} checked="checked" {/if}/>
      Search for all words
    </p>
  </form>
</div>*}
{* End search box *}


