<?php

class Pay_Payment_Block_Form_Boekencadeau extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Boekencadeau::OPTION_ID;
    protected $paymentMethodName = 'Boeken cadeau';
    protected $methodCode = 'pay_payment_boekencadeau';
    protected $template = 'pay/payment/form/default.phtml';
}
