<?php
    use Cake\Utility\Inflector;
?>
<?php
/**
 * @var \App\View\AppView $this
 */
    
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small><?php echo $this->request->params['action'];?></small>
        Dashboard
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>
            <?php echo $this->Html->link('Dashboard', ['controller'=>$this->name,'action'=>'index']);?>
        </li>
        <li class="active"><?php echo $this->request->params['action'];?></li>
      </ol>
    </section>

    <div class="pad margin no-print">
        <?php echo $this->Flash->render(); ?>
    </div>

    <!-- Main content -->
  
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              Dashboard
              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                
                    this is dashboard
              
            </div>
            <!-- /.box-body -->
            
            <div class="box-footer clearfix">
            
            
            </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    
    </section>
    <!-- /.content -->
    
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->