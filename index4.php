<!-- Aula sobre funções -->
<?php
    function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    //echo multiplicar(2,2);

    function numOpcional($num1 = null, $num2 = null) {
        if ($num1 != null && $num2 != null) {
            return $num1 + $num2; 
        } elseif($num1 == null) {
            return "Voce so passou o \$num2";
        } else {
            return "Voce so passou o \$num1"; //caracter de escape
        }
    }

    echo numOpcional(4,5); //com o número opcional
    //echo numOpcional(4); //sem o número opcional
    //echo numOpcional(); //erro de warning
?>  

<!-- Aula explicando includes -->
<?php 
    //include_once 'includes/head.php';
    //include_once 'includes/header.php'; 
?>
    <!--<h1>Isso aqui é um titulo</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores deserunt neque architecto ipsa dicta in rerum distinctio doloremque voluptas amet assumenda debitis excepturi similique, consequatur sapiente animi exercitationem tenetur voluptatum.</p>
    -->
    
<?php //include_once 'includes/footer.php'; ?>