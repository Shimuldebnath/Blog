<?php $__env->startSection('content'); ?>

	   <div class="col-sm-8 blog-main">
   <?php echo $__env->make('partials.flashmessage', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/<?php echo e($post->id); ?>" >
                <?php echo e($post->title); ?>

              </a>
            </h2>
            <p class="blog-post-meta"><?php echo e($post->created_at->diffForHumans()); ?> by <?php echo e($post->user->name); ?></p>

            <p><?php echo e($post->body); ?></p>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

      </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>