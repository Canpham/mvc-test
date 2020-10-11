
<?php $__env->startSection('title', 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
<a style="width: 68px;" class="btn btn-sm btn-info" href="<?php echo e(BASE_URL . 'add-cate'); ?>">Add</a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>DESC</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo e($item->id); ?></td>
                  <td><?php echo e($item->cate_name); ?></td>
                  <td><?php echo e($item->desc); ?></td>
                  <td>
                  <a class="btn btn-sm btn-danger" onclick="confirmRemove('<?php echo e(BASE_URL . 'remove-cate?id=' . $item->id); ?>')" href="javascript:;">Remove</a>
                  <a style="width: 68px;" class="btn btn-sm btn-info" href="<?php echo e(BASE_URL . 'edit-cate?id=' . $item->id); ?>">Edit</a>
                  </td>
                </tr>
              </tbody>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>

  function confirmRemove(url)
  {
    swal({
  title: "Bạn có chắc muốn xóa?",
  text: "Sau khi xóa, bạn sẽ không thể khôi phục danh mục này!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
.then((willDelete) => {
  if (willDelete) {
    window.location.href = url; 
    swal("Danh mục đã được xóa thành công!", {
      icon: "success",
    });
  } else {
    swal("Danh mục đã an toàn!");
  }
  });

  }
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_share.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web3013\mvc\app\views/categories/index.blade.php ENDPATH**/ ?>