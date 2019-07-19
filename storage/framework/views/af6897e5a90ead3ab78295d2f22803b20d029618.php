<?php $__env->startSection('titulo', 'Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Editando Curso</h3>
        <div class="row">
            <form class="" action="<?php echo e(route('admin.cursos.atualizar',$registro->id)); ?>" method="post" enctype="multipart/form-data">
                <!-- Cria um input com um token automaticamente. -->
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="_method" value="put">
                <?php echo $__env->make('admin.cursos._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>