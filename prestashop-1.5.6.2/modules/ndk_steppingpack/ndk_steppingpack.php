<?php
if (!defined('_PS_VERSION_')) exit;

class Ndk_SteppingPack extends Module
{
    public function __construct()
    {
        $this->name        = 'ndk_steppingpack';
        $this->version     = '1.5.6';
        $this->author      = 'CTF';
        $this->tab         = 'front_office_features';
        parent::__construct();
        $this->displayName = $this->l('Step by Step Products Pack (CTF-Vuln)');
        $this->description = $this->l('Demo-Modul mit unsicherer SQLi-Route');
    }

    public function install()
    {
        // Tabelle für SQL-Injection-Demo + Flag-Eintrag
        $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'ndk_steppingpack` (
                  product_id INT PRIMARY KEY,
                  data TEXT
                ) ENGINE=InnoDB;';
        Db::getInstance()->execute($sql);
        Db::getInstance()->execute("
          INSERT IGNORE INTO `" . _DB_PREFIX_ . "ndk_steppingpack`
            (product_id, data) VALUES (1, 'CTF-Pack-Demo');
        ");
        // Tabelle ctf_flags (Flag2) erzeugen
        Db::getInstance()->execute('
          CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'ctf_flags` (
            id INT PRIMARY KEY AUTO_INCREMENT, 
            flag VARCHAR(255)
          ) ENGINE=InnoDB;
        ');
        Db::getInstance()->execute("
          INSERT IGNORE INTO `" . _DB_PREFIX_ . "ctf_flags`
            (flag) VALUES ('FLAG{SQLI_SUCCESS}');
        ");
        return parent::install();
    }
}
