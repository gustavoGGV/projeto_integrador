<?php

namespace app\models;

class Gerente
{
    private int $idGerente;
    private string $nomeGerente;
    private string $emailGerente;
    private string $telefoneGerente;
    private string $senhaGerente;
    private string $tipoPessoaGerente;
    private string $documentoIdentificadorGerente;
    private string $registroProfissionalGerente;
    private string $comprovanteDomicilioGerente;

    public function __construct(int $idGerente, string $nomeGerente, string $emailGerente, string $telefoneGerente, string $senhaGerente, string $tipoPessoaGerente, string $documentoIdentificadorGerente, string $registroProfissionalGerente, string $comprovanteDomicilioGerente)
    {
        $this->idGerente = $idGerente;
        $this->nomeGerente = $nomeGerente;
        $this->emailGerente = $emailGerente;
        $this->telefoneGerente = $telefoneGerente;
        $this->senhaGerente = $senhaGerente;
        $this->tipoPessoaGerente = $tipoPessoaGerente;
        $this->documentoIdentificadorGerente = $documentoIdentificadorGerente;
        $this->registroProfissionalGerente = $registroProfissionalGerente;
        $this->comprovanteDomicilioGerente = $comprovanteDomicilioGerente;
    }

    public function getIdGerente(): int
    {
        return $this->idGerente;
    }

    public function setIdGerente(int $idGerente): void
    {
        $this->idGerente = $idGerente;
    }

    public function getNomeGerente(): string
    {
        return $this->nomeGerente;
    }

    public function setNomeGerente(string $nomeGerente): void
    {
        $this->nomeGerente = $nomeGerente;
    }

    public function getEmailGerente(): string
    {
        return $this->emailGerente;
    }

    public function setEmailGerente(string $emailGerente): void
    {
        $this->emailGerente = $emailGerente;
    }

    public function getTelefoneGerente(): string
    {
        return $this->telefoneGerente;
    }

    public function setTelefoneGerente(string $telefoneGerente): void
    {
        $this->telefoneGerente = $telefoneGerente;
    }

    public function getSenhaGerente(): string
    {
        return $this->senhaGerente;
    }

    public function setSenhaGerente(string $senhaGerente): void
    {
        $this->senhaGerente = $senhaGerente;
    }

    public function getTipoPessoaGerente(): string
    {
        return $this->tipoPessoaGerente;
    }

    public function setTipoPessoaGerente(string $tipoPessoaGerente): void
    {
        $this->tipoPessoaGerente = $tipoPessoaGerente;
    }

    public function getDocumentoIdentificadorGerente(): string
    {
        return $this->documentoIdentificadorGerente;
    }

    public function setDocumentoIdentificadorGerente(string $documento): void
    {
        $this->documentoIdentificadorGerente = $documento;
    }

    public function getRegistroProfissionalGerente(): string
    {
        return $this->registroProfissionalGerente;
    }

    public function setRegistroProfissionalGerente(string $registro): void
    {
        $this->registroProfissionalGerente = $registro;
    }

    public function getComprovanteDomicilioGerente(): string
    {
        return $this->comprovanteDomicilioGerente;
    }

    public function setComprovanteDomicilioGerente(string $comprovante): void
    {
        $this->comprovanteDomicilioGerente = $comprovante;
    }
}
