<?php 
$this->widget($this->getModule()->getClass('gridview'), array(
    'id'=>'payment_grid',
    'dataProvider' => $dataProvider,
    'template'=>'{items}',
    'columns'=>array(
        array(
            'name'=>'account_id',
            'header'=>Sii::t('sii','Payer'),
            'value'=>'$data->account->name',
            'htmlOptions'=>array('style'=>'text-align:center'),
            'type'=>'html',
        ),
        array(
            'name'=>'payment_no',
            'htmlOptions'=>array('style'=>'text-align:center'),
            'type'=>'html',
        ),
        array(
            'name'=>'create_time',
            'value'=>'$data->formatDatetime($data->create_time,true)',
            'htmlOptions'=>array('style'=>'text-align:center'),
            'type'=>'html',
        ),
        array(
            'name'=>'type',
            'value'=>'$data->getTypeDesc()',
            'htmlOptions'=>array('style'=>'text-align:center'),
            'type'=>'html',
        ),
        array(
            'header'=>Sii::t('sii','Payment Method'),
            'value'=>'$data->getPaymentMethodName(user()->getLocale())',
            'htmlOptions'=>array('style'=>'text-align:center'),
            'type'=>'html',
        ),
        array(
            'name'=>'amount',
            'value'=>'$data->formatCurrency($data->amount,$data->currency)',
            'htmlOptions'=>array('style'=>'text-align:center'),
            'type'=>'html',
        ),
        array(
            'name'=>'trace_no',
            'value'=>'$data->getTraceNo()',
            'htmlOptions'=>array('style'=>'color:burlywood'),
            'type'=>'html',
        ),
    ),
));