<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
    $this->loadHelper('Form', ['templates'=>'admin_form']);

    $aliasName = ($this->Blocks->get('judul') == '')?$this->name:$this->Blocks->get('judul');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Tambah</small>
        <?php echo $aliasName;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>
            <?php echo $this->Html->link($aliasName, ['controller'=>$this->name,'action'=>'index']);?>
        </li>
        <li class="active">Tambah</li>
      </ol>
    </section>

    <div class="pad margin no-print">
        <?= $this->Flash->render() ?>
    </div>

    <!-- Main content -->
    
  
    <section class="content">
    
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <?php echo $aliasName;?>
              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php echo $this->fetch('content');?>  
              
              
            </div>
            <!-- /.box-body -->
            
            
            
            
            
          </div>
          <!-- /.box -->
        </div>
      </div>
    
    </section>
   
    
    

    <!-- /.content -->
    
    
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->

 