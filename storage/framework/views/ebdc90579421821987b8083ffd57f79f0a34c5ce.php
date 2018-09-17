        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Here people can post about <em>anything they want</em> like cricket, football, tour etc.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
            <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="/posts/?month=<?php echo e($archive->month); ?>&year=<?php echo e($archive->year); ?>"><?php echo e($archive->month); ?> <?php echo e($archive->year); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->