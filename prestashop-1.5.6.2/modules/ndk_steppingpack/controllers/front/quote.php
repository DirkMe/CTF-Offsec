<?php
class Ndk_SteppingPackQuoteModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        // **VULN**: $_GET['product_id'] ungefiltert in SQL
        $id   = $_GET['product_id'];
        $data = Db::getInstance()->executeS(
          'SELECT * FROM `' . _DB_PREFIX_ . 'ndk_steppingpack`
           WHERE product_id = ' . $id
        );
        header('Content-Type: application/json');
        die(json_encode($data));
    }
}
