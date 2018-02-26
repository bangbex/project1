<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

    $this->extend('/Admin/Common/ParentEdit');
    $this->assign('judul',$judul);
    $this->loadHelper('Form', ['templates'=>'admin_form']);
    $this->Html->css('../admin_assets/bower_components/select2/dist/css/select2.min.css',['block'=>true]);
    $this->Html->css('../admin_assets/plugins/iCheck/all.css',['block'=>true]);
    
?>

    <div class='row'>
    <div class='col-md-6'>
    <?= $this->Form->create($user , ['role'=>'form']) ?>
        <?php
            echo $this->Form->control('role_id', ['options' => $roles ,'style'=>'width:100%', 'class'=>'form-control select2']);
            echo $this->Form->control('username', ['class'=>'form-control']);
            echo $this->Form->control('password', ['class'=>'form-control']);
            echo $this->Form->control('email', ['class'=>'form-control']);
            echo $this->Form->control('image_path', ['class'=>'form-control']);
        ?>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    </div>
    </div>

<?php $this->start('scriptBottom');
      echo $this->Html->script('../admin_assets/bower_components/select2/dist/js/select2.full.min.js');
      echo $this->Html->script('../admin_assets/plugins/iCheck/icheck.min.js');
      echo $this->Html->script('../admin_assets/bower_components/ckeditor/ckeditor.js');
      

?>    
<script>
  $(function () {
  
    //Initialize Select2 Elements
    $('.select2').select2();
    
    //ckeditor
    CKEDITOR.replaceClass = 'ckeditor';
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
    
    
  })
</script>

<?php $this->end();?>