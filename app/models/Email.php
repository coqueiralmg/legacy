<?php

namespace app\models;

class Email {

    /**
     * @param Object $destinatario
     */
	private $destinatario;
    /**
     * @param string $rementente 
     * Nome de quem está enviado o e-mail
     */
	private $remetente;
    /**
     * @param string $emailRemetente 
     * Email de quem está enviando o e-mail
     */ 
	private $emailRemetente;
    /**
     * @param string $telefoneRemetente 
     * Telefone de quem está enviando o e-mail
     */ 
    private $telefoneRemetente;
    /**
     * @param string $enderecoRemetente 
     * Endereco de quem está enviando o e-mail
     */ 
    private $enderecoRemetente;
    /**
     * @param string $assunto 
     * Assunto do e-mail
     */ 
	private $assunto;
    /**
     * @param string $mensagem
     * Mensagem em html do e-mail
     */ 
	private $mensagem;
    /**
     * @param $_FILES $anexo
     * Anexo do e-mail
     */ 
    private $anexo;

    public function getDestinatario(){
        return $this->destinatario;
    }
    
    public function setDestinatario(\app\models\Vereador $destinatario){
        $this->destinatario = $destinatario;
        return $this;
    }
    
    public function getRemetente(){
        return $this->remetente;
    }
    
    public function setRemetente($remetente){
        $this->remetente = $remetente;
        return $this;
    }
    
    public function getEmailRemetente(){
        return $this->emailRemetente;
    }
    
    public function setEmailRemetente($emailRemetente){
        $this->emailRemetente = $emailRemetente;
        return $this;
    }
    
    public function getTelefoneRemetente(){
        return $this->telefoneRemetente;
    }
    
    public function setTelefoneRemetente($telefoneRemetente){
        $this->telefoneRemetente = $telefoneRemetente;
        return $this;
    }
    
    public function getEnderecoRemetente(){
        return $this->enderecoRemetente;
    }
    
    public function setEnderecoRemetente($enderecoRemetente){
        $this->enderecoRemetente = $enderecoRemetente;
        return $this;
    }
    
    public function getAssunto(){
        return $this->assunto;
    }
    
    public function setAssunto($assunto){
        $this->assunto = $assunto;
        return $this;
    }
    
    public function getMensagem(){
        return $this->mensagem;
    }
    
    public function setMensagem($mensagem){
        $this->mensagem = $mensagem;
        return $this;
    }
    
    

	public function enviar() {
        $mensagem = "<html>";
        $mensagem .= "<body>";
        $mensagem .= "À . {$this->getDestinatario()->getNome()}, <br /><br />";
        $mensagem .= "{$this->getRemetente()} enviou uma mensagem através do site da Prefeitura de Coqueiral MG.<br /><br />";
        $mensagem .= "Mensagem enviada no dia " . date('d/m/Y H:i:s') . "<br />";
        $mensagem .= "<strong>Usuário:</strong> {$this->getRemetente()}<br />";
        $mensagem .= "<strong>E-mail:</strong> {$this->getEmailRemetente()}<br />";
        $mensagem .= "<strong>Endereço:</strong> {$this->getEnderecoRemetente()}<br />";
        $mensagem .= "<strong>Telefone:</strong> {$this->getTelefoneRemetente()}<br />";
        $mensagem .= "<strong>Assunto:</strong> {$this->getAssunto()}<br /><br />";
        $mensagem .= "<strong>Mensagem:</strong> <br />";
        $mensagem .= "{$this->getMensagem()}<br />";
        $mensagem .= "</body>";
        $mensagem .= "</html>";

        $mail = new \PHPMailer();

        $mail->IsSMTP(); // Define que a mensagem será SMTP
		$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
		//$mail->SMTPDebug  = 2;
		$mail->SMTPSecure = "tls";
        //$mail->Host = "smtp.nicklandia.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
		//$mail->Username = 'atendimento@nicklandia.com.br'; // Usuário do servidor SMTP (endereço de email)
        //$mail->Password = 'plinio123456';
		$mail->Host = "smtp.gmail.com";
		$mail->Username = "atendimento@nicklandia.com.br";
		$mail->Password   = "plinio123456";
        

        /* REMETENTE */
        $mail->From = 'teste@email.com';
        $mail->FromName = $this->getRemetente();
        $mail->AddReplyTo($this->getEmailRemetente());

        /* DESTINATÁRIO */
        /*$mail->AddAddress("atendimento@nicklandia.com.br");
		$mail->AddAddress("franca@nicklandia.com.br");*/
        $mail->AddAddress($this->getDestinatario()->getUsuario()->getEmail());
        $mail->AddBcc("pliniopjn@hotmail.com");
        $mail->AddBcc("fabio@flymedia.com.br");

        /* CORPO E ASSUNTO E-MAIL */
        $mail->Subject = "[Prefeitura de Coqueiral] Formulário de Contato";
        $mail->MsgHTML($mensagem);

        /* CONFIGURAÇÕES */
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->Port = 587;
        //$mail->SMTPDebug  = 1;

        return ($mail->send()) ? true : false;
    }

    public function enviarContato() {
        $mensagem = "<html>";
        $mensagem .= "<body>";
        $mensagem .= "Mensagem enviada no dia " . date('d/m/Y H:i:s') . "<br />";
        $mensagem .= "<strong>Usuário:</strong> {$this->getRemetente()}<br />";
        $mensagem .= "<strong>E-mail:</strong> {$this->getEmailRemetente()}<br />";
        $mensagem .= "<strong>Telefone:</strong> {$this->getTelefoneRemetente()}<br />";
        $mensagem .= "<strong>Assunto:</strong> {$this->getAssunto()}<br /><br />";
        $mensagem .= "<strong>Mensagem:</strong> <br />";
        $mensagem .= "{$this->getMensagem()}<br />";
        $mensagem .= "</body>";
        $mensagem .= "</html>";

        $mail = new \PHPMailer();

        $mail->IsSMTP(); // Define que a mensagem será SMTP
        $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
        //$mail->SMTPDebug  = 2;
        $mail->SMTPSecure = "tls";
        //$mail->Host = "smtp.nicklandia.com.br"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
        //$mail->Username = 'atendimento@nicklandia.com.br'; // Usuário do servidor SMTP (endereço de email)
        //$mail->Password = 'plinio123456';
        /*$mail->Host = "smtp.gmail.com";
        $mail->Username = "sac@flymedia.com.br";
        $mail->Password   = "Plinio123456";*/
		$mail->Host = "smtp.gmail.com";
		$mail->Username = "atendimento@nicklandia.com.br";
		$mail->Password   = "plinio123456";
        

        /* REMETENTE */
		$mail->setFrom($this->getEmailRemetente(), $this->getRemetente()); // email e nome
        $mail->AddReplyTo($this->getEmailRemetente(), $this->getRemetente()); // responder para

        /* DESTINATÁRIO */
        $mail->AddAddress("comunicacao@coqueiral.mg.gov.br");
        //$mail->AddBcc("pliniopjn@hotmail.com");
        //$mail->AddBcc("fabio@flymedia.com.br");

        /* CORPO E ASSUNTO E-MAIL */
        $mail->Subject = "[Prefeitura de Coqueiral] Fale com a Prefeitura";
        $mail->MsgHTML($mensagem);

        /* CONFIGURAÇÕES */
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->Port = 587;
        //$mail->SMTPDebug  = 1;

        return ($mail->send()) ? true : false;
    }

}