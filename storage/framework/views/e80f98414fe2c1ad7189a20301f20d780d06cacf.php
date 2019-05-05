<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                        <a href="/posts" class="btn btn-default">Go Back</a>
                        <h1><?php echo e($post->title); ?></h1>
                        <img style="width:100%" src="/storage/cover_images/<?php echo e($post->cover_image); ?>">
                        <br><br>
                        <div>
                            <?php echo $post->body; ?>

                        </div>
                        <hr>
                        <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                        <hr>
                        <?php if(!Auth::guest()): ?>
                            <?php if(Auth::user()->id == $post->user_id): ?>
                                <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-default">Edit</a>

                                <?php echo Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                    <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

                                <?php echo Form::close(); ?>

                            <?php endif; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\project\blogers\resources\views/posts/show.blade.php ENDPATH**/ ?>