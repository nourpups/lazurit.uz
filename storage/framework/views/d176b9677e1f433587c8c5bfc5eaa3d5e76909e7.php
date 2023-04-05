<div class="col-lg-3 col-md-3 col-sm-4 col-6">
    <div class="product-wrap mb-35" data-aos="fade-up">
        <div class="product-img img-zoom mb-25">
            <a href="<?php echo e(route('product', $product['id'])); ?>">
                <img src="<?php echo e(asset('storage/' . $product['image'])); ?>" alt="<?php echo e($product['name']); ?>">
            </a>
        </div>
        <div class="product-content">
            <h3><a href=<?php echo e(route('product', $product['id'])); ?>><?php echo e($product['name']); ?></a></h3>
            <div class="product-price">
                
                <span class="new-price"><?php echo e(number_format($product->price,0,'',' ')); ?> sum</span>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\lazurit.uz\resources\views/components/card.blade.php ENDPATH**/ ?>