<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of header
 *
 * @author miguel.silva
 */
class Header {
    public $mLinkToAdmin;

    public $mSiteUrl;

    public function __construct()
    {

        $this->mSiteUrl = Link::Build('');

        $this->mLinkToAdmin = Link::ToAdmin();
}
}
