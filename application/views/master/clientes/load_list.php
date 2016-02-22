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
                  <h3 class="box-title">Listado de Clientes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                      $_count = count($items);

                      for ($i=0; $i < $_count; $i++){
                      ?>
                      <tr>
                        <td><?php echo $i+1 ?></td>
                        <td><?php echo $items[$i]->nombre ?></td>
                        <td><?php echo $items[$i]->apellidos ?></td>
                        <td><?php echo $items[$i]->dni ?></td>
                        <td>
                          <a href="<?php echo base_url($controller.'/edit/'.$items[$i]->id) ?>" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                          <a href="<?php echo base_url($controller.'/destroy') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                      </tr>
                    <?php } ?> 
                         
                       
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
</div><!-- /.box -->

</div>