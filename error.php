<?php
Error::__construct »« ErrorException::getSeverity
Manual do PHP Referência da Linguagem Exceções pré-definidas
Change language: 
Brazilian Portuguese
Submit a Pull Request Report a Bug
Error ¶
(PHP 7, PHP 8)

Introdução ¶
Error é a classe base para todas as exceções de erros internos do PHP.

Sinopse da classe ¶
class Error implements Throwable {
/* Propriedades */
protected string $message;
protected int $code;
protected string $file;
protected int $line;
/* Métodos */
public __construct(string $message = "", int $code = 0, Throwable $previous = null)
final public getMessage(): string
final public getPrevious(): Throwable
final public getCode(): mixed
final public getFile(): string
final public getLine(): int
final public getTrace(): array
final public getTraceAsString(): string
public __toString(): string
final private __clone(): void
}

?>