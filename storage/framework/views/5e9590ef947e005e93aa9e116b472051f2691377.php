<?php $__env->startSection('titulo','Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>
  <div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        <!--Aqui traz as informações dos cursos.-->
        <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo e(asset($curso->imagem)); ?>">
                    </div>
                    <div class="card-content">
                        <h4><?php echo e($curso->titulo); ?></h4>
                        <p><?php echo e($curso->descricao); ?></p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver mais...</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>

    <!-- Colocando a paginação. -->
    <div class="row" align="center">
        <?php echo e($cursos->links()); ?>

    </div>

  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>