  <!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flick Games</title>
    <!-- Estio da página -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.red-deep_orange.min.css" />
    <link rel="stylesheet" href="cadastro.css">
    <!-- icone do navegador site -->
    <link rel="icon" type="images/png" href="images/icon.png" />
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
          <!-- Adiciona espaço, alinha a barra de navegação para direta -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <!-- Navegação -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <!--icones da barra de navegação-->   
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">
              <i class="material-icons">gamepad</i>
              Games</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">
              <i class="material-icons">edit</i>
              Cadastro</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">
              <i class="material-icons">near_me</i>
              Login</a>  
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
        </div>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
        <p></p>
				
<label>Crie seu login flick games
A flick games permite que você baixe jogos gratuitos e pagos para seu smartphone,
e para os desenvolvedores permitimos a divulgação do seu projeto.</label>
          <form action="cadastrando.php" method="post">

          <div class="mdl-cell mdl-cell--2-col">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="nome">
              <label class="mdl-textfield__label" for="sample2">Nome:</label>
             </div>
          </div>
          <div class="mdl-cell mdl-cell--2-col">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="sobre">
              <label class="mdl-textfield__label" for="sample2">Sobrenome:</label>
            </div>
          </div>
            <p></p>
          <div class="mdl-cell mdl-cell--2-col">  
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="email">
              <label class="mdl-textfield__label" for="sample1">Email:</label>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--2-col">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" name="senha">
              <label class="mdl-textfield__label" for="sample2">Senha:</label>
            </div>
            </div>
              <div class="mdl-cell mdl-cell--2-col"> 
                <div class="mdl-selectfield mdl-js-selectfield">
                    <select class="mdl-textfield__input" name="tipo">
                      <option value="" disabled selected>Tipo de acesso</option>
                      <option value="1">Jogador</option>
                      <option value="1">Desenvolvedor</option>
                    </select>
                </div>
              </div>  
              <div class="mdl-cell mdl-cell--2-col">
                <div class="mdl-selectfield mdl-js-selectfield">
                    <select class="mdl-textfield__input" name="sexo">
                      <option value="" disabled selected>Sexo</option>
                      <option value="1">Masculino</option>
                      <option value="2">Feminino</option>
                      <option value="3">Outros</option>
                    </select>
                </div>
              </div>
              <div class="mdl-cell mdl-cell--2-col"> 
                <div class="mdl-selectfield mdl-js-selectfield">
                    <select class="mdl-textfield__input" name="pais">
                      <option value="" disabled selected>Selecione o páis</option>
                      <option value="1">Islováquia</option>
                      <option value="2">Cazaquistão</option>
                      <option value="3">Páis das maravilhas</option>
                    </select>
                </div>
              </div>  

              <div class="mdl-cell mdl-cell--2-col"> 
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                    <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" name="termo">
                    <span class="mdl-checkbox__label">Concordo com os termos de uso e política de privacidade</span>
                  </label>
              </div>

              <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Cadastrar
              </button>
          </form>	
        </div>
      </div>
        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section"></div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Voltar ao topo
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>
          <div class="mdl-mega-footer__middle-section">
            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">Características</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="#">Sobre</a></li>    
              </ul>
            </div>
            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">Detalhes</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="#">Termos de uso</a></li>
              </ul>
            </div>
            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">Perguntas frequentes</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="#">Perguntas frequentas</a></li>
                <li><a href="#">Nosso contato</a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
