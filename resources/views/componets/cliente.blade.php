<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('/css/staly_forms.css')}}">

    <title>Document</title>
</head>
<body>
    
    <!-- dados do cliente -->
   <div id="form_container">
   
   <h1>Cadastro de Cliente<h1>
     
     
      <form>
     <section class="line">
      
      <div class="line_one_obg1" >
           <label>Nome do cliente</label>
            <input type="text">
      </div>

       <div class="line_two_obg2">     
            <label>Tipo:</label>
            <input>
       </div>
       
       <div class="line_three_obg3">
             <label>Status do cliente</label>
            <button name="button">Click me</button>
       </div>
      
                <br><br><section class="line2">

                    <div class="line2_obj1">
                   
                          <label> CNPJ </label>
                          <input>
                    </div>
                    <div class="line2_obj2">      
                          <label> Razão social</label>
                          <input>   
                    </div>
                    
                    <div class="line2_obj3">
                           <label> Indicador de inscrição estadual</label>
                           <input>
                    </div>
               </secton>
               
               <br><br><section class="line3">
                          
                          <div class="line3_obj1">
                          <label> Inscrição estadual</label>
                           <input>
                           </div>

                           <div class="line3_obj2">
                           <label> Inscrição municipal</label>
                           <input></input>
                           </div>

                           <div class="line3_obj3">
                           <label> Inscrição SUFRAMA</label>
                           <input>
                           </div>

                           <div class="line3_obj4">  
                           <label>  Optando pelo SIMPLES</label>
                           <input type="checkbox">
                           </div>
                                   
                      </section> 
                      
                       <br><br><section class="line4">
                               
                               <div class="line4_obj1">
                               <label>  Email principal   </label> 
                               
                               <input>
                               
                               </div>
                               
                               <div class="line4_obj2">
                               <label>  Telefone comercial </label>
                               
                               <input>
                               
                               </div>
                               
                               <div class="line4_obj3">
                               <label>  Telefone celular  </label>
                              
                               <input>
                               
                               </div>
                               
                               <div class="line4_obj4">
                               <label>  Data de fundação  </label>
                               
                               <input>
                              
                               </div>      
                    
                     </section>
                     
                     <br><br><section class"line5">
                              <div class="line5_obj1">
                              <label>Código do cliente</label>
                              <input>
                              </div>
                              
                              <div class="line5_obj2">
                              <label>  Observações </label>
                              <textarea></textarea>
                              </div>
                     
                        </section>  

     </section>
     <section class="bloco_2">
       <h1>Contato dos Clientes</h1>
      
       <!-- contatos cliente -->
       
       <!-- 1 -->
       <div>
       <label> Nome </label>
       <input>
       </div>
       
       <div>
       <label> Email </label>
       <input>
       </div>
      
       <div>
       <label> Fone</label>
       <input>
       </div>
       
       <div>
       <label> Caigo</label>
       <input>
       </div>

      </section>
      <section class="bloco_3">
          <!-- endereco do cliente -->
       
       
       <label> CEP </label>
       <input>
       
       
       <label> Endereço </label>
       <input>
       
      
       <label> Numero </label>
       <input>
      
       <label> Complemento </label>
       <input>
        
       
       <label> Bairro </label>
       <input>
       
       
       <label> Cidade</label>
       <input>
        

       
      </section>
      </form>
   </div>
  
</body>
</html>