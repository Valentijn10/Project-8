// Valentijn
<?php
require "connect.php";

class Products{
    public string $prodName;
    public int $ingredID;
    public string $prodCategory;
    public string $prodGlassType;
    public string $prodInstruction;

    // wanneer de class wordt aangemaakt met | new Products() | dan worden er standaard gegevens ingezet op de variabelen bovenaan
    public function __construct($prodName="", $ingredID=0, $prodCategory="", $prodGlassType="", $prodInstruction=""){
        $this->prodName = $prodName;
        $this->ingredID = $ingredID;
        $this->prodCategory = $prodCategory;
        $this->prodGlassType = $prodGlassType;
        $this->prodInstruction = $prodInstruction;
    }

    // Getters
    public function getProdName(){
        return $this->prodName;
    }

    public function getIngredID(){
        return $this->ingredID;
    }

    public function getProdCategory(){
        return $this->prodCategory;
    }

    public function getProdGlassType(){
        return $this->prodGlassType;
    }

    public function getProdInstruction(){
        return $this->prodInstruction;
    }

    // Setters
    public function setProdName($prodName){
        $this->prodName = $prodName;
    }

    public function setIngredID($ingredID){
        $this->ingredID = $ingredID;
    }

    public function setIrodCategory($prodCategory){
        $this->prodCategory = $prodCategory;
    }

    public function setProdGlassType($prodGlassType){
        $this->prodGlassType = $prodGlassType;
    }

    public function setProdInstruction($prodInstruction){
        $this->prodInstruction = $prodInstruction;
    }

    // CRUD functies
    public function createProduct(){
        // Connectie maken met de database 
        $db = new Database("localhost","root","","project6");

        // gegevens in variabelen zetten via de getters
        $prodID = NULL; // wordt automatische aangemaakt door de database
        $prodName = $this->getProdName();
        $ingredID = $this->getIngredID();
        $prodCategory = $this->getProdCategory();
        $prodGlassType = $this->getProdGlassType();
        $prodInstruction = $this->getProdInstruction();

        // gegevens in de juiste database tabel zetten
        $db->SQLCommando("insert into products values 
        (:prodID, :prodName, :ingredID, :prodCategory, :prodGlassType, :prodInstruction)
        ", [
            "prodID" => $prodID,
            "prodName" => $prodName,
            "ingredID" => $ingredID,
            "prodCategory" => $prodCategory,
            "prodGlassType" => $prodGlassType,
            "prodInstruction" => $prodInstruction,
        ]);
    }

    public function readProduct(){
        $db = new Database("localhost","root","","project6");

        // Alle klant gegevens in de database opvragen voor elk bestaand klant ID
        $prodList = $db->SQLCommando("select * from products where 1",[]);

        foreach($prodList as $prod){
            $this->prodID = $prod["prodID"];
            echo "<p>Product ID: " . $this->prodID . "<br>";
            echo "Product name: " . $this->prodName = $prod["prodName"] . "<br>";
            echo "Ingredient ID: " . $this->ingredID = $prod["ingredID"] . "<br>";
            echo "Product category: " . $this->prodCategory = $prod["prodCategory"] . "<br>";
            echo "Product glasstype: " . $this->prodGlassType = $prod["prodGlassType"] . "<br>";
            echo "Product instruction: " . $this->prodInstruction = $prod["prodInstruction"] . "<br></p>";
        }
    }

    public function updateProduct($prodID){
        $db = new Database("localhost","root","","project6");
        $this->prodID = $prodID;
        $prodName = $this->getProdName();
        $ingredID = $this->getIngredID();
        $prodCategory = $this->getProdCategory();
        $prodGlassType = $this->getProdGlassType();
        $prodInstruction = $this->getProdInstruction();

        // Veranderen van de gegevens in de database gebaseerd op de gegeven product id
        $db->SQLCommando(
        "update products set
                prodName            = :prodName,
                ingredID            = :ingredID,
                prodCategory        = :prodCategory,
                prodGlassType       = :prodGlassType,
                prodInstruction     = :prodInstruction
        where   prodID = :prodID"
        ,[
            "prodID" => $prodID,
            "ingredID" => $ingredID,
            "prodCategory" => $prodCategory,
            "prodGlassType" => $prodGlassType,
            "prodInstruction" => $prodInstruction
        ]);

        echo "<p>Het product is gewijzigd. <br /></p>";
    }

    public function deleteProduct($prodID){
        $db = new Database("localhost","root","","project6");
        
        // Checken waar de product id in de database overeenkomt met de gegeven product id
        $db->SQLCommando("delete from products where prodID  = :prodID", ["prodID" => $prodID]);
    }

    public function searchProdID($prodID){
        $db = new Database("localhost","root","","project6");

        // Zoeken op prod ID in de database
        $klanten = $db->SQLCommando("select * from products where prodID = :prodID", ["prodID" => $prodID]);
    
        // klant gegevens opvragen
        foreach ($products as $prod) {
            $this->prodID = $prod["prodID"];
            $this->prodName = $prod["prodName"];
            $this->ingredID = $prod["ingredID"];
            $this->prodCategory = $prod["prodCategory"];
            $this->prodGlassType = $prod["prodGlassType"];
            $this->prodInstruction = $prod["prodInstruction"];
        }
    }

    public function searchProdName($prodName){
        $db = new Database("localhost","root","","project6");

        // checken waar product naam in de database overeenkomt met de gegeven naam
        $prod = $db->SQLCommando("select * from product where prodName = :prodName", ["prodName" => $prodName]);
    
        // product gegevens opvragen
        foreach ($products as $prod) {
            $this->prodID = $prod["prodID"];
            $this->prodName = $prod["prodName"];
            $this->ingredID = $prod["ingredID"];
            $this->prodCategory = $prod["prodCategory"];
            $this->prodGlassType = $prod["prodGlassType"];
            $this->prodInstruction = $prod["prodInstruction"];
        }
    }


    // Het laten zien van de huidige gegevens in de class met gebruik van getters
    public function afdrukkenProduct(){
        echo "<p>Ingredient ID: " . $this->getIngredID() . "<br>";
        echo "Name " . $this->getProdName() . "<br>";
        echo "Category: " . $this->getProdCategory() . "<br>";
        echo "Glasstype: " . $this->getProdGlassType() . "<br>";
        echo "Insruction: " . $this->getProdInstruction() . "<br></p>";
    }
}