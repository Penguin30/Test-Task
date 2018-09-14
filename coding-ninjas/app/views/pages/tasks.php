<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $page->panelTitle(); ?>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2" style="display: flex;">  
            <p>Show </p> <select name="show_quanity" id="show_quanity" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <?php $count = wp_count_posts( 'task' ); ?>
                <option value="<?php echo $count->publish; ?>" selected><?php echo $count->publish; ?></option>
            </select> <p>entries </p>
        </div>
        <div class="col-lg-3" style="display: flex; float: right;">
            Search: <input type="text" class="form-control" id="serch_form" name="serch_form">
        </div>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <?php do_action ('cn_before_tasks_table', $page)?>
        <?php echo $page->tasks(); ?>
        <?php do_action ('cn_after_tasks_table', $page)?>
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->