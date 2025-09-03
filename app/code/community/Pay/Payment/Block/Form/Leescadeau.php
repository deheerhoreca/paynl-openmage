<?php

class Pay_Payment_Block_Form_Leescadeau extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Leescadeau::OPTION_ID;
    protected $paymentMethodName = 'Lees cadeau';
    protected $methodCode = 'pay_payment_leescadeau';
    protected $template = 'pay/payment/form/default.phtml';
}
