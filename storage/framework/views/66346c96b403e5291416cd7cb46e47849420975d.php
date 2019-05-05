<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    <?php echo Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

                    <div class="form-group">
                        <?php echo e(Form::label('title', 'Title')); ?>

                        <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('body', 'Body')); ?>

                        <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'] )); ?>

                    </div>
                    <div class="form-group">
                        <?php echo e(Form::file('cover_image')); ?>

                    </div>
                    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

                    <?php echo Form::close(); ?>           
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shanky\Desktop\blogers\resources\views/posts/create.blade.php ENDPATH**/ ?>