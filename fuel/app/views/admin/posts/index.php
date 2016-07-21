<h3>Listing Posts</h3>
<br>
<?php if ($posts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Tags</th>
			<th>Summary</th>
			<th>Body</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $item): ?>		<tr>

			<td><?php echo $item->title; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td style="width:200px;"><?php echo $item->summary; ?></td>
			<td style="width:400px;"><?php echo Str::truncate($item->body,200); ?></td>
			<td>
				<?php echo Html::anchor('admin/posts/view/'.$item->id, 'View',array('type'=>'button','class'=>'btn')); ?> 
				<br>
				<?php echo Html::anchor('admin/posts/edit/'.$item->id, 'Edit',array('id'=> 'edit_post','class'=>'edit_post','class'=>'btn')); ?>
				<input type="button" name="">
				<?php echo Html::anchor('admin/posts/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')",'class'=>'btn')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Posts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/posts/create', 'Add new Post', array('class' => 'btn btn-success')); ?>

</p>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog" >
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Post</h4>
            </div>
            <div class="modal-body" id="hien_sua_sach">
                
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Hủy</button>
            </div>
        </div>
    </div>
</div>