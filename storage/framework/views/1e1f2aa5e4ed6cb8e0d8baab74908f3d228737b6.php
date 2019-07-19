<?php $__env->startSection('titulo', 'Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form class="" action="<?php echo e(route('site.login.entrar')); ?>" method="post">
                <!-- Cria um input com um token automaticamente. -->
                <?php echo e(csrf_field()); ?>

                <div class="input-field">
                    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
                    <input type="text" name="email">
                    <label>E-mail</label>
                </div>
                <div class="input-field">
                    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>
                <button class="btn deep-orange">Entrar</button>
            </form>
        </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>