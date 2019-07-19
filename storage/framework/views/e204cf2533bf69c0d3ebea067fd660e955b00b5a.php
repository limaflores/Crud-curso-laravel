

    <?php echo $__env->make('layout._includes.topo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('conteudo'); ?>

    <?php echo $__env->make('layout._includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

