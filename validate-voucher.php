<?php

    echo "TESTING";
    if(isset($_POST['voucher']))
    {
        $voucher = $_POST['voucher'];
        $voucher = explode ("-" , $voucher);
        
        check1=(($voucher[0]*$voucher[1]+$voucher[2])*$voucher[3]+$voucher[4])%26 = ord($voucher[11])-25);
        check2=(($voucher[5]*$voucher[6]+$voucher[7])*$voucher[8]+$voucher[9])%26 = ord($voucher[12])-25);
        
        if(valid)
        {
            $_SESSION['discountPrice'] = $_SESSION['grandTotal'] * .20; 
            echo "valid";
        }
        else
        {
            echo "NOT VALID";    
        }
        
        
        
    }
?>