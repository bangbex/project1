<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artikel $artikel
 */

    $this->extend('/Admin/Common/ParentAdd');
    $this->assign('judul',$judul);
    $this->loadHelper('Form', ['templates'=>'admin_form']);
    $this->Html->css('../admin_assets/bower_components/select2/dist/css/select2.min.css',['block'=>true]);
    
 ?>

    <div class='row'>
    <div class='col-md-6'>
    <?= $this->Form->create($artikel , ['role'=>'form']) ?>
        <?php
            echo $this->Form->control('user_id', ['options' => $users ,'style'=>'width:100%', 'class'=>'form-control select2']);
            echo $this->Form->control('kategoriartikel_id', ['options' => $kategoriartikel ,'style'=>'width:100%', 'class'=>'form-control select2']);
            echo $this->Form->control('title', ['class'=>'form-control']);
            echo $this->Form->control('slug', ['class'=>'form-control']);
            echo $this->Form->control('body', ['class'=>'form-control']);
            echo $this->Form->control('image_path', ['class'=>'form-control']);
            echo $this->Form->control('is_published', ['class'=>'form-control']);
        ?>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>


<?php $this->start('scriptBottom');
      echo $this->Html->script('../admin_assets/bower_components/select2/dist/js/select2.full.min.js');
?>    
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

<?php $this->end();?>