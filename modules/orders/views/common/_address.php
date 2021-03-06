<?php $this->widget($this->getModule()->getClass('gridview'), array(
    'id'=>'address_grid',
    'dataProvider' => $dataProvider,
    'template'=>'{items}',
    'columns'=>array(
        array(
           'name'=>'recipient',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
        array(
           'name'=>'mobile',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
        array(
           'name'=>'address1',
           'value'=>'$data->address1.\'<br>\'.$data->address2',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
        array(
           'name'=>'postcode',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
        array(
           'name'=>'city',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
        array(
           'name'=>'state',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
        array(
           'name'=>'country',
           'htmlOptions'=>array('style'=>'text-align:center'),
           'type'=>'html',
        ),
    ),
));
