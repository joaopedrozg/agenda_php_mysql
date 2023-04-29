<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    // Modificações no banco

    if(!empty($data)){

        print_r($data); 

        // Criar contato
        if($data["type"] === "create"){

           $name = $data["name"];
           $phone = $data["phone"];
           $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, observation) VALUES (:name, :phone, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
          
            try{

                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            } catch (PDOException $e){

                $error = $e->getMessage();
                echo "Erro: $error";

            }
        }

        header("Location:" . $BASE_URL . "../index.php");

    }else {

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
    
        }
        // Retorna o dado de um contato
    
        if(!empty($id)){
    
            $query = "SELECT * FROM contacts WHERE id= :id";
    
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();
    
    
        }else{
    
        // Retorna todos os contatos 
    
        $contacts = [];
    
        $query = "SELECT * FROM contacts";
    
        $stmt = $conn->prepare($query);
    
        $stmt ->execute();
    
        $contacts = $stmt->fetchAll();
        
    }

    }

    $id;

    if(!empty($_GET)){
        $id = $_GET["id"];

    }
    // Retorna o dado de um contato

    if(!empty($id)){

        $query = "SELECT * FROM contacts WHERE id= :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $contact = $stmt->fetch();


    }else{

    // Retorna todos os contatos 

    $contacts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt ->execute();

    $contacts = $stmt->fetchAll();
    
}

$conn = null;