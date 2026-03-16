<?php

class Pay_Payment_Block_Form_Bancomat extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Bancomat::OPTION_ID;
    protected $paymentMethodName = 'Bancomat';
    protected $methodCode = 'pay_payment_bancomat';
    protected $template = 'pay/payment/form/default.phtml';
}
