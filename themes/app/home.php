<?php $v->layout("__theme"); ?>

<div class="content">
    <section class="main-section">
        <h1>Teste Prático</h1>
       <div class="box-container">
           <div class="card">
               <h2>Problema 1</h2>
               <pre>
                   < ? php
                       $chico = 1.5;
                            $juca = 1.1;

                            $year = 0;

                            //condição
                            while($chico >= $juca){
                                //acrescenta 2 cm para chico
                                $chico += 0.02;
                                //acrescenta 3 cm para juca
                                $juca += 0.03;
                                // incrementa o ano
                                $year++;
                            }
                            ? >
               </pre>
              <p><?= calcAge(); ?></p>
           </div>
           <div class="card">
               <h2>Problema 2</h2>
               <form action="<?= url("/search"); ?>" method="post">
                   <label>
                       Nome do livro : <select name="book">
                           <?php foreach($library as $book): ?>
                               <option value="<?= $book->id; ?>"><?= $book->name; ?></option>
                           <?php endforeach; ?>
                       </select>
                   </label><br><br><br>
                   <label>
                       Tipo: <select name="user">
                           <?php foreach($users as $user): ?>
                               <option value="<?= $user->id; ?>">
                                   <?= ($user->type == 1 ? "Professor" : "Aluno"); ?>
                               </option>
                           <?php endforeach; ?>
                       </select>
                   </label><br><br><br>
                   <button type="submit">Aplicar</button>
               </form>

           </div>
           <div class="card">
               <h2>Problema 3</h2>
               <pre>
                   $matriz = [1,2,3,4,5];
                    $pares = 0;
                    $impares = 0;
                    for($i = 0; $i < count($matriz); $i++){
                        if($matriz[$i]%2 == 0){
                            $pares++;
                        }
                    }
                    $impares = count($matriz) - $pares;
               </pre>
               <p><?= matriz(); ?></p>
           </div>
           <div class="card">
               <h2>Problema 4</h2>
               <pre>
                   < ?php
                       $n = [1,13,55,21,5,83];
                        $a = [count($n)-2];
                        $end = end($n);

                        if(is_numeric((int)array_values($n))){
                            sort($n);
                            if($n[$a[0]] < $end){
                                array_pop($n);
                            }

                            $value = implode(",", $n);
                            echo $value;
                        }
                   ?>
               </pre>
               Imprimir: <p><?= order(); ?></p>
           </div>
       </div>
    </section>
</div>

