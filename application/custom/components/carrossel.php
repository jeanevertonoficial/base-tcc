<?php

use src\doctrine\Controller\models\Carrossel;
use src\doctrine\Controller\Tools;

$caminho = (new Tools())->rotaBanner();
$produto = (new Carrossel())->chamaCarrossel();
$quant = (new Carrossel())->chamaContadorCarrossel();

if (($produto) and ($produto->num_rows != 0)):
    ?>
    <div class="carrossel">
        <div class="jumbotron">
            <div class="row featurette">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php
                            $qnt_slide = $quant;
                            $cont_marc = 0;
                            while (is_int($cont_marc) < is_int($qnt_slide)) {
                                echo "<li id='valor-car' data-target='#myCarousel' data-slide-to='$cont_marc'></li>";
                                $cont_marc++;
                            }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $cont_slide = 0;
                            $img = $caminho;
                            while ($row_slide = mysqli_fetch_assoc($produto)) {
                                $active = "";
                                if ($cont_slide == 0) {
                                    $active = "active";
                                }
                                echo "<div class='carousel-item $active'>";
                                echo "<img class='d-block ' src='$img" . $row_slide['nome'] . "' alt='" . $row_slide['nome'] . "'>";
                                echo "</div>";

                                $cont_slide++;

                            }

                            ?>
                        </div>

                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;
