        <style> 
        .texto1{
            color: blue;
            font-size: 9rem;
        }
        .texto2{
            color: pink;
            font-size: 10rem;
        }

        </style>
        <p class="texto1">
        <?php
             
             ECHO "Hello World!<br>";
             echo "Hello World!<br>";
             echo"Hello World!<br>";
            ?>
               </p>
         
        <p class="texto2">
         <?php
        $nome = "Samuel";
        $sobrenome = 'Dayne';
        $numero = 999;

        echo "${nome} <h1> ${sobrenome} </h1>";
        echo $numero . "<p> " . $nome . 
        " " . $sobrenome . "</p>";
        ?>
        </p>
        
      
