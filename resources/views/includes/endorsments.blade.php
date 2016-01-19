
<div style="text-align:center;">
	<?php foreach ($images->EndorsmentImages()->get() as $image): ?> 
	  <img class="img-thumbnail" style="text-align:center; width:20%;" src="images/<?php echo $image->name; ?>" alt="" /> 
	  <img class="img-thumbnail" style="text-align:center; width:20%;" src="images/<?php echo $image->name; ?>" alt="" /> 
	<?php endforeach; ?>
</div> 