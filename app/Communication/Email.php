<?php

namespace App\Comunication;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Email
{
    /**
     * mensagem de erro do envio
     * @var string
     */
    private $error = '';

    /**
     * Método responsável por retornar a mensagem de erro do envio
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Método responsável por enviar um e-mail
     *
     * @param string|array $addresses
     * @param string $subject
     * @param string $body
     * @param string|array $attachments
     * @param string|array $css
     * @param string|array $bccs
     *
     * @return boolean
     */
    public function sendEmail($addresses, $subject, $body, $attachments = [], $css = [], $bccs = [])
    {
        /* limpa a mensagem de erro */
        $this->error = '';

        /* instância de PHPMAILER */
        $phpmailer = new PHPMailer(true);
        try {

            /* credenciais de acesso SMTP */
            $phpmailer->isSMTP(true);
            $phpmailer->Host       = getenv('MAIL_HOST');
            $phpmailer->SMTPAuth   = true;
            $phpmailer->SMTPSecure = getenv('MAIL_SECURE');;
            $phpmailer->Port       = getenv('MAIL_PORT');;
            $phpmailer->Username   = getenv('MAIL_USER');;
            $phpmailer->Password   = getenv('MAIL_PASS');;
            $phpmailer->CharSet    = getenv('MAIL_CHARSET');;

            /* remetente */
            $phpmailer->setFrom(getenv('MAIL_FROM_EMAIL'), getenv('MAIL_FROM_NAME'));

            /* destinatário(s) */
            $addresses = is_array($addresses) ? $addresses : [$addresses];
            foreach ($addresses as $address) {
                $phpmailer->addAddress($address);
            }

            /* anexo(s) */
            $attachments = is_array($attachments) ? $attachments : [$attachments];
            foreach ($attachments as $attachment) {
                $phpmailer->addAttachment($attachment);
            }

            /* cc */
            $css = is_array($css) ? $css : [$css];
            foreach ($css as $cc) {
                $phpmailer->addCC($cc);
            }

            /* bcc */
            $bccs = is_array($bccs) ? $bccs : [$bccs];
            foreach ($bccs as $bcc) {
                $phpmailer->addCC($bcc);
            }

            /* conteúdo do e-mail */
            $phpmailer->isHTML(true);
            $phpmailer->Subject = $subject;
            $phpmailer->Body = $body;

            /* envia o e-mail */
            return $phpmailer->send();

        } catch (PHPMailerException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}