<?php
    if(isset($_POST['voucher']))
    {
        $voucher = $_POST['voucher'];
        
        if(valid)
        {
            $_SESSION['discountPrice'] = $_SESSION['grandTotal'] * .20;    
        }
        else
        {
            return "NOT VALID";    
        }
        
        
        
    }
?>