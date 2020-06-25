<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Noticias</div>
                    <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                        <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Título</th>
                          <th>Categoría</th>
                          <th>Imagen</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($noticias as $noticia) { ?>
                            <tr>
                              <td><a href="show/<?php echo $noticia->id; ?>"><?php echo $noticia->id; ?></a></td>
                              <td><?php echo $noticia->titulo; ?></td>
                              <td><?php echo $noticia->categoriadescripcion; ?></td>
                              <td><img src="<?php echo e(url('/imagenes/'.$noticia->imagen)); ?>" style="width:200px; heigth:200px;"></td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rodri6uez/Documents/LARAVEL/noticias/resources/views/welcome.blade.php ENDPATH**/ ?>