<html>
<head>   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<style>
    @media screen and (min-width: 500px) {
        * {
            font-family: 'Roboto', sans-serif;
        }

        #cabecera{
            background-color:#265275;        
            color:#FEFEFE;
            padding:2rem 3rem 2rem 3rem;        
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            font-size:20px;  
            display:flex;  
            flex-direction:column; 
            flex-wrap:wrap;
            margin: 0px auto;
            width:50%;
            justify-content:center;  
            border: 1px solid #265275;  
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);   
        }

        #cabecera div{
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            font-size:18px;
        }
        .main{
            display:flex;        
            margin: auto;
            width:50%;
            border: 1px solid black;
            padding:3rem ;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .contenido{
            display: flex;
            flex-direction:column;
            margin:auto 0px auto 0px;
            width:100%;
            justify-content:flex-start;    
            align-items: left;
            padding:auto 0px auto 0px;
            
        }

        .horizontal{
            display:flex;
            flex-direction:row;
            align-items:baseline;
            /* justify-content:space-evenly; */
        }

        .encabezado{   
            font-weight: medium;
            font-size:22px;
            color:#3C485B;       
        }

        .parrafo{
            font-weight: medium;
            font-size:18px;
            color:#6B7688;
            margin-right:8px;
        }

        .salto{
            padding-top: 50px;
        }

        .coach{
            color:#3C485B;
            font-style:italic;
            
        }

        .total{
            display:flex;                
            flex-direction:column;
            /* border:1px solid black; */
            margin-right:0px;
        }

        .totalitem{
            display:flex;
            justify-content: flex-end;
        }

        .email{          
            font-weight: medium;
            font-size:18px;
            color:#6B7688;        
        }

        .email>a, a:hover{            
            color:#2B5C93;
        }

        .parrafobold{        
            font-weight: bold;
            font-size:18px;
            color:#3C485B;                  
        }

        .totalLabel{    
            font-weight: medium;
            font-size:18px;
            color:#6B7688;
            margin-right:8px;
        }

        .totalPrice{    
            font-weight: bold;
            font-size:18px;
            color:#6AAD47;
        }

        .footer{
            display:flex;
            flex-direction:column;
            justify-content:center;
            flex-wrap:wrap;
            align-items: center;
            background-color:#222F42;            
            color:#F8F9FB;
            padding:2rem 3rem 2rem 3rem;
            margin:auto;
            font-family: 'Roboto', sans-serif;            
            font-size:18px;             
            width:50%;
            border: 1px solid #222F42; 
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
        }
    }

    @media screen and (max-width: 500px) {
        .horizontal{   
            display:flex;         
            flex-direction:column; 
            align-items:baseline;       
        }
        .totalitem{  
            display:flex;           
            justify-content: flex-start;
        }
        .coach{
            display:none;
        }
    }
</style>
<body>
    <div id="cabecera">
        National Academic Championship
        <div>Receip For:</div>
    </div> 

    <div class='main'>
        <div class='contenido'>
            <div class='encabezado'>{SchoolName}</div>
            <div class='parrafo'>{SchoolAddress}</div>

            <div class='salto'></div>
            <div class='horizontal'><div class='encabezado'>{Coach}</div><div class="coach"> Coach</div></div>        
            <div class="horizontal">
                <div class="parrafo">{Cellphone}</div><div class="email"><a href="#">{Email}</a></div>
            </div> 
            <div class="horizontal"><div class="parrafo">{SchoolCity}</div><div class="parrafo">{SchoolState}</div><div class="parrafo">{SchoolZip}</div></div> 
            <div class="horizontal"><div class="parrafo">{Location}</div><div class="parrafo">{dateLocation}</div></div> 
            <div class="horizontal"><div class="parrafo">{Level}</div></div>
            <div class="salto"></div>

            <div class="horizontal"><div class="parrafobold">Scheduled :</div>  <div class="parrafo">{FirstDay}</div></div>            
            <div class="horizontal"><div class="parrafobold">Estimated Arrive :</div> 
                <div class="parrafo">{EstimatedDate}</div>               
            </div>

            <div class="salto"></div>

            <div class="total">
                <div class="totalitem">
                    <div class="totalLabel">Total Price:</div><div class="totalPrice">$ 800.00</div>
                </div>                            
                <div class="totalitem">
                    <div class="totalLabel">Discount:</div><div>$ 0.00</div>
                </div>
                <div class="totalitem">
                    <div class="totalLabel">Method Pyment:</div><div>MethodPayment</div>
                </div>
            </div>  

            <div class="salto"></div>

            <div>
                <div>A=Adult, S=Student, M=Male, F=Female</div>
                <hr>
            </div>            
            {Crew}
                <div class="horizontal">
                    <div class="parrafo">{name}|</div><div class="parrafo">{kind}|</div><div class="parrafo">{gender}</div>
                </div>  
            {/Crew}             
        </div>       
    </div>
    

    
    
    

    <div class="footer">
        <div>National Academic Championship</div>
        <div>National Academic Association</div>
        <div>10688 S.Dimple Dell Dr.</div>
        <div>Sandy, UT 84092</div>
        <div>Tel: (801)-699-3424</div>        
    </div> 
    
</body>
</html>