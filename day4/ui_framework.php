
<?php
class Button{
    public $text;

    public function __construct($text){
        $this->text = $text;
    }

    public function __toString(){
        $style = "
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        ";
        return "<button style='{$style}'>{$this->text}</button>";
    }
}

class Input{
    public $tpye = 'text';
    public function __construct($tpye){
        $this->tpye = $tpye;

    }

    public function __tostring(){
        $style = "
        padding: 10px;
        border: 1px solid #ccc;
        border-rdius: 5px;
        ";
        return "<input type='{$this->tpye}' style='{$style}'/> ";
        
    }
}

?>