<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of search_box
 *
 * @author miguel.silva
 */
class SearchBox {

    public $mLinkToAdmin;
    public $mSiteUrl;
    public $mSearchString = '';
    public $mAllWords = 'off';
    public $mLinkToSearch;

    public function __construct() {

        $this->mSiteUrl = Link::Build('');
        
        $this->mLinkToSearch = Link::ToSearch();

        $this->mLinkToAdmin = Link::ToAdmin();
    }

}
