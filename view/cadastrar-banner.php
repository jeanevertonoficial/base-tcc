<?php require_once __DIR__ . ' ./../Application/layouts/header/header-adm.phtml'; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <section class="principal">
        <h2 class="titulo-principal">Cadastrar Banner</h2>
    </section>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-inicio" role="tabpanel" aria-labelledby="nav-inicio-tab">
            <section class="principal">
                <div class="cadastrar-formulario">
                    <div class="div-cadastra">
                        <section class="section-cadastrar">
                            <form action="/banner-cadastro" method="POST" enctype="multipart/form-data">
                                <div class="cad-card">
                                    <div class="cadastro-um" id="cadastro-um">
                                        <div class="div-nome">
                                            <label for="nome" class="div-label">nome</label>
                                            <input type="text" name="nome" class="nome-cad" required>
                                        </div>
                                        <div class="div-nome">
                                            <label class="div-label" for="descricao">descricao</label>
                                            <textarea class="nome-cad text" name="descricao"
                                                      placeholder="descrição do produto"></textarea>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">

                            <button class="button-cadastro" id="nav-preco-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-preco"
                                    type="button" role="tab" aria-controls="nav-preco" aria-selected="false">PRÓXIMO
                            </button>

                        </div>
                    </nav>

                </div>
            </section>
            <div class="progress barra-progresso">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0"
                     aria-valuemax="100">Inicie o cadastro!
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="nav-preco" role="tabpanel" aria-labelledby="nav-preco-tab">
            <section class="principal">
                <div class="cadastrar-formulario">
                    <section class="section-cadastrar">
                        <div class="div-nome">
                            <label class="div-label" for="titulo_banner">Titulo do banner</label>
                            <input type="text" name="titulo_banner" class="nome-cad" required>
                        </div>
                        <div class="div-nome">
                            <label class="div-label" for="titulo_banner">Links do banner</label>
                            <input type="text" name="link_banner" class="nome-cad">
                        </div>
                        <div class="div-nome">
                            <label for="posicao" class="div-label">Posição do Banner</label>
                            <small>Caso não selecione automáticamente irá para primeira posição*</small>
                            <select name="posicao" class="nome-cad">
                                <option value="0">selecione a posição do banner</option>
                                <option value="1">1 primeiro</option>
                                <option value="2">2 segundo</option>
                                <option value="3">3 terceiro</option>
                                <option value="4">4 quarto</option>
                                <option value="5">5 Quinto</option>
                                <option value="6">6 Sexto</option>
                                <option value="7">7 sétimo</option>
                                <option value="8">8 Oitavo</option>
                                <option value="9">9 Nono</option>
                                <option value="10">10 Décimo</option>
                            </select>
                        </div>
                    </section>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">

                            <button class="button-cadastro" id="nav-imagem-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-imagem"
                                    type="button" role="tab" aria-controls="nav-imagem" aria-selected="false">PRÓXIMO
                            </button>

                        </div>
                    </nav>
                </div>
            </section>
            <div class="progress barra-progresso">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0"
                     aria-valuemax="100">40%
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="nav-imagem" role="tabpanel" aria-labelledby="nav-imagem-tab">
            <section class="principal">
                <div class="cadastrar-formulario imagem-cadastro">
                    <div class="cad-card"><a class="voltar" href="/banner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </a>
                        <div class="div-nome">
                            <label for='imagem_banner' class="div-label">Imagem produto</label>
                        </div>
                        <div id="cadastro-quatro">
                            <div class="div-imagem">
                                <label for='imagem_banner' class="div-label imagem">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
                                         class="bi bi-box-arrow-up" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                                        <path fill-rule="evenodd"
                                              d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                    </svg>
                                  <input type="file" id="imagem_banner" name="imagem_banner" class="nome-cad imagem"
                                       required>
                                </label>
                            </div>
                            <label class="selecione-foto">selecione uma Imagem</label>
                        </div>
                        <button class="button-cadastro">CONCLUIR</button>
                    </div>
            </section>
            <div class="progress barra-progresso">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 99%;
                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">99%
                </div>
            </div>
            <p class="div-nome completo">Ultimo passo!</p>
        </div>
        </form>
        </section>
    </div>
    </div>

    <style>
        .titulo-principal {
            margin: inherit;
            text-transform: uppercase;

            font-family: 'Roboto', sans-serif;
            color: #444444;
            margin-bottom: -80px;
            margin-top: -20px;

        }
        .principal {
            margin: auto;
            margin-top: 3.75rem;
            display: flex;

            flex-wrap: wrap;
            flex-direction: column;
            align-content: center;
        }

        .section-cadastrar {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;

            font-family: 'Roboto', sans-serif;
        }

        .voltar {
            color: #444444;
        }

        .cadastrar-formulario {
            overflow: hidden;
            margin-top: 4.75rem;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 20px;
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
            border: none;

            border-radius: 12px;
            width: 400px;
            height: 554px !important;
        }

        .cad-card {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 15px;

        }


        .div-cadastra {
            display: flex;
            flex-direction: column;
        }

        .nome-cad, .button-cadastro {
            display: flex;
            justify-items: center;

        }

        .nome-cad {
            border: 0.5px solid rgba(0, 0, 0, 0.25);
            padding: 5px;
            border-radius: 5px;
        }

        .button-cadastro {
            display: inline;
            justify-items: center;
            padding: 15px;
            background: bisque;
            border: none;
            margin: auto;

            width: 85%;

            text-align: center;
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Roboto', sans-serif;
            color: white;

            border-radius: 12px;
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
        }

        .button-cadastro:hover {
            background: #363636;
        }

        .nav-tabs {
            justify-content: center;
            border: none !important;
        }

        input, textarea, select {

            font-size: 14px;

            text-transform: capitalize;
            margin-top: 15px !important;
            padding: 15px !important;

            border: none !important;
            background: #FFFFFF;
            box-shadow: 0px 4px 19px rgba(0, 0, 0, 0.1);
            border-radius: 20px;

        }

        textarea {
            padding: 15px !important;
            height: 190px !important;
        }

        .selecione-foto {
            display: flex;
            justify-content: center;

            font-family: 'Roboto', sans-serif;

            border-radius: 5px;
            background: #FFFFFF;
            width: 200px;
            text-align: center;
            margin: auto;

            padding: 3px;

            box-shadow: 0px 4px 19px rgba(0, 0, 0, 0.1);

            margin-bottom: 35px;
        }

        .div-imagem {
            height: 236px !important;
            border: 2px dashed #6c757d !important;
            width: 70%;
            margin: auto;
            margin-bottom: 25px;
        }

        .imagem-cadastro {
            justify-content: inherit !important;
        }

        input[type="file"] {
            display: none;
        }

        .imagem {
            display: flex;
            justify-content: center;
            margin: auto;
            height: 100% !important;
            flex-direction: column;
            align-items: center;

            opacity: 0.8;
            cursor: pointer;
        }

        .imagem:hover {
            opacity: 1;
            color: #EED9A3;
        }

        .div-nome {
            display: flex;
            flex-direction: column;

            margin-bottom: 25px;

            text-transform: capitalize;

            font-weight: 700;

            font-size: 24px;
            color: #6a6a6a;

            text-align: center;
        }

        .barra-progresso {
            margin: auto;
            margin-top: 25px;

            width: 80%;
        }

        .completo {
            margin-top: 25px;
            margin-bottom: 5px !important;
        }

    </style>

<?php require_once __DIR__ . ' ./../Application/layouts/footer/FooterBase.phtml'; ?>