<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle noticia</div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
<form>
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="titulo"><b>Título</b></label>
                        <input type="text" readonly class="form-control-plaintext"  id="titulo" name="titulo" value="<?php echo e($noticia->titulo); ?>">
                      </div>
                      <div class="form-group">
                        <label for="descripcion"><b>Descripción</b></label>
                        <textarea  readonly class="form-control-plaintext"  id="descripcion" name="descripcion" rows="4" cols="80" required><?php echo e($noticia->descripcion); ?></textarea>
                      </div>
<div class="form-group">
                        <label for="categoria"><b>Categoría</b></label>
                        <input type="text" readonly class="form-control-plaintext"  id="categoria" name="categoria" value="<?php echo e($noticia->categoriadescripcion); ?>">
                      </div>
<div class="form-group">
                        <label for="estatus"><b>Estatus</b></label>
                        <input type="text" readonly class="form-control-plaintext"  id="estatus" name="estatus" value="<?php if($noticia->estatus==1){ echo "Activo";} else { echo "Inactivo";}  ?>">
                      </div>
<div class="form-group">
                        <label for="estatus"><b>Imagen</b></label>
                        <br>
                        <img src="<?php echo e(url('/imagenes/'.$noticia->imagen)); ?>" style="width:200px; heigth:200px;">
                      </div>
<div class="form-group">
                        <a href="<?php echo e(route('noticias.edit', $noticia->id)); ?>" class="btn btn-primary">Editar</a>
                      </div>
</form>
</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rodri6uez/Documents/LARAVEL/noticias/resources/views/noticias/show.blade.php ENDPATH**/ ?>