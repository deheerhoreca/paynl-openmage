<?php

class Pay_Payment_Block_Form_Sofortbyklarna extends Pay_Payment_Block_Form_Abstract {

    protected $paymentMethodId = Pay_Payment_Model_Paymentmethod_Sofortbyklarna::OPTION_ID;
    protected $paymentMethodName = 'Sofort (by Klarna)';

    protected $methodCode = 'pay_payment_sofortbyklarna';

}
