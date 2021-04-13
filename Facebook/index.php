<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="icon" href="Imagens/facebook.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>


    <header>
        <nav>

            <a href="index.html"><img src="Imagens/face.logo.jpg" id="logo" alt="Facebook"></a>
            
                <ul id="loginul">
                
                    <li><p class="title">E-mail ou Telefone</p>
                    <input class="input" type="text">
                    <br>

                    <p id="conectado"><input id="check" type="checkbox">Permanecer Conectado</p></li>
                    <li><p class="title">Senha</p>
                    <input class="input" type="password">
                    <br>
                    <a href="#" id="forgot">Esqueceu sua Senha?</a></li>

                    <button id="navbutton" >Entrar</button>
                
                </ul>
        
        </nav>
    </header>

    <main>

        <section id="sec1">
            <b><p id="p1">No Facebook você pode se conectar e compartilhar 
            o que quiser com quem é importante em sua vida.</p></b>

            <img src="Imagens/pessoas.jpg" id="pessoas" alt="">
        </section>

        <section id="sec2">
            <b><h1 id="h1">Abra uma conta</h1></b>
            
            <p id="p2">É gratuito e sempre será.</p>

        <form action="cadastro.php" method="POST">

            <input class="inputcad" type="text" placeholder="Nome" name="nome" required>
            
            <input class="inputcad" id="sobrenome" type="text" placeholder="Sobrenome" name="sobrenome" required>
            
            <br>

            <input class="inputcad2" type="text" placeholder="E-mail ou número do celular" name="emailtel" required>
            
            <br>
            <input class="inputcad2" type="text" placeholder="Insira Novamente o e-mail ou número do celular" name="emailtelconfirm" required>
            
            <br>
            <input class="inputcad2" type="password" placeholder="Nova Senha" name="senha" required>

            <p id="p3">Aniversário</p>

            <select id="diacad" class="anivcad">
                <option>Dia</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select id="mescad" class="anivcad">
               <option>Mês</option>
               <option value="Janeiro">Janeiro</option>
               <option value="Fevereiro">Fevereiro</option>
               <option value="Marco">Março</option>
               <option value="Abril">Abril</option>
               <option value="Maio">Maio</option>
               <option value="Junho">Junho</option>
               <option value="Julho">Julho</option>
               <option value="Agosto">Agosto</option>
               <option value="Setembro">Setembro</option>
               <option value="Outubro">Outubro</option>
               <option value="Novembro">Novembro</option>
               <option value="Dezembro">Dezembro</option>
            </select>

            <select id="anocad" class="anivcad">
                <option>Ano</option>
                <option value="">1985</option>
                <option value="">1986</option>
                <option value="">1987</option>
                <option value="">1988</option>
                <option value="">1989</option>
                <option value="">1990</option>
                <option value="">1991</option>
                <option value="">1992</option>
                <option value="">1993</option>
                <option value="">1994</option>
                <option value="">1995</option>
                <option value="">1996</option>
                <option value="">1997</option>
                <option value="">1998</option>
                <option value="">1999</option>
                <option value="">2000</option>
                <option value="">2001</option>
                <option value="">2002</option>
                <option value="">2003</option>
                <option value="">2004</option>
                <option value="">2005</option>
                <option value="">2006</option>
                <option value="">2007</option>
                <option value="">2008</option>
                <option value="">2009</option>
                <option value="">2010</option>
                <option value="">2011</option>
                <option value="">2012</option>
                <option value="">2013</option>
                <option value="">2014</option>
                <option value="">2015</option>
                <option value="">2016</option>
                <option value="">2017</option>
                <option value="">2018</option>
                <option value="">2019</option>
                <option value="">2020</option>
                <option value="">2021</option>
         </select>
         <br>

         <input type="radio" class="genero" name="sexo" value="F" required>Feminino
         <input type="radio" class="genero" name="sexo" value="M" id="masc" required>Masculino

         <p id="termos">Ao clicar em abrir uma conta, 
             você concorda com <a>nossos Termos</a> e que leu nossa <a>Política de Dados</a>, 
             incluindo o nosso <a>Uso de Cookies</a>.</p>

         <input id="abrirconta"  type="submit" value="Abrir uma conta">

        </form>
        
        <hr id="hr1">
        
        <p id="criar"><a>Criar uma página</a> para uma celebridade, banda ou empresa.</p>

        </section>
        
    </main>

    <footer>
        <section id="sec3">
            <a href="#"><p>Português(Brasil)</p></a>
            <a href="#"><p>English(US)</p></a>
            <a href="#"><p>Espanõl</p></a>
            <a href="#"><p>Français(France)</p></a>
            <a href="#"><p>Italiano</p></a>
            <a href="#"><p>Deutsch</p></a>
            <a href="#"><p>Japanese</p></a>
        </section>
    
        <hr id="hr2">

        <section id="sec4">
            <a href="#"><p>Cadastre-se</p></a>
            <a href="#"><p>Entrar</p></a>
            <a href="#"><p>Messenger</p></a>
            <a href="#"><p>Facebook Lite</p></a>
            <a href="#"><p>Celular</p></a>
            <a href="#"><p>Encontrar amigos</p></a>
            <a href="#"><p>Atalhos</p></a>
            <a href="#"><p>Pessoas</p></a>
            <a href="#"><p>Páginas</p></a>
            <a href="#"><p>Locais</p></a>
        </section>    
            
        <section id="sec5">    
        <a href="#"><p>Jogos</p></a>
        <a href="#"><p>Locais</p></a>
        <a href="#"><p>Sobre</p></a>
        <a href="#"><p>Criar anúncio</p></a>
        <a href="#"><p>Criar Página</p></a>
        <a href="#"><p>Desenvolvedores</p></a>
        <a href="#"><p>Carreiras</p></a>
        <a href="#"><p>Privacidade</p></a>
        <a href="#"><p>Cookies</p></a>
        <a href="#"><p>Opções de Anúncio</p></a>
        
        </section>

        <section id="sec6">
            <a href="#"><p>Termos</p></a>
            <a href="#"><p>Ajuda</p></a>
        </section>
    </footer>

</body>
</html>