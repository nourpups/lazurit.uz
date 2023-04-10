<?php $__env->startSection('title', __('Catalog') ." | ". __('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>

<?php $__env->startSection('meta_tags'); ?>
  <meta name="description" content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you find rings, earrings, necklaces and bracelets that adorn you at any time of the day')); ?>">
  <meta name="keywords" content="Lazurit, ювелирный бренд, украшения, золото, серебро, драгоценные камни, полудрагоценные камни, кольца, серьги, ожерелья, браслеты">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta_og_tags'); ?>
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo e(__('Jewelry brand «Lazurit» - jewelry made of precious metals and stones')); ?>" />
  <meta property="og:url" content="http://lazurit.uz" />
  <meta property="og:site_name" content="http://lazurit.uz" />
  <meta property="og:image" content="#" />
  <meta property="og:description"
    content="<?php echo e(__('Lazurit is a jewelry brand specializing in the manufacture of jewelry made of gold and silver, decorated with precious and semi–precious stones. In our catalog you will find rings, earrings, necklaces and bracelets that will adorn you at any time of the day')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="breadcrumb-area bg-gray-4 breadcrumb-padding-1">
      <div class="container">
          <div class="breadcrumb-content text-center">
              <h2 data-aos="fade-up" data-aos-delay="200"><?php echo e($category_name); ?></h2>
              <ul data-aos="fade-up" data-aos-delay="400">
                  <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Home')); ?></a></li>
                      <li><i class="ti-angle-right"></i></li>
                      <li><?php echo e($category_name); ?></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="shop-area pb-100">
      <div class="container">
          <div class="row flex-row-reverse">
              <div class="col-12">
                  <div class="shop-topbar-wrapper mb-40">
                      <div class="shop-topbar-left" data-aos="fade-up" data-aos-delay="200">
                          <div class="showing-item">
                              <span><?php echo e($products->count()); ?> <?php echo e(__('results')); ?></span>
                          </div>
                      </div>
                      <div class="shop-topbar-right" data-aos="fade-up" data-aos-delay="400">
                      <form method="GET" action="<?php echo e(route('catalog', $category_name)); ?>" id="sort_form">
                              <div class="shop-sorting-area-my">
                                  <select class="nice-select-my nice-select-style-1-my" name="sort" id="sort_catalog">
                                      <option <?php echo e(app('request')->input('sort') == 'relevance' ? 'selected': ''); ?> value="relevance">
                                          <?php echo e(__('Relevance')); ?>

                                      </option>
                                      <option <?php echo e(app('request')->input('sort') == 'name_asc' ? 'selected': ''); ?> value="name_asc">
                                          <?php echo e(__('Name (A-Z)')); ?>

                                      </option>
                                      <option <?php echo e(app('request')->input('sort') == 'name_desc' ? 'selected': ''); ?> value="name_desc">
                                          <?php echo e(__('Name (Z-A)')); ?>

                                      </option>
                                  </select>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="shop-bottom-area">
                      <div class="tab-content jump">
                          <div id="shop-1" class="tab-pane active">
                              <div class="row">
                                  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php echo $__env->make('partials.card', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                            <?php echo e($products->WithQueryString()->links('pagination::bootstrap-4')); ?>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\lazurit.uz\resources\views/catalog/catalog.blade.php ENDPATH**/ ?>