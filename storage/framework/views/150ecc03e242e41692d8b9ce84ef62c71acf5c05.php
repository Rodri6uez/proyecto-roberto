<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar noticia</div>
<div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
<form action="<?php echo e(route('noticias.update',['noticia' => $id->id])); ?>"  method="post" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo e($noticia ?? '' ?? '' ?? '' ?? ''->titulo); ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea  class="form-control" id="descripcion" name="descripcion" rows="4" cols="80" required><?php echo e($noticia ?? '' ?? '' ?? '' ?? ''->descripcion); ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select class="form-control" id="categoria" name="categoria" required>
                          <option value="">Seleccionar</option>
                            <?php foreach ($categorias as $categoria) { ?>
                                <option value="<?php echo $categoria->id; ?>" <?php if($categoria->id==$noticia ?? '' ?? '' ?? '' ?? ''->categorias_id){ echo "selected";} ?>> <?php echo $categoria->descripcion; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="estatus">Estatus</label>
                        <select class="form-control" id="estatus" name="estatus" required>
                          <option value="">Seleccionar</option>
                          <option value="1" <?php if($noticia ?? '' ?? '' ?? '' ?? ''->estatus==1){ echo "selected";} ?>>Activo</option>
                          <option value="0" <?php if($noticia ?? '' ?? '' ?? '' ?? ''->estatus==0){ echo "selected";} ?>>Inactivo</option>
                        </select>
                      </div>
<div class="form-group">
                        <label for="imagen">Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen">
                      </div>
<div class="form-group">
                        <label for="estatus"><b>Imagen</b></label>
                        <br>
                        <img src="<?php echo e(url('/imagenes/'.$noticia ?? '' ?? '' ?? '' ?? ''->imagen)); ?>" style="width:200px; heigth:200px;">
                      </div>
<button type="submit" class="btn btn-primary">Aceptar</button>
</form>
<hr>
                    <form action="<?php echo e(route('noticias.destroy',['id' => $noticia ?? '' ?? '' ?? '' ?? ''->id])); ?>" method="post">
                      <input name="_method" type="hidden" value="DELETE">
                      <?php echo csrf_field(); ?>
                      <input type="submit" class="btn btn-danger" name="Eliminar" value="Eliminar">
                    </form>
</div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rodri6uez/Documents/LARAVEL/noticias/resources/views/noticias/edit.blade.php ENDPATH**/ ?>