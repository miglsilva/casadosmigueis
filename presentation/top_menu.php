<?php
class TopMenu
{
  public $mLinkToAdmin;
  
  public $mSiteUrl;

  public function __construct()
  {

    $this->mSiteUrl = Link::Build('');

    $this->mLinkToAdmin = Link::ToAdmin();
  }
}
?>
