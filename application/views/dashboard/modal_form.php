 <form id="update-form" class="form" action="" method="post">
                    <?php foreach($cita as $value){?>   
                    <input type="hidden" value="<?php echo $value['id_cita'];?>" name="id" >
                            <div class="form-group">
                                <label for="username" class="text-info">Nombre:</label><br>
                                <input type="text" name="nombre" id="nombre" class="required" value="<?php echo $value['nombre'];?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Apellido:</label><br>
                                <input type="text" name="apellido" id="apellido" class="required" value="<?php echo $value['apellido'];?>">
                            </div>
                                <div class="form-group">
                                <label for="password" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="required" value="<?php echo $value['email'];?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Telefono:</label><br>
                                <input type="tel" name="telefono" id="Telefono" class="required" value="<?php echo $value['telefono'];?>">
                            </div>
                               <div class="form-group">
                                <label for="password" class="text-info">Estado:</label><br>
                                <select name="estado">
                                  <option value="captura">Captura:</option>
                                  <option value="pendiente">Pendiente</option>
                                  <option value="sin contactar">Sin contactar</option>
                                </select>
                            </div>
                        <?php } ?>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="update_user2()" >Save changes</button>
     
                     </form>

<script type="text/javascript">
function update_user2()
{
      var url = "<?php echo site_url();?>/Dash_userinfo/update_userinfo";
      $.ajax({
    type:"POST",
    url: url,
    data:$('#update-form').serialize(),
    success : function(data)
    {
      if(data!=0)
      {
        alert('Actulizacion exitosa');
        location.href='<?php echo site_url();?>/Dashboard/catalogo_view';

      }
      else{
        alert('laca');
      }
    }

      });
}
</script>