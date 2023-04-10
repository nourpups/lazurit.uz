<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-delete<?php echo e($product->id); ?>" tabindex="-1" aria-labelledby="modal-popout" style="display: none;"
    aria-hidden="true">
    <form action="<?php echo e(route('product.delete', $product->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Delete Product</h3>
                    <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <div class="block-content">
                      <div class="row">
                        <div class="col-lg-12">
                            Name: <h4> <?php echo e($product->name); ?> </h4>
                            <div class="w-75">
                                Image:
                                <img class="img-fluid options-item" src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="">
                            </div>

                        </div>
                      </div>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                        No, don't delete
                    </button>
                    <button type="submit" class="btn btn-alt-danger" data-bs-dismiss="modal">
                        Yes, delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/modals/products/delete.blade.php ENDPATH**/ ?>