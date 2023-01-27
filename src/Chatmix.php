<?php

namespace Nilsonpessim\ChatmixWhatsApp;

class Chatmix {

    private $url;
    private $key;
    private $token;
    private $numero;
    private $mensagem;
    private $agendamento;
    private $gerar_pdf;
    private $incluirAcentos;
    private $limiteCaracteres;

    function __construct(string $url = "https://api.chatmix.com.br")
    {
        $this->url = $url;
        self::config();
    }

    public function auth(string $key, string $token)
    {
        $this->key   = $key;
        $this->token = $token;
    }

    public function config(string $agendamento = "nao", string $gerar_pdf = "nao", string $incluirAcentos = "sim", int $limiteCaracteres = 1000)
    {
        $this->agendamento      = $agendamento;
        $this->gerar_pdf        = $gerar_pdf;
        $this->incluirAcentos   = $incluirAcentos;
        $this->limiteCaracteres = $limiteCaracteres;
    }

    public function sendNumber(array $numero = [])
    {
        $this->numero = $numero;
    }

    public function textMessage($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    public function sendMessage()
    {
        foreach ($this->numero as $numeros) {
            $urlMessage = "{$this->url}?key={$this->key}&token={$this->token}&incluirAcentos={$this->incluirAcentos}&numero={$numeros}&mensagem={$this->mensagem}";
            $message = new Message($urlMessage);
            $message->sendMessage();
        }
    }

}