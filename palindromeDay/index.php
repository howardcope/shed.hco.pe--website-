<?php
    date_default_timezone_set('UTC');
    $aOutputBuffer = array();    
    
    function opAdd($s)
    {
        global $aOutputBuffer;
        array_push($aOutputBuffer,$s);
    }
    
    function opPrint($s)
    {
        
            
            echo "<p>{$s}</p>";
        
    }
    
    function dateIsPalindrome($objDateTime)
    {
        $part1 = substr($objDateTime->format("dmY"), 0, 4);
        $part2 = strrev(substr($objDateTime->format("dmY"), 4, strlen($objDateTime->format("dmY"))-1));
        if ($part1 == $part2)
        {
            return true;
        }
        return false;
    }
    
   
    
    
    
    // loop through adding a day for a few months
    
    // test for each day being a palindrome
    
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
    <title>shed/palindrome day</title>
    </head>
    
    <body>
    <?php
        $objCurrentDate = new DateTime;
        
        $nCounter = 0;
        
        //$objCurrentDate->modify( '-200 year' );
        echo "<p>";
        echo $objCurrentDate->format("dmY") ;
        echo dateIsPalindrome($objCurrentDate) ? ": yes" : ": no" ;
        echo "</p>";
        
        while ($nCounter < 10) // !dateIsPalindrome($objCurrentDate) && 
        {
            $objCurrentDate->modify( '-1 day' );
            if (dateIsPalindrome($objCurrentDate))
            {
                echo "<p>";
                echo  "[{$nCounter}] " . $objCurrentDate->format("D jS M Y") . " (" . $objCurrentDate->format("dmY") . ")";
                echo " PALINDROME";
                echo "</p>";
                $nCounter++;
            }
        }

        /*$objCurrentDate->modify( '+1 day' );
        echo "<p>";
        echo $objCurrentDate->format("dmY") ;
        echo dateIsPalindrome($objCurrentDate) ? ": yes" : ": no" ;
        echo "</p>";*/
    ?>
    
    </body>
    
<html>
