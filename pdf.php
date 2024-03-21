<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $shop = $_POST['shop'];
    $phone = $_POST['phone'];
    $formatted_phone = rtrim(chunk_split($phone, 2, '.'), '.');



    try {
        ob_start();
        ?>
        <style type="text/css">
      
    .child1 {
        height: 340px;
        margin: 20px;
        background-color: #fbff00;
        text-align: center;
    }
    .child2 {
        height: 200px;
        margin: 20px;
        background-color: #fbff00;
        text-align: center;
    }
           

            -->
        </style>
                         
        <page  orientation="L" backcolor="#ff0000"style="font-family: dejavusans" >
         <div class="child1" style="font-size: 130px;font-weight: 700;">
             <span style="line-height: 1.2;"><?php echo $shop; ?></span>
         </div>
        <div style="text-align: center; font-size: 150px;">
                <label for="flatpickr-range" ></label>
                <span style="font-family: madimione; margin-top: 10px;color:white;"><?php echo $formatted_phone; ?></span>
        </div>
        <div class="child2">
         </div>
            

        </page>

        <?php
        $content = ob_get_clean();
 
        $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
        $html2pdf->setDefaultFont('aealarabiya');
        //$html2pdf->output('ticket.pdf'); 
		//$html2pdf->output($_SERVER['DOCUMENT_ROOT'].'menu/uploads/'.$name.'.pdf', 'F');
		// $html2pdf->output($_SERVER['DOCUMENT_ROOT'] . 'assets - Copie/uploads/' . $ecole . '_' . $formattedDateRange . '_' . $currentDate . '.pdf', 'F');
        $html2pdf->output('ticket.pdf');


	//sendSMSFile("Menu pour l'ecole " . $ecole . ' ' . $date, "https://proxirest.ma/menu/uploads/" . $name . ".pdf");

        // $html2pdf->setDefaultFont("madimione");
        // $html2pdf->addFont("madimione", "", "vendor/tecnickvom/tcpdf/fonts/Madimi_One/MadimiOne-Regular.ttf");

        } catch (Html2PdfException $e) {
        $html2pdf->clean();

        $formatter = new ExceptionFormatter($e);
        echo $formatter->getHtmlMessage();
    }
} else {
    // If the form is not submitted, you can render the HTML form here
    // This part will be executed when the page loads initially
    // You can render your form HTML here
}

 function sendSMSFile($msg,$file)
    {    $phone="0653572741";
        $msg = "$msg";
        //$msg = urlencode($msg);

        $phone = str_replace(' ', '', $phone);
        $phone = substr($phone, -9);

        $phone = ("+212" . $phone);



        $phone = (trim($phone));


        



            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://whatsappnotif.com/api/create-message',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
              'appkey' => 'd4cc8da6-8eb7-4e91-9845-749a653d4e43',
    'authkey' => '0Ca1yfYYlLwjiAMeQDB6ANDLp0I8vAMlMZs63mggkAKWoL942D',
            'to' => $phone,
            'message' => $msg,
            'file' => $file,
            'sandbox' => 'false'
            ),
            ));

$response = curl_exec($curl);

curl_close($curl);



    }
?>


       
        
        
                        
