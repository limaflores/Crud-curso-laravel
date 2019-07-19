<?php $__env->startSection('titulo','Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>
  <div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
              <td><?php echo e($registro->id); ?></td>
              <td><?php echo e($registro->titulo); ?></td>
              <td><?php echo e($registro->descricao); ?></td>
              <!--<td><img width="120" src="<?php echo e(asset($registro->imagem)); ?>" alt="<?php echo e($registro->titulo); ?>" /></td>-->
              <!--Diminui o tamanho a imagem de 120px para 60px e fica definido por altura.-->
              <td><img height="60" src="<?php echo e(asset($registro->imagem)); ?>" alt="<?php echo e($registro->titulo); ?>" /></td>
              <td><?php echo e($registro->publicado); ?></td>
              <td>
                <a class="btn deep-orange" href="<?php echo e(route('admin.cursos.editar',$registro->id)); ?>">Editar</a>
                <a class="btn red" href="<?php echo e(route('admin.cursos.deletar',$registro->id)); ?>">Deletar</a>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="<?php echo e(route('admin.cursos.adicionar')); ?>">Adicionar</a>

    </div>

  </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>