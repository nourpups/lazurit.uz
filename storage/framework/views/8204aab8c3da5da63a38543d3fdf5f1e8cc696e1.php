<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-store" tabindex="-1" aria-labelledby="modal-popout" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block-rounded mb-0 block shadow-none">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Category</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm mb-3 p-2">
                    <form action="<?php echo e(route('categories.store')); ?>" enctype="multipart/form-data" method="POST" id="store">
                        <?php echo csrf_field(); ?>
                        <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control"
                                       name="<?php echo e($locale); ?>[name]" value="<?php echo e(old($locale . '.name')); ?>"
                                       placeholder="Product Name [<?php echo e($locale); ?>]">
                                <label class="form-label">Name [<?php echo e($locale); ?>]</label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-2">
                            <label class="form-label">Category Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <button type="submit" class="btn btn-alt-primary w-100 mt-3">
                            Create Category
                        </button>
                    </form>
                </div>
                <div class="block-content block-content-full block-content-sm border-top text-end">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\OSPanel\domains\lazurit\resources\views/manager/modals/categories/store.blade.php ENDPATH**/ ?>