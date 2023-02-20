	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Danh sách hình ảnh</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh sách hình ảnh</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <a href="index.php?act=addimg"><input type="submit" value="Thêm hình ảnh mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th class="text-center">Hình ảnh</th>
                    <th class="text-center">Cài đặt</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $listImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hinhanh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    
                <tbody>
                    <tr>
                        <td class="text-center"><img src='../public/upload/<?php echo e($hinhanh->img); ?>' width='10%'></td>
                        <td class="text-center">
                            <a href="./index.php?act=deleteimg&id=<?php echo e($hinhanh->id); ?>"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div><?php /**PATH C:\xampp\htdocs\PHP2\php2_asm\app\views\admin/image/image.blade.php ENDPATH**/ ?>