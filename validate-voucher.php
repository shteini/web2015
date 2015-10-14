<?php
    session_start();

    if(isset($_POST['voucher']))
    {
        $voucher = $_POST['voucher'];
        $preservedVoucher = $voucher;
        
        // Look up the explode function, you're close but it wont return every individual character.
        // Think about what you are trying to do, you are splitting by '-' what do you think that would return??
        $voucher = explode("-", $voucher);
        
        $part1 = isset($voucher[0]) ? $voucher[0] : null;
        $part2 = isset($voucher[1]) ? $voucher[1] : null;
        $part3 = isset($voucher[2]) ? $voucher[2] : null;
        
        if(isset($part1) && isset($part2) && isset($part3))
        {
            $check1=(($part1[0]*$part1[1]+$part1[2])*$part1[3]+$part1[4])%26;
            $check2=(($part2[0]*$part2[1]+$part2[2])*$part2[3]+$part2[4])%26;
        }

        if(isset($check1) && isset($check2))
        {
            if($check1 == (ord($part3[0])-65) && $check2 == (ord($part3[1])-65))
            {
                $_SESSION['voucher'] = $preservedVoucher;
                $_SESSION['discountPrice'] = $_SESSION['grandTotal'] - ($_SESSION['grandTotal'] * 0.20); 
                echo "Valid Voucher<br>","Your Previous total was: $",$_SESSION['grandTotal'],
                "<br>Your new discounted total is: $",$_SESSION['discountPrice'];
            }
            else
            {
                echo "Voucher Not Valid";    
            }
        }
        
        
        
    }
?>