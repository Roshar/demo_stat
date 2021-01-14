<?php


namespace app\helpers;
use http\Message;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use app\helpers\Pdf2html;
use app\helpers\UtilHelper;

/**
 * Class EmailSend
 * @package app\helpers
 */
class EmailSend
{
    public string $to;
    public string $tmplHtml;
    public string $letterFormat;
    public array $data = [];
    public object $mail;

    /**
     * EmailSend constructor.
     * @param string $to
     * @param string $tmplHtml
     * @param string $letterFormat
     * @param array $data
     * @throws Exception
     */
    public function __construct( string $to, string $tmplHtml, string $letterFormat, array $data)
    {

        $this->to = $to ?? 'webrush@mail.ru';
        $this->tmplHtml = $tmplHtml ?? '';
        $this->letterFormat = strtolower($letterFormat);
        $this->data = $data;

        $mail = new PHPmailer(true);
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ipkrochr@gmail.com';                     // SMTP username
        $mail->Password   = '';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = 'UTF-8';
        $mail->setFrom('ipkrochr@gmail.com', 'Институт развития образования ЧР');
        $mail->addAddress($this->to, '');     // Add a recipient
        $this->mail = $mail;

    }

    /**
     * created PDF certificate, put in folder, attach on letter, sending, unlink in folder
     */
    public function createAndSendPDF()
    {
        try{
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'format' => 'A4-L',
                'orientation' => 'L'
            ]);

            $pdfParams = new Pdf2html(
                $this->data['firstname'],
                $this->data['lastname'],
                $this->data['schoolname'],
                $this->data['testname']);

            $mpdf->showImageErrors = true;
            $mpdf->debug = true;
            $mpdf->WriteHTML($pdfParams);
            $stringName = UtilHelper::randomString(4);
            $mpdf->Output($_SERVER['DOCUMENT_ROOT'].'/files/'."$stringName.pdf", 'F');
            $tmpContent = $this->messageText($this->letterFormat);
            $this->mail->addAttachment($_SERVER['DOCUMENT_ROOT'].'/files/doc.pdf');
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Институт развития образования ЧР';
            $this->mail->Body    = $tmpContent;
            $this->mail->send();
            unlink($_SERVER['DOCUMENT_ROOT'].'/files/'."$stringName.pdf");

            }catch (\Mpdf\MpdfException $e){
                echo $e->getMessage();
            }catch (Exception $exception){
            echo $exception->getMessage();
        }

    }

    /**
     *  send letter to administrator from visitor
     */
    public function supportMain()
    {
        try{
            $tmpContent = $this->messageText($this->letterFormat);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Институт развития образования ЧР';
            $this->mail->Body    = $tmpContent;
            $this->mail->send();

        }catch (Exception $exception){
            echo $exception->getMessage();
        }
    }

    /**
     * @return array
     */
    public function listMethodAction()
    {
        return [
            'certificate' => 'createAndSendPDF',
            'support_school' => '',
            'support_main' => 'supportMain'
        ];
    }

    /**
     * @param $letterFormat
     * call method by parameter's format
     */
    public function start($letterFormat)
    {
        $method = $this->listMethodAction();
        $need = $method[$letterFormat];
        $this->$need();
    }


    /**
     * @param $letterFormat
     * @return message from Array
     */
    protected function messageText($letterFormat)
    {
        $content = include_once __DIR__ . "/../lib/message_$letterFormat.php";
        return $content[$letterFormat];
    }
}
