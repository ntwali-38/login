<div>
             <form action="/students" method="POST">
                <?php echo csrf_field(); ?>
        <input name="last_name" class="form-control" value="<?php echo e($student->last_name); ?>">
        <input name="first_name" class="form-control" value="<?php echo e($student->first_name); ?>">
        <input type="date" name="dob" class="form-control" value="<?php echo e($student->dob); ?>">
       <button class="btn btn-primary">submit</button>
</div>
<?php /**PATH C:\Users\NTWALI\Desktop\academic-ap\resources\views/learner.blade.php ENDPATH**/ ?>