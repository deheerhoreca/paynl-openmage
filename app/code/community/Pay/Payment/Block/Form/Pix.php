<?php

class Pay_Payment_Block_Form_Pix extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Pix::OPTION_ID;
    protected $paymentMethodName = 'Pix';
    protected $methodCode = 'pay_payment_pix';
    protected $template = 'pay/payment/form/default.phtml';
}
