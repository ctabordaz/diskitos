<?php /* Smarty version Smarty-3.0.9, created on 2015-06-03 17:12:45
         compiled from "C:/wamp/www/diskitos/templates\buscarediciones.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29802556f196d28f459-03975618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e72fd05b38b95196c018d0ad2dc803e7ffd6aa6' => 
    array (
      0 => 'C:/wamp/www/diskitos/templates\\buscarediciones.tpl',
      1 => 1433344362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29802556f196d28f459-03975618',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body <?php if (isset($_smarty_tpl->getVariable('cargar',null,true,false)->value)){?>onload="<?php echo $_smarty_tpl->getVariable('cargar')->value;?>
"<?php }?>>            
    <div class="container">    
        <br><br><br><br>    
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 


            <div class="panel panel-default" >
                <div class="panel-heading">
                    <div class="panel-title text-center">Buscar Edición:</div>
                </div>     

                <div class="panel-body" >

                    <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->getVariable('gvar')->value['l_global'];?>
buscarediciones.php?option=consultar" method="POST">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-text-size"></i></span>
                            <input id="palabra" type="text" class="form-control" name="palabra" value="" placeholder="Titulo, Autor o Cancion" required>                                        
                        </div>                                                               

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <input type="submit" class="btn btn-primary pull-right" value="Buscar" name="Buscar">                         
                            </div>
                        </div>

                    </form>     

                </div>                     
            </div>  
        </div>
    </div>
</body>
 