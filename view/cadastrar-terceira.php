<?php require_once __DIR__ . ' ./../Application/layouts/header/header-adm.phtml'; ?>

    <section class="section-cadastrar">
        <div class="div-cadastra">
            <form action="/realizar-cadastro" method="POST" enctype="multipart/form-data" class="cadastrar-formulario">
                <div class="div-nome">
                    <label for="categoria" class="div-label">Categoria</label>
                    <select name="categoria" class="nome-cad">
                        <option value="sem/categoria">selecione uma categoria</option>
                        <option value="acessorio">Acessório</option>
                        <option value="bicicleta">Bicicleta</option>
                        <option value="celulares">celulares</option>
                        <option value="eletronicos">eletronicos</option>
                        <option value="carinho">Carrinho</option>
                        <option value="cama">cama</option>
                        <option value="sofa">sofa</option>
                        <option value="quarto">quarto</option>
                        <option value="banheiro">banheiro</option>
                        <option value="cozinha">cozinha</option>
                        <option value="vestuario">vestuário</option>
                    </select>
                </div>
                <div class="div-nome">
                    <label for="subcategoria" class="div-label">Sub categoria</label>
                    <select name="subcategoria" class="nome-cad">
                        <option value="sem/subcategoria">selecione uma sub-categoria</option>
                        <option value="adulto">adulto</option>
                        <option value="infantil">infantil</option>
                        <option value="feminino">feminino</option>
                        <option value="masculino">masculino</option>
                        <option value="crianca">criança</option>
                        <option value="calca-masculina">calça masculina</option>
                        <option value="calca-feminina">calça feminina</option>
                        <option value="Jaqueta">Jaqueta</option>
                        <option value="acessório">acessório</option>
                    </select>
                </div>
                <div class="div-nome">
                    <label for="marca" class="div-label">Marca</label>
                    <select name="marca" class="nome-cad">
                        <option value="sem/marca">selecione uma marca</option>
                        <option>-------- Ferramentas --------</option>
                        <option value="makita">makita</option>
                        <option value="broch">broch</option>
                        <option value="eletrolux">eletrolux</option>
                        <option>-------- Vestuários --------</option>
                        <option value="like">like</option>
                        <option value="adidas">adidas</option>
                        <option value="reserva">reserva</option>
                        <option>-------- Celulares --------</option>
                        <option value="samsung">Samsung</option>
                        <option value="iphone">Iphone</option>
                        <option value="motorola">Motorola</option>
                    </select>
                </div>
                <div class="div-nome">
                    <label for='imagem_produto' class="div-label">Imagem do produto</label>
                    <input type="file" name="imagem_produto" class="nome-cad" required>
                </div>
        </div>

        </div>

        <button class="button-cadastro">CONCLUIR</button>
        </form>

        </div>
    </section>


    <style>

        .section-cadastrar {
            width: 1000px;
            height: auto;
            margin: auto;
            margin-top: 2.75rem;
            font-family: 'Roboto', sans-serif;
        }

        .cadastrar-formulario {
            padding: 20px;
            display: flex;
            flex-direction: row;

            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
            border: none;
        }

        .div-nome {
            display: flex;
            flex-direction: column;

            margin-bottom: 25px;
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
            margin-top: -45px;
            width: 100%;

            text-align: center;
            text-transform: uppercase;
            font-size: 18px;
            font-family: 'Roboto', sans-serif;
            color: white;

            border-radius: 0 0 12px 12px;
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.25);
        }

        .button-cadastro:hover {
            background: #363636;
        }

        textarea {
            height: 110px !important;
        }

        .cadastrar-direito, .cadastro-esquerdo {
            width: 50%;
            margin-left: 15px;
        }
    </style>

<?php require_once __DIR__ . ' ./../Application/layouts/footer/FooterBase.phtml'; ?>