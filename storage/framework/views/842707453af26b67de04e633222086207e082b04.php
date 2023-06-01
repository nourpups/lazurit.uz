<?php if($paginator->hasPages()): ?>

   <nav class="pagination-style-1" data-aos="fade-up">
      <ul>
         
         <?php if(!$paginator->onFirstPage()): ?>
            <li><a class="next" rel="prev" href="<?php echo e($paginator->previousPageUrl()); ?>"><i
                     class=" ti-angle-double-left "></i></a></li>
         <?php endif; ?>

         
         <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
               <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
               <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($page == $paginator->currentPage()): ?>
                     <li><a class="active" href="#"><?php echo e($page); ?></a></li>
                  <?php else: ?>
                     <li><a class="" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                  <?php endif; ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         
         <?php if($paginator->hasMorePages()): ?>
            <li><a class="next" href="<?php echo e($paginator->nextPageUrl()); ?>"><i class=" ti-angle-double-right "></i></a></li>
         <?php endif; ?>
      </ul>
   </nav>
<?php endif; ?>
<?php /**PATH /home/nour751/lazurit/resources/views/vendor/pagination/bootstrap-4-catalog.blade.php ENDPATH**/ ?>