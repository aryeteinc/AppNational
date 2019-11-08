<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email National<?= date('Y')?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <style type="text/css">
        #cabecera{
            background-color:#265275;
            position:relative;
            color:#FEFEFE;
            padding:2rem 3rem 2rem 3rem;
            margin:-8px;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size:20px;  
            display:block;
            width:100%;
        }

        #cabecera div{
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            font-size:18px;
        }

        #piecera{
            background-color:#222F42;
            position:relative;
            color:#F8F9FB;
            padding:2rem 3rem 2rem 3rem;
            margin:-8px;
            font-family: 'Roboto', sans-serif;            
            font-size:18px;  
            display:block;
            width:100%;
            text-align:center;
        }

        .salto{
            padding-top: 50px;
        }

        .contenido{   
            justify-content:left;
            border: 1px solid #D3DAE2;
            padding:2rem;
            margin: 1rem 3rem 0rem 3rem;
            border-radius: 5px;
            text-align:left;
            position:relative;
            left:0px;             
            width:50%; 
            overflow:hidden;
            /*transform:translateX(20%);*/
        }

        .clearIzq{
            clear:right;
            display:block;
        }

        .encabezado{ 
            border: 1px solid #D3DAE2;
            border-radius: 5px;
            padding:0.2rem 2rem 0.2rem 2rem;
            margin:auto;
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-size:22px;
            color:#3C485B;       
        }

        .parrafo{
            border: 1px solid #D3DAE2;
            border-radius: 5px;
            padding:0.2rem 2rem 0.2rem 2rem;               
            margin-right:auto;
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-size:18px;
            color:#6B7688;               
        }

        .parrafobold{
            border: 1px solid #D3DAE2;
            border-radius: 5px;
            padding:0.2rem 2rem 0.2rem 2rem;               
            margin-right:auto;
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size:18px;
            color:#3C485B;                  
        }

        .total{
            float:right; 
            position:static;
        }

        .total ul{
            list-style: none;
        }
        
        .total ul>li{
            text-align:right;
        }

        .totalLabel{            
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-size:18px;
            color:#6B7688;
        }

        .totalPrice{            
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size:18px;
            color:#6AAD47;
        }

        .coach{
            color:#3C485B;
        }

        .parrafo-small{
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-style:italic;
            font-size:15px;
            color:#6B7688;    
            display:inline; 
        }

        .parrafo1{
            border: 1px solid #D3DAE2;
            border-radius: 5px;
            padding:0.2rem 2rem 0.2rem 2rem;               
            margin-right:auto;
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-size:18px;
            color:#6B7688; 
            display:inline-block;
            
        }

        .email{
            border: 1px solid #D3DAE2;
            border-radius: 5px;
            padding:0.2rem 2rem 0.2rem 2rem;               
            margin-right:auto;
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-size:18px;
            color:#6B7688;        
        }

        .email>a, a:hover{            
            color:#2B5C93;
        }

        

        /* Extra small devices portrait phones, less than 576px
        No media query for `xs` since this is the default in Bootstrap*/

        /* Extra small devices (portrait phones, less than 576px)*/
        @media (max-width: 575.98px) {

        .contenido{   
            justify-content:left;
            border: 1px solid #D3DAE2;
            padding:1rem;
            margin: 1rem 1rem 0rem 1rem;
            border-radius: 5px;
            text-align:left;
            position:relative;
            width:90%;            
            /*transform:translateX(20%);*/
        }

        .email{
            border: 1px solid #D3DAE2;
            border-radius: 5px;
            padding:0.2rem 0.5rem 0.2rem 2rem;               
            margin-right:auto;
            font-family: 'Roboto', sans-serif;
            font-weight: medium;
            font-size:14px;
            color:#6B7688; 
            display:inline; 
            float:right;   
        }
            /*#cabecera{
                background-color:#265275;
                position:relative;
                color:#FEFEFE;
                padding:1rem 1.5rem 1rem 1.5rem;
                margin:-8px;
                font-family: 'Roboto', sans-serif;
                font-weight: bold;
                font-size:15px;   
            }

            #cabecera div{
                font-family: 'Roboto', sans-serif;
                font-weight: normal;
                font-size:12px;
            }

            .contenido{            
                display:flex;
                justify-content:center;
                border: 1px solid #D3DAE2;
                padding:0.5rem;
                margin: -1rem 1.2rem 0rem 1.2rem;
                border-radius: 5px;
                text-align:left;
                position:relative;
                height:600px; 
                z-index: -1;               
            }

            .contenido>.nameSchool{                
                border: 1px solid #D3DAE2;
                border-radius: 5px;
                padding:0rem;
                margin:0rem;                
                font-family: 'Roboto', sans-serif;
                font-weight: medium;
                font-size:14px;
                color:#3C485B;  
                position:absolute;
                top:2rem;
                left:0px;
                
            }

            .contenido>.addressSchool{
                border: 1px solid #D3DAE2;
                border-radius: 5px;
                padding:0rem;               
                margin:0rem;
                font-family: 'Roboto', sans-serif;
                font-weight: medium;
                font-size:12px;
                color:#6B7688;                
                position:absolute;
                top:3.2rem;
                left:0px;  
                
            }

            .salto{
                padding-top: 10px;
            }*/
        }

        /* Small devices landscape phones, 576px and up*/
        @media (min-width: 576px) {

        }

        /* Medium devices tablets, 768px and up*/
        @media (min-width: 768px) {

        }

        /* Large devices desktops, 992px and up*/
        @media (min-width: 992px) {

        }

        /* Extra large devices large desktops, 1200px and up*/
        @media (min-width: 1200px) {

        }
    </style>
</head>
<body>
    <div id="cabecera">
        National Academic Championship
        <div>Receip For:</div>
    </div> 

    <div class="contenido">
        <div class="encabezado">
            {SchoolName}
        </div>
        <div class="parrafo">
            {SchoolAddress}
        </div>
        <div class="salto"></div>
        <div>
            <span class="encabezado">{Coach}</span><span class="parrafo-small"> Coach</span>
        </div>        
        <div class="parrafo">
            <span>{Cellphone}</span>  <span class="email"><a href="#">{Email}</a></span>
        </div> 
        <div class="parrafo">
            <span>{SchoolCity}</span>  <span>{SchoolState}</span>  <span>{SchoolZip}</span>
        </div> 
        <div class="parrafo">
            <span>{Location}</span>  <span>{dateLocation}</span>
        </div> 
        <div class="parrafo">
            <span>{Level}</span>
        </div>
        <div class="salto"></div>

        <div class="parrafo">
            <span class="parrafobold">First Day :</span>  <span>{FirstDay}</span> 
        </div>
        <div class="parrafo">
            <span class="parrafobold">Second Day :</span>  <span>{SecondDay}</span> 
        </div>
        <div class="parrafo">
            <span class="parrafobold">Estimated Arrive :</span>  <span>{EstimatedDate}</span> 
        </div>

        <div class="salto"></div>
        <div >
            <div class="total" >
                <ul>
                    <li>
                        <div class="totalLabel">Total Price:  
                            <span class="totalPrice">$ 800.00</span>
                        </div>
                    </li>
                    <li>
                    <div class="totalLabel">Discount:  
                            <span class="">$ 0.00</span>
                        </div>
                    </li>
                    <li>
                        <div class="totalLabel">Method Pyment:  
                            <span class="">MethodPayment</span>
                        </div>
                    </li>                    
                </ul>                
            </div>
        </div>
        <div class="salto"></div>
        <span class="clearIzq">A=Adult, S=Student, M=Male, F=Female</span>
        <hr class="clearIzq">
        
    </div>

    <div id="piecera">
        <div>National Academic Championship</div>
        <div>National Academic Association</div>
        <div>10688 S.Dimple Dell Dr.</div>
        <div>Sandy, UT 84092</div>
        <div>Tel: (801)-699-3424</div>        
    </div> 
    
</body>
</html>