<html>
    <head>   
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <style>
            
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
                margin: 0px auto;
                width:50%;
                justify-content:center;  
                border: 1px solid #265275;  
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);        
                }

            #cabecera div.texto{
                font-family: 'Roboto', sans-serif;
                font-weight: normal;
                font-size:18px;
            }

            .tabla{                      
                margin: 0px auto;
                width:50%;
                border: 1px solid black;
                padding:2rem 3rem 2rem 3rem;
                
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
                align-items: center;
                text-align:center;
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
            

            @media screen and (max-width: 500px) {
                #cabecera{                       
                    background-color:#265275;        
                    color:#FEFEFE;
                    padding:auto;        
                    font-family: 'Roboto', sans-serif;
                    font-weight: bold;
                    font-size:20px;                 
                    margin: 0px auto;
                    width:100%;
                    justify-content:center;  
                    border: 1px solid #265275;  
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);        
                }
                .tabla{                      
                    margin: 0px auto;
                    width:100%;
                    border: 1px solid black;
                    padding:auto;
                    
                }
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

                .footer{               
                    align-items: center;
                    text-align:center;
                    background-color:#222F42;            
                    color:#F8F9FB;
                    padding:auto;
                    margin:0px auto auto 0px;
                    font-family: 'Roboto', sans-serif;            
                    font-size:18px;             
                    width:100%;
                    border: 1px solid #222F42; 
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
                }
            
            }
        </style>
    </head>
    
    <body>
    <div id="cabecera">
        <div>National Academic Championship</div>        
        <div class="texto">Receip For:</div>
    </div>
    <div class="tabla">
        <table>
            <tr><td class="encabezado">{SchoolName}</td></tr>
            <tr><td class="parrafo">{SchoolAddress}</td></tr>
            <tr><td class="parrafo">{Coach}</td><td class="coach">Coach</td></tr>
            <tr>
                <td class="parrafo">{Cellphone}</td>
                <td class="email"><a href="#">{Email}</a></td>
            </tr>
            <tr>
                <td class="parrafo">{SchoolCity}</td>
                <td class="parrafo">{SchoolState}</td>
                <td class="parrafo">{SchoolZip}</td>
            </tr>
            <tr>
                <td class="parrafo">{Location}</td>
                <td class="parrafo">{dateLocation}</td>
            </tr>
            <tr>
                <td class="parrafo">{Level}</td>
            </tr>
            <tr>
                <td class="parrafobold">Scheduled :</td>
                <td class="parrafo">{FirstDay}</td>
            </tr>
            <tr>
                <td class="parrafobold">Estimated Arrive :</td>
                <td class="parrafo">{EstimatedDate}</td>
            
            <tr><td class="totalLabel">Total Price:</td> <td class="totalPrice">{price}</td></tr>
            <tr><td class="totalLabel">Discount:</td> <td>$0.00</td></tr>
            <tr><td class="totalLabel">Method Pyment:</td> <td>{MethodPyment}</td></tr>
        
            {Crew}
                <tr>
                    <td class="parrafo">{name}</td>
                    <td class="parrafo">{kind}</td>
                    <td class="parrafo">{gender}</td>
                </tr>  
            {/Crew} 
        </table>
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
