<div class="col-lg-3 col-md-3 col-sm-4 col-6">
   <div class="product-wrap mb-35" data-aos="fade-up">
      <div class="product-img img-zoom mb-25">

         <a href="<?php echo e(route('product', [$product->category, $product])); ?>">
            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
         </a>
      </div>
      <div class="product-content">
         <h3><a href=<?php echo e(route('product', [$product->category, $product])); ?>><?php echo e($product->name); ?> <?php echo e($product->art); ?></a></h3>
         <div class="product-price">
            

         </div>
      </div>
   </div>
</div>
<?php /**PATH /home/nour751/lazurit/resources/views/partials/card.blade.php ENDPATH**/ ?>