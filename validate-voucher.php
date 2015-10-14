<?php

    echo "TESTING";
    if(isset($_POST['voucher']))
    {
        $voucher = $_POST['voucher'];
        
        // Look up the explode function, you're close but it wont return every individual character.
        // Think about what you are trying to do, you are splitting by '-' what do you think that would return??
        $voucher = explode("-", $voucher);
        
        $part1 = $voucher[0];
        $part2 = $voucher[1];
        $part3 = $voucher[2];
        
        
        $check1=(($part1[0]*$part1[1]+$part1[2])*$part1[3]+$part1[4])%26;
        $check2=(($part2[0]*$part2[1]+$part2[2])*$part2[3]+$part2[4])%26;
        
        if($check1 == (ord($part3[0])-65) && $check2 == (ord($part3[1])-65))
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