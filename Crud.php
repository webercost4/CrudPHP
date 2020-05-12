<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author weber
 */

class CrudPHP {
    
    public function Crud($sql, $bind){
        
        $this->ConnectDB();
        
        $this->stmt = $this->conexao->prepare("$sql");

        foreach ($bind as $bindV => $key) :
            $this->stmt->bindValue($bindV + 1, $key);
        endforeach;

        $this->stmt->execute();

    }
    
}

$new = new CrudPHP;

$new->Crud('SELECT * FROM test','WHERE id = ?', [1]);

