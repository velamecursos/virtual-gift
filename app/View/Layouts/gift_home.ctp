<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
                
                echo $this->Html->css('cake.generic');
                echo $this->Html->css('style');
                
                
                echo $this->Html->script('jquery/jquery-1.8.2.min');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
         <link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css"/>
         <script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
         <script>
            $(function(){
                $(".link-popup").colorbox({ inline:true, fixed:true });
            });
        </script>
</head>
<body>
    <div id="wrapper">
    
    	<!--pop-up--> 
        <div style="display:none">
            <div class="popup" id="popup"> 
                <h2>Entre através da sua conta</h2>
                <p>Escolha a sua rede social abaixo, faça parte dessa comunidade<br>e envie seu presente aos seus amigos.</p>
                <div class="col-esq">
                    <a href="https://www.facebook.com/dialog/oauth?client_id=231831316938829&redirect_uri=http%3A%2F%2Fwww.chicletecombanana.com.br%2F2012%2Ftop-chicleteiro.php&state=187127de097ef0cfa804e28eccecc2f9" class="box-rede box-rede-facebook col-esq"></a>
                    <br>
                    <a href="https://www.facebook.com/dialog/oauth?client_id=231831316938829&redirect_uri=http%3A%2F%2Fwww.chicletecombanana.com.br%2F2012%2Ftop-chicleteiro.php&state=187127de097ef0cfa804e28eccecc2f9" class="box-rede box-rede-twitter col-esq"></a>
                </div>
                <div class="col-esq box-div"></div>
                <div class="col-dir">
                	<form class="form" action="amigos.html">
                    	<input class="campo required email" type="text" placeholder="email"/>
                        <input class="campo" type="password" placeholder="senha"/>
                        <br class="clr"/>
                        <input class="bt-enviar" type="submit" value="Acessar"/>
                    </form>
                </div>
            </div>
        </div>
		<!--fim-pop-up--> 
    
    
    	<div class="content">
        	<?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            
        </div>
        
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
