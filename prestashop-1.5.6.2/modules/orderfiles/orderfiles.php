<?php
if (!defined('_PS_VERSION_')) exit;

class OrderFiles extends Module
{
    public function __construct()
    {
        $this->name        = 'orderfiles';
        $this->version     = '1.0';
        $this->author      = 'CTF';
        $this->tab         = 'administration';
        parent::__construct();
        $this->displayName = $this->l('Order Files Upload (CTF-Vuln)');
        $this->description = $this->l('Erlaubt unauthenticated File-Upload via AJAX');
    }

    public function install()
    {
        return parent::install();
    }
}
