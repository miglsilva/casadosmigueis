<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_menu
 *
 * @author miguel.silva
 */
class PageMenu {

    public $mLinkToAdmin;
    public $mSiteUrl;
    public $mMenu;

    public function __construct() {

        $this->mSiteUrl = Link::Build('');

        $this->mLinkToAdmin = Link::ToAdmin();
    }

    public function init() {

        $this->mMenu = Catalog::GetCategories();

        // Building links for the category pages
        for ($i = 0; $i < count($this->mMenu); $i++) {
            $this->mMenu[$i]['link_to_category'] = Link::ToCategory($this->mMenu[$i]['category_id']);

            $this->mMenu[$i]['subMenu'] = Catalog::GetSubCategories($this->mMenu[$i]['category_id']);
            
            for ($j = 0; $j < count($this->mMenu[$i]['subMenu']); $j++){
                $this->mMenu[$i]['subMenu'][$j]['link_to_subcategory'] = 
                        Link::ToSubCategory($this->mMenu[$i]['subMenu'][$j]['product_id']);
            }
        }
    }

}
