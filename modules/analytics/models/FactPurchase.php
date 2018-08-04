<?php
/**
 * This file is part of Shopbay.org (http://shopbay.org)
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code. 
 */
Yii::import('common.modules.analytics.models.FactDimCurrency');
/**
 * This is the model class for table "s_fact_purchase".
 *
 * The followings are the available columns in table 's_fact_purchase':
 * @property integer $id
 * @property string $account_id
 * @property integer $shop_id
 * @property integer $currency_id
 * @property integer $date_id
 * @property integer $order_unit
 * @property integer $item_unit
 * @property float $expenditure
 *
 * @author kwlok
 */
class FactPurchase extends FactDimCurrency
{
    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Metric the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    } 
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 's_fact_purchase';
    }
    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array_merge(parent::rules(),array(
            array('account_id', 'length', 'max'=>12),
            array('order_unit, item_unit', 'numerical', 'integerOnly'=>true),
            array('expenditure', 'length', 'max'=>10),
            array('order_unit, item_unit, expenditure', 'safe', 'on'=>'search'),
        ));
    }
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(),array(
            'order_unit' => Sii::t('sii','Order Unit'),
            'item_unit' => Sii::t('sii','Item Unit'),
            'expenditure' => Sii::t('sii','Expenditure'),
        ));
    }  
}
