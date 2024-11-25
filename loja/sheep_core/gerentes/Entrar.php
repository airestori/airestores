<?php 

class Entrar 
{

    private string $email;
    private string $senha;
    private ?array $resultado = null;// pode restor o valor null

    public function acessarPainel(string $email, string $senha): ?array
    {
       $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
       $this->senha = trim($senha);

       if(!Formata::Email($this->email)){
        return $this->resultado = false;
        exit();
       }

       return $this->verificaUsuario();
    }

    /**
     * @return array|null
     */
    public function getResultado(): ?array
    {
        return $this->resultado;
    }

    





}



?>
