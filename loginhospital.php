<?php
class login {
  private $email;
  private $senha;

  public function __construct($email, $senha){
    $this->email = $email;
    $this->senha = $senha;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getSenha(){
    return $this->senha; // Correção aqui
  }
}

class usuario extends login {
  private $nome;

  public function __construct($nome, $email, $senha){
    parent::__construct($email, $senha);
    $this->nome = $nome;
  }
}

$pessoa1 = new usuario("Rafael", "rafaelzinho123@gmail.com", "12345678"); // Correção aqui
$pessoa2 = new usuario("Lucas", "lucasboy35@gmailcom", "87654321"); // Correção aqui
$pessoa3 = new usuario("Renan", "renandelas@outlook.com", "góticasrabudas123@"); // Correção aqui

echo "Email da Pessoa 1: " . $pessoa1->getEmail() . "\n" . "Senha: " . $pessoa1->getSenha() . "\n";
echo "Email da Pessoa 2: " . $pessoa2->getEmail() . "\n" . "Senha: " . $pessoa2->getSenha() . "\n"; // Correção aqui
echo "Email da Pessoa 3: " . $pessoa3->getEmail() . "\n" . "Senha: " . $pessoa3->getSenha() . "\n"; // Correção aqui
?>
