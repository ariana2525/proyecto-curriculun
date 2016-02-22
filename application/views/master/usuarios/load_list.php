<div class="panel-form">
  


<div class="box">
   <div class="box-header">
      <div class="pull-right">
          <a href="<?php echo base_url($controller.'/create') ?>" class="btn btn-info"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
      </div>
   </div>

 </div>

 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Listado de Usuarios</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      for ($i=0; $i < 10; $i++){
                      ?>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>
                          <a href="<?php echo base_url($controller.'/edit') ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                          <a href="<?php echo base_url($controller.'/destroy') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                      </tr>
                    <?php } ?> 
                         
                       
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
</div><!-- /.box -->

</div>