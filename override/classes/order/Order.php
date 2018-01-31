<?php
Class Order extends OrderCore
{
    public $product_title;

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
        self::$definition['fields']['product_title'] = array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 64);
        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
    }
}
?>
