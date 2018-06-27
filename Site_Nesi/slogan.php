<head>
    <style>
    .slogan{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
            transition: all 0.5s;
            width: 80%;
            margin-left: 10%;
        }
        .slogan img{
            width: 453px;
            height: 218px;
            position: relative;
            margin-right: 40px;
            transition: all 0.5s;
        }
        @media only screen and (max-width: 1257px){
            .slogan img{
                width: 300px;
                height: 135px;
                position: relative;
                margin-right: 40px;
                transition: all 0.5s;
            }
            .slogan h1{
                font-family: 'Open Sans', sans-serif;
                font-size: 30px;
                color: #042a4a;
                font-weight: normal;
                width: 40%;
                width: 100%;
            }
        }
        @media only screen and (max-width: 1100px){
            .slogan img{
                width: 300px;
                height: 135px;
                position: absolute;
                margin-left: 40px;
                transition: all 0.5s;
                margin-top: -180px;
            }
            .slogan{
                margin-top: 190px;
            }
            .slogan h1{
                position: relative;
                font-family: 'Open Sans', sans-serif;
                font-size: 30px;
                padding-bottom: 10px;
                color: #042a4a;
                font-weight: normal;
                width: 40%;
                width: 100%;
                text-align: center;
                transition: all 0.5s;
            }
            .contact{
                text-align: center!important;
                width: 100%!important;
                margin-left: 0px !important;
                transition: all 0.5s;
            }
        }
        .slogan h1{
            font-family: 'Open Sans', sans-serif;
            font-size: 42px;
            color: #042a4a;
            font-weight: normal;
            width: 40%;
            width: 100%;
            transition: all 0.5s;
            margin-top: 0px;
        }
        .slogan h1 #row1{
            padding-left: 20px;
            transition: all 0.5s;
        }
        .slogan h1 #row2{
            margin-left: 115px;
            padding-right: 20px;
        }

        .contact{
            text-align: right;
            width: 80%;
            margin-left: 10%;
            margin-top: -40px;
            font-family: 'Open Sans', sans-serif;
            transition: all 0.5s;
            font-size: 15px;
        }
        #ds_contact{
            text-align: right;
            font-weight: bold;
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
        }
        .contact img{
            width: 17px;
            position: absolute;
            margin-top: 3px;
            margin-left: 5px;
            cursor: pointer;
            transition: all 0.5s;
        }
        .contact img:hover{
            width: 23px;
            margin-top: 0px;
            margin-left: 2px;
            transition: all 0.5s;
            opacity: 0.7;
        }    
    </style>
</head>

<div class="slogan">
    <img src="imagens/Logo_Pantone_RGB.png" title="NESI">
    <h1><span id="row1"></span>|Somos a Inteligência<br><span id="row2">por trás da solução.|</span></h1>
</div>
<div class="contact">
    <span id="ds_contact">Entre em contato conosco:</span><span id="contact"> +55 47 3026 8000 | ielusc@nesi.br |
    <img src="imagens/face.png" title="Página do Facebook"></span>
</div>