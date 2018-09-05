<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/dashboard/bootstrap-wysihtml5.css" />
<link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url();?>/Dashboard/dashboard_view">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"><a href="<?php echo site_url();?>/Dashboard/dashboard_view" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?php echo site_url();?>/Dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="<?php echo site_url();?>/Dashboard/charts_view"><i class="icon icon-signal"></i> <span>Tablas &amp; graficas</span></a> </li>
    <li> <a href="widgets.html"><i class="icon-user"></i> <span>Nuevos usuarios</span></a> </li>
    <li><a href="<?php echo site_url();?>/Dashboard/calendar_view"><i class="icon-calendar"></i> <span>Calendario</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>???</span></a></li>
    <li class="submenu"> <a href="<?php echo site_url();?>/Dashboard/propiedades_view?>"><i class="icon icon-home"></i> <span>Propiedades</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Propiedades en venta</a></li>
        <li><a href="form-validation.html">Propiedades Vendidas</a></li>
        <li><a href="form-wizard.html">Propiedades caputradas</a></li>
      </ul>
    </li>
    <li><a href="<?php echo site_url();?>/Dashboard/catalogo_view"><i class="icon-user"></i> <span>Catalogo de usuarios</span></a></li>
    <li><a href="<?php echo site_url();?>/Dashboard/registroprop_view"><i class="icon icon-pencil"></i> <span>Registro de propiedades</span></a></li>
    <!--<li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>-->
    <!--<li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>-->
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Common Form Elements</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo site_url();?>/Dash_regprop/Insert_prop" enctype="multipart/form-data" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nombre de la propiedad :</label>
              <div class="controls">
                <input type="text" name="nombre" class="span11" placeholder="Nombre :" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Area del terreno :</label>
              <div class="controls">
                <input type="text" class="span11" name="area" placeholder="Area :" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Habitaciones :</label>
              <div class="controls">
                <input type="text" name="habitaciones"  class="span11" placeholder="Numero de habitaciones :"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Direccion :</label>
              <div class="controls">
                <input type="text" name="direccion" class="span11" placeholder="Direccion :" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ubicacion :</label>
              <div class="controls">
                <input type="text" name="ubicacion" placeholder="Ubicacion :" class="span11" />
                <span class="help-block">Description field</span> </div>
            </div>
                <div class="control-group">
              <label class="control-label">Radio inputs</label>
              <div class="controls">
                <label>
                  <input type="radio" name="tipo" value="casa" />
                  casa</label>
                <label>
                  <input type="radio" name="tipo"  value="terreno"/>
                  terreno</label>
                <label>
                  <input type="radio" name="tipo"  value="edificio"/>
                  edificio</label>
              </div>
            </div>
            
               <div class="control-group">
              <label class="control-label">Imagen 1</label>
              <div class="controls">
                <input type="file" name="userfile" />
              </div>
            </div>
                  <div class="control-group">
              <label class="control-label">Imagen 2</label>
              <div class="controls">
                <input type="file" name="userfile1" />
              </div>
            </div>
                  <div class="control-group">
              <label class="control-label">Imagen 3</label>
              <div class="controls">
                <input type="file" name="userfile2" />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save">
            </div>
          </form>
        </div>
      </div>
      
  
     
        


  </div>
                  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Nombre propiedad</th>
                  <th>Tipo propiedad</th>
                  <th>Area</th>
                  <th>Habitaciones</th>
                  <th>direccion</th>
                  <th>ubicacion</th>
                  <th>img</th>
                  <th>img2</th>
                  <th>img3</th>
                </tr>
              </thead>
              <
                
                <?php foreach($query as $value): ?>
                <tr class="gradeX">
                  <td><?php  echo $value['id_propiedad'];?></td>
                  <td><?php  echo $value['nombre_prop'];?></td>
                  <td><?php  echo $value['tipo_propiedad'];?></td>
                  <td><?php  echo $value['area_terreno'];?></td>
                  <td><?php  echo $value['total_habitaciones'];?></td>
                  <td><?php  echo $value['direccion'];?></td>
                  <td><?php  echo $value['ubicacion'];?></td>
                  <td><?php  echo $value['img_galeria'];?></td>
                  <td><?php  echo $value['img_galeria2'];?></td>
                  <td><?php  echo $value['img_galeria3'];?></td>
                  <td><a href="<?php echo site_url();?>/Dash_regprop/delete_property?id=<?php  echo $value['id_propiedad'];?>">Delete</a><td>
                </tr>
                <?php  endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part--> 
<script src="<?php echo base_url();?>js/dashboard/jquery.min.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/masked.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/select2.min.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/matrix.js"></script> 
<!--<script src="<?php echo base_url();?>js/dashboard/wysihtml5-0.3.0.js"></script>--> 
<script src="<?php echo base_url();?>js/dashboard/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>js/dashboard/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
