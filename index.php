
<?php
    include 'includes/head.php'; 
    include 'includes/header.php';

    $cursos = [
            "Full Stack" => ["Curso de desenvolvimento web", 1000.99, "full.jpeg", "fullstack"],
            "Marketing" => ["Curso de desenvolvimento de campanhas", 1000.98, "marketing.jpg", "marketing"],
            "UX" => ["Curso de User Experience", 9000.98, "ux.jpeg", "ux"],
            "Mobile Android" => ["Curso de apps", 1000, "android.png", "android"]
    ];  
?>
<div class="container">
    <!-- começo do card de cursos -->
        <div class="row">
            <?php foreach ($cursos as $nomeCurso => $infoCurso) : ?>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                    <img src="<?php echo "assets/img/$infoCurso[2]"; ?>" alt="<?php echo "Foto curso $infoCurso[2]" ?>">
                    <div class="caption">
                        <h3><?php echo $nomeCurso; ?></h3>
                        <p><?php echo $infoCurso[0]; ?></p>
                        <p>R$<?php echo $infoCurso[1]; ?></p>
                        <a href="#" class="btn btn-info" role="button" data-toggle="modal" data-target="#<?php echo $infoCurso[3] ?>">Comprar</a>
                    </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <?php foreach ($cursos as $nomeCurso => $infoCurso) : ?>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $infoCurso[3] ?>" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Preencha os seus dados</h4>
                </div>
                <div class="modal-body">
                    <h4>Curso de <strong><?php echo $nomeCurso ?></strong></h4>
                    <h4>Preço do <strong>R$<?php echo $infoCurso[1] ?></strong></h4>
                  <form action="validaComprar.php" method="post">
                      <input type="hidden" name="nomeCurso" value="<?php echo $nomeCurso ?>">
                      <input type="hidden" name="precoCurso" value="<?php echo $infoCurso[1] ?>">
                        <div class="input-group col-md-5">
                            <label for="nomeCompleto">Nome Completo</label>
                            <input id="nomeCompleto" name="nomeCompleto" class="form-control" type="text">
                        </div>    
                        <div class="input-group col-md-5">
                            <label for="cpf">CPF</label>
                            <input id="cpf" name="cpf" class="form-control" type="number">
                        </div> 
                        <div class="input-group col-md-5">
                            <label for="nroCartao">Numero do Cartão</label>
                            <input id="nroCartao"  name="nroCartao" class="form-control" type="number">
                        </div> 
                        <div class="input-group col-md-5">
                            <label for="validade">Validade</label>
                            <input id="validade" name="validade" class="form-control" type="month">
                        </div> 
                        <div class="input-group col-md-5">
                            <label for="cvv">CVV</label>
                            <input id="cvv" name="cvv" class="form-control" type="number">
                        </div> 
                        <button type="submit" class="btn btn-primary">Comprar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
        <?php endforeach ?>
    </div>

<?php include 'includes/footer.php'; ?>