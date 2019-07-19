<?php $__env->startSection('titulo', 'Contatos'); ?>


<?php $__env->startSection('conteudo'); ?>

    <h3>Essa é a view Index</h3>

    <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <p> <?php echo e($contato->nome); ?> </p>
        <p> <?php echo e($contato->tel); ?> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>