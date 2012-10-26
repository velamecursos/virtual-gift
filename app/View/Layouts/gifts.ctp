<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE HTML>

<html class="no-js" lang="pt-br">

<!--Head-->
<head>	
	<title>Caixa de Presente</title> 
        <?php
            
            echo $this->Html->charset();
            echo $this->Html->css('cake.generic');
            echo $this->Html->css('presente');
     
        ?>

</head>
<!--Fim-Head-->

<body>

    <div id="wrapper">
	
    	<div class="content">
        	
            <!--Header-->
        	<header id="header">            	
                <div class="content">
                	<div class="col-esq">
                   	  <section class="section-presenteado">
                        	<h1>Amigo <span>Presenteado</span></h1>
                            <figure>
                            	<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-prn1/157512_100002257357924_1727913026_q.jpg" alt=""/>
                            </figure>
                            <div class="nome">Fábio Maia</div>
                        </section>
                    </div>          
                	<div class="col-dir">      
                        <section class="section-perfil section-perfil-logado">
                        	<div class="box-perfil col-esq">
                            	<div class="nome-perfil">Michel Felipe</div>
                            </div>
                            <div class="col-dir">
                            	<figure class="figure">
                                	<img src="http://a0.twimg.com/profile_images/2572722248/uv7idgy8aj7v85t2pnbw_bigger.jpeg" alt=""/>
                                </figure>
                            </div>
                        </section>  
                        <h1 class="titulo"><img src="img/tit-caixa-presente.png" alt="caixa de presente"/></h1>          
                    </div>
                </div>                
            </header>
            <!--Fim-Header-->
            
            <!--Col-Esq-->
            <div class="col-esq">
                <section class="section-presentes">                   
                    <div class="bg">
                        <div class="box-presentes">
                            
                                    <?php 
         
            if(!empty($allGifts)){
                $html = '<table>';
           //     $html .= '<th>Titulo</th>';
           //     $html .= '<th>Edição</th>';
           //     $html .= '<th>Ano</th>';
                
                foreach($allGifts as $gift){
                    $html.= '<tr>
                                <td>'.$gift['Gift']['id'].'</td>
                                <td>'.$gift['Gift']['description'].'</td>
                               
                             </tr>';
                      //echo $this->Html->link('Edit', array('action' => 'edit', $book['Book']['id'])); 
                }
                $html.='</table>';
                

                echo $html;
            }  
        ?>
                            <img src="img/presente01.jpg" alt=""/>
             
                        </div>
                    </div>             
                </section>
            </div>
            <!--Fim-Col-Esq-->
            
            <section class="section-caixa-presente">
                
            </section>            
            
            <!--Col-Dir-->
            <div class="col-dir">
            
                <section class="section-txt-info">            
                    <div class="bg-txt"></div> 
                </section>
                
                <section class="section-mensagem">
                	
                    <form class="form" action="">
                    	<input class="campo required" type="text" placeholder="nome"/>
                        <input class="campo required email" type="text" placeholder="email"/>
                        <textarea placeholder="mensagem"></textarea>
                        <br class="clr"/>
                        <input class="bt-enviar" type="submit" value=""/>
                    </form>
                    
                </section>
                
                <section class="section-compartilhar">
                    <div class="box-compartilhar">
                        <a href="" class="ico ico-facebook"></a>
                        <a href="" class="ico ico-twitter"></a>
                        <a href="" class="ico ico-google"></a>
                    </div>
                </section>
            
            </div>
        	<!--Fim-Col-Dir-->
        
        </div>
        
        <!--Footer-->
        <footer id="footer">
        
        </footer>
        <!--Fim-Footer-->
    
    </div>

</body>
</html>