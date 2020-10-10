
<?php $__env->startSection('title', 'Danh sách danh mục'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-hover">
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Total Product</th>
    <th>
        <a class="btn btn-sm btn-success" href="<?php echo e(BASE_URL . 'add-cate'); ?>">Add</a>
    </th>
</thead>
<tbody>
    <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->cate_name); ?></td>
            <td>0</td>
            <td>
                <a class="btn btn-sm btn-danger" onclick="confirmRemove('<?php echo e(BASE_URL . 'remove-cate?id=' . $item->id); ?>')" href="javascript:;">Remove</a>
                <a class="btn btn-sm btn-info" href="<?php echo e(BASE_URL . 'edit-cate?id=' . $item->id); ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    function confirmRemove(removeurl){
        alertify.confirm(
            'Thông báo', 
            'Bạn chắc chắn muốn xóa danh mục này ?', 
            function(){ 
                window.location.href = removeurl;
            }, 
            function(){ 
                alertify.confirm().close(); 
            }
        );
    }
    
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web3013\mvc\app\views/categories/index.blade.php ENDPATH**/ ?>