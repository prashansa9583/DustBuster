<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>

<?php 
echo $cleanArr;
// Require composer autoload
// require_once 'C:\xampp\htdocs\test3\vendor\autoload.php';

    require('C:\xampp\htdocs\DustBuster\vendor\autoload.php');
    // {{$clientArr}} {{$caseArr}} {{$billArr}}


    $trial='<table width="100%">
    <tr style="border: 1px solid black;">
        <td style="text-align:left;width:130px;height:100px; ">
            <img width="100px" height="100px" src="https://rukminim1.flixcart.com/image/416/416/kbwjvrk0/car-sticker/z/8/2/1-advocate-logo-sign-vinyl-sticker-self-adhesive-3-high-quality-original-imaft5nbfbtyvqke.jpeg?q=70">
        </td>
        <td > 
            <p style="font-size: xx-large;line-height: 0px; ">ROHAN A. RATNAPARKHI<br><p style="font-size: x-large;">ADVOCATE</p></p>
        </td>
    </tr>
</table>';

$trial .='<table  width="100%">
<tr>
    <td style="width:250px;text-align:left;font-size: medium;">
        <br>
        Bill ID : ' .'$billArr[0]->bill_id'.
    '</td>
    <td style="text-align:right;font-size: medium;">
        <br>
        Date : ' .date("F  d,\t Y").
    '</td>
</tr>
</table>';

$trial .='<table width="100%">
<tr>
    <td style="width:250px;text-align:left;font-size: medium;line-height: 25px;">
     <p style="line-height: 25px;">To,
        <br>'.'$prefix2.$clientArr[0]->name'.'<br>'.'$clientArr[0]->address'.'
    </td>
</tr>
</table>';

$trial .= '<table width="100%">
<tr>
    <td style="width:250px;text-align:center;font-size: medium;line-height: 25px;">
     <p style="line-height: 25px;"><b>Sub: </b> '.'$billArr[0]->subject'.'
        <br><b>Ref: </b> '.'$billArr[0]->ref'.'    
           <br><b>Kind Attn.: </b> '
           .'$prefix.$attention'.
           '</p>
    </td>
</tr>
</table>';

$trial .= '<table width="100%">
<tr>
    <td style="text-align:left;font-size: medium;">
     Dear '. '$reference'.',
    </td>
</tr>
</table>';

$trial .= '<table width="100%">
<tr>
    <td style="text-align:left;font-size: medium;">
        <p style="text-indent: 50px;">
            At your instruction, I have been rendering my professional services to you in respect of '.'$caseArr[0]->case_desc'.' .My '.'$billArr[0]->subject'.' for professional fees in the said matter are as follows: - 
        </p>
    </td>
</tr>
</table>';

$trial .= '<br><br><table width="100%" style="border: 1px solid black;">
<tr >
    <td style="text-align:center;font-size: medium; width:500px;border-right: 1px solid black;border-bottom: 1px solid black;">
        <u>Particulars</u>
    </td>
    <td style="text-align:center;font-size: medium;border-bottom: 1px solid black;">
        <u>Amount </u> (in Rs.)
    </td>
</tr>
<tr >
    <td style="text-align:left;font-size: medium; width:500px;border-right: 1px solid black;border-bottom: 1px solid black;">
        <ul><li style="padding-left: 10px;"> Professional services being provided:</li></ul>
        <p style="padding-left: 30px;">
        '.'$billArr[0]->pro_fees'.'
        </p>
    </td>
    <td style="text-align:center;font-size: medium;line-height: 70px;border-bottom: 1px solid black;">
    '.'$billArr[0]->pro_fees_amount'.'
    </td>
</tr>

<tr style="border-bottom:1px solid black">
    <td style="text-align:left;font-size: medium; width:500px;border-right: 1px solid black;border-bottom: 1px solid black;">
        <ul><li style="padding-left: 10px;"> Expenses Incurred:</li></ul>
        <p style="padding-left: 30px;">
        '.'$billArr[0]->expenses'.'
        </p>
    </td>
    <td style="text-align:center;font-size: medium;border-bottom: 1px solid black;">
    '.'$billArr[0]->expenses_amount'.'
    </td>
</tr>
<tr>
    <td style="text-align:right;font-size: medium;border-right: 1px solid black;border-bottom: 1px solid black;">
        <b>Balance Payable:</b>  
    </td>
    <td style="text-align:center;font-size: medium;border-bottom: 1px solid black;">
    <b>'.'$billArr[0]->amount'.' /- </b>
    </td>
</tr>

</table>';

$trial .= '<br><table width="100%">
<tr>
    <td style="text-align:center;font-size: medium;">
        Kindly pay the sum of <b>'.'convertNumber($billArr[0]->amount)'.'</b> at the earliest. Please Make the payment in the name of <u>Rohan A. Ratnaparkhi.</u> PAN: ALAPR5747A <br>  
    </td>
</tr>

<tr>
    <td style="text-align:right;font-size: medium;">
        <br>Yours Faithfully<br><br><br><br>Rohan A. Ratnaparkhi<br><b>Advocate</b>
    </td>
</tr>
</table>';

$trial .= '<table width="100%">     
<tr>
    <td style="text-align:center;font-size: medium; padding-bottom: 50px;"> 
    <hr>
        <br>
        <br>
        Office no. 07, Second floor, Sagar Arcade, Cafe Goodluck chowk, Deccan gymkhana, Fergusson College Road, Pune - 411004. Contact no. +91 - 8149148408 / 9850917645.<br>Email: rohan.ratnaparkhi03@gmail.com / rohanr.associates@gmail.com
        <br> 
    </td>
</tr>
</table>';




// echo $trial;
    // $html='<p> Hi</p>';
    // $html .='<p>Nexa</p>';
    

$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($trial);
$file=time().'.pdf';
$mpdf->output($file,'D');
// $mpdf->Output();


?>