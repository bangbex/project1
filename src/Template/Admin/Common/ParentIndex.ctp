<?php
    use Cake\Utility\Inflector;
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
    
   $aliasName = ($this->Blocks->get('judul') == '')?$this->name:$this->Blocks->get('judul');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small><?php echo $this->request->params['action'];?></small>
        <?php echo $aliasName?>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>
            <?php echo $this->Html->link($aliasName, ['controller'=>$this->name,'action'=>'index']);?>
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
              <?php 
                echo $aliasName;
              ?>
              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                
              <?php echo $this->fetch('content');?>  
              
            </div>
            <!-- /.box-body -->
            
            <div class="box-footer clearfix">
            
            
            <?php
                
                echo $this->Html->link('<button type="button" class="btn btn-default">Tambah '. $aliasName.' Baru</button>', ['controller' => $this->name, 'action' => 'add'],['escape'=>false]);
            
            ?>
                <ul class="pagination pagination-sm no-margin pull-right">
                    <?= $this->Paginator->first('&laquo;') ?>
                    <?= $this->Paginator->prev('<') ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next('>') ?>
                    <?= $this->Paginator->last('&raquo;') ?>
                </ul>
                <br />
            </div>
            <div class="box-footer clearfix">
             <p class="pull-right"><?= $this->Paginator->counter(['format' => __('hal {{page}} / {{pages}}, menampilkan {{current}} data dari {{count}} data')]) ?></p>
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