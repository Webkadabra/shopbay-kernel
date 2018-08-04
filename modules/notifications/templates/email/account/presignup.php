<div style="border:1px solid #EDEDED;margin:10px 10px;padding:10px 10px;">

    <table style="width: 100%;margin-bottom:10px;background: white;">
         <tbody>
             <tr style="background:whitesmoke;">
                 <td colspan="2" style="border-bottom:0px dashed #EDEDED;">
                     <span style="font-size:2.5em;float:right;margin:10px"><?php echo Sii::t('sii','Account Activation');?></span>
                 </td>
             </tr>
            <tr>
                <td width="60%" style="padding-top: 10px;padding-left:20px;">
                    
                    <p style="font-size: 1.5em;"><?php echo Sii::t('sii','Dear {customer},',array('{customer}'=>$name));?></p>

                    <div style="margin-top:10px;">
                        
                        <p><?php echo Sii::t('sii','Thanks for signing up {app} using {network} account.',array('{app}'=>app()->name,'{network}'=>$network));?></p>

                    </div>
                    <div style="margin-top:10px;">
                        
                        <p><?php echo Sii::t('sii','Please use the following link to activate your account');?></p>

                        <div style="text-align: center;width:100%;">
                            <a href="<?php echo Account::model()->getActivationUrl($activate_str,$network);?>" style="display:block;color:white;text-align:center;width:100%;background:lightskyblue;font-size:3em;margin: 30px 0px;">
                                <?php echo Sii::t('sii','Activate Now');?>
                            </a>                  
                        </div>
                        
                    </div>

                    <div style="margin-top:10px;">
                        
                        <p><?php echo Sii::t('sii','There is an activation validity period of {days} days and please activate your account before it gets expired.',array('{days}'=>Config::getSystemSetting('activation_period')));?></p>

                        <p><?php echo Sii::t('sii','You may ignore this email if you had already activated your account.');?></p>
                    </div>
                    
                </td>

            </tr>
         </tbody>   
    </table> 

    <?php $this->renderPartial('common.modules.notifications.templates.email.signature');?>
    
</div>

<?php $this->renderPartial('common.modules.notifications.templates.email.footer');?>