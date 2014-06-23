<?php
    ob_start();
?>

<!-- write your code here -->

<div style="font-size:50px; font-weight:bold; margin-left:150px;">
    Hello Gulguli Mam
    <img src="images/smile.jpg" style="height:60px; width:60px;">
</div>
<div style="color:red;padding:30px 60px;">
        Life is like a novel. Many chapters read and forgotten.
        But there is one I wont forget.
        It’s the chapter
        “I met u and we became friends”.
</div>
<div style="margin-left:100px;">
    <img src="images/img.jpg">
</div>

<!-- write your code here -->

<?php
    //if (isset($_POST['pdf'])) 
    {
        $content = ob_get_clean();
        require_once(dirname(__FILE__).'/pdf/html2pdf.class.php');
        try
        {
            $html2pdf = new HTML2PDF('P', 'A4', 'fr');
            $html2pdf->writeHTML($content);
            $html2pdf->Output("Happy_friendship_day.pdf");
            exit;
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    }
?>