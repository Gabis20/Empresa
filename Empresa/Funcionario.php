<?php
    class Funcionario{
        private $nome;
        private $cidade;
        private $salHora;
        private $horasTrab;
        private $salarioFinal;

            public function setNome($nome)
            {
                $this->nome = $nome;
            } 
            public function getNome()
            {
                return $this->nome;
            }
            public function setCidade($cidade)
            {
                $this->cidade = $cidade;
            } 
            public function getCidade()
            {
                return $this->cidade;
            }
            public function setSalHora($salHora)
            {
                $this->salHora = $salHora;
            } 
            public function getSalHora()
            {
                return $this->salHora;
            }
            public function setHorasTrab($horasTrab)
            {
                $this->horasTrab = $horasTrab;
            } 
            public function getHorasTrab()
            {
                return $this->horasTrab;
            }
            public function setSalarioFinal($salarioFinal)
            {
                $this->salarioFinal = $salarioFinal;
            } 
            public function getSalarioFinal()
            {
                return $this->salarioFinal;
            }
            public function calcularSalario(){
                return $this->salarioFinal = $this->horasTrab * $this->salHora * 30; 
            }
            public function mostrarDados(){
                return "nome:" . $this->nome . "cidade:" . $this->cidade . "Valor por hora:" . $this->salHora . "horas trabalhadas:" . $this->horasTrab . "salario final" . $this->salarioFinal;
            }
            public function darAumento($aumento){
                $this->salarioFinal += $aumento;
            }
        }
?>