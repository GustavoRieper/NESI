<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/contato.css">
    <script src="js/maps.js"></script>
        <style>
            .slogan{
                display: flex;
                flex-wrap: nowrap!important;            
                margin-bottom: 10px!important;
            }
            .slogan img{
                width: 282px !important;
                height: auto !important;
            }
            .slogan h1{
                display: flex!important;
                font-size: 35px!important;
                text-align: center;
                flex-wrap: nowrap!important;
            }    
            #row2{
                margin-left: 6px!important;
            }
            .contact{
                margin-left: 0% !important;
            }
        
        </style>
    </head>
    <?php include 'menu.php'; ?>
    <?php include 'slogan.php'; ?>   
    <body class="contatoBody">
        <div class="box1">
            <div class="contato">
                <h1>Entre em contato conosco</h1>
                <h2>Nome:<input type="text" name="Inome" placeholder=" Seu Nome" ></h2>
                <h2>E-mail:<input type="email" name="Iemail" id="" placeholder=" seu@email.com" ></h2>
                <h2>Mensagem:</h2>
                <textarea name="Tmensagem" id=""  placeholder=" Mensagem" ></textarea><br>
                <button>Enviar</button>
            </div>  

            <div class="localizacao">
                <h1>Rua Princesa Isabel, 438, Centro - Joinville - SC - CEP 89.201-270.</h1><br>
                <div id="mapa"></div>
            </div>
        </div>
        <?php include 'rodape.php'; ?>         
    </body>    
</html>