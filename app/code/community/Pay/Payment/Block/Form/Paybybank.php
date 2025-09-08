<?php

class Pay_Payment_Block_Form_Paybybank extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Paybybank::OPTION_ID;
    protected $paymentMethodName = 'Pay by Bank';

    protected $methodCode = 'pay_payment_paybybank';

}
