<?php

class Pay_Payment_Block_Form_Fashionchequebeauty extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Fashionchequebeauty::OPTION_ID;
    protected $paymentMethodName = 'Fashion cheque beauty';
    protected $methodCode = 'pay_payment_fashionchequebeauty';
    protected $template = 'pay/payment/form/default.phtml';
}
