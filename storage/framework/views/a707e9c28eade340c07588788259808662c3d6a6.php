  <?php if($flash=session('message')): ?>
      <div class="alert alert-success" role="alert">
          <?php echo e($flash); ?>

      </div>
     <?php endif; ?>