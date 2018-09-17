<?php $__env->startSection('content'); ?>

	   <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">
              <a href="/posts/<?php echo e($post->id); ?>" >
                <?php echo e($post->title); ?>

              </a>
            </h2>
            <p class="blog-post-meta"><?php echo e($post->created_at->diffForHumans()); ?> by <?php echo e($post->user->name); ?></p>

            <p><?php echo e($post->body); ?></p>
          </div>

          <hr>

          <div class="comments">
          	<ul class="list-group">
          		<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          			<li class="list-group-item">
          			          		
          				<strong><?php echo e($comment->created_at->diffForHumans()); ?></strong>
          				<?php echo e($comment->body); ?>

          			</li>
          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          	</ul>
          </div>
          <hr>

          <div class="card">
          	<div class="card-block">
          		<form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
          			<?php echo e(csrf_field()); ?>

          			<div class="form-group">
          				<textarea placeholder="Leave your comment here" name="body" class="form-control"></textarea>
          			</div>
          			<button type="submit" class="btn btn-primary">Add Comment</button>

          		
          		</form>
          	</div>
          </div>

          <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          

      </div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>