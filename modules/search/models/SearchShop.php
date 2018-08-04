<?php
/**
 * This file is part of Shopbay.org (http://shopbay.org)
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code. 
 */

/**
 * Search shop Active record
 *
 * @author kwlok
 */
class SearchShop extends SearchModel
{
    public $arClass = 'Shop';
    /**
     * Note: path mapping for '_id' is setup to field 'id'
     * 
     * @return array the list of attributes for this record
     */
    public function attributes()
    {
        return ['id', 'account_id' , 'name', 'status'];
    }
}