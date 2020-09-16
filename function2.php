<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    
    <body>
        <div>Github location  https://github.com/nlbrown/WDV341/blob/master/function2.php</div><br>
        <?php 
        $date1 = "";
        $date2 = "";
        $str1 = "";
        $money = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (isset($date1) && (!empty($_POST["date1"]))){
               $date1 = $_POST["date1"];
                convert1($date1);
                       
            }
            
            if (isset($date2) && (!empty($_POST["date2"]))){
               $date2 = $_POST["date2"];
               convert2($date2);                         
            }
            
            if (isset($str1) && (!empty($_POST["str1"]))){
               $str1 = $_POST["str1"];
               inspect($str1);       
            }
            
            if (isset($money) && ($_POST["money"] > 0)){
                $money = $_POST["money"];
                convmoney($money);                         
            }
        }
        
            function convert1($indate){
                //    echo "date1 came in as ".$indate
                $indate = date_create($indate);
                echo "Date formatted mm/dd/yyyy  ". date_format($indate,"m/d/Y")."<br>";
            
            }
        
            function convert2($indate2){
           //    echo "date1 came in as ".$indate
                $indate2 = date_create($indate2);
                echo "international Date formatted yyyy-mm-dd  ". date_format($indate2,"Y-m-d"."<br>");
            }
        
            function inspect($indata) {
                $instr = trim($indata);
                $found = strripos($instr,"DMACC");
                if ($found > -1 ){
                    echo "<br>Value DMACC found<br>";                   
                }else{
                    echo "Value DMACC not found in string<br>";
                }
                echo "Length of the string is " . strlen($instr)."<br>";
                echo "String in lowercase is ". strtolower($indata)."<br>";            
                
            }
        
             function convmoney($inmoney){
                 $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
                 echo $formatter->formatCurrency($inmoney, 'USD');
              //      echo "<br>formatted number is ".printf("$%01.2f", $inmoney); 
                 
              // works--  echo "$" . $english_format_number = number_format($inmoney, 2, '.', ',');
                
                }
            
            ?>
        <br><br>
        <h1>Data to convert</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
            <label>Date:
                <input type="date" name="date1" value="<?php echo $date1;?>">
            </label> <br>
            <label>Date:
                <input type="date" name="date2" value="<?php echo $date2;?>">
            </label> <br>
        
            <label>String to inspect:
                <input type="text" name="str1" value="<?php echo $str1;?>">
            </label> <br>
            
            <label>Convert number to currency:
                <input type="text" name="money" value="<?php echo $money;?>">
            </label> <br>
            
            <input type="submit" name="submit" value="Submit">  
        </form>
        
        
</body>
</html>