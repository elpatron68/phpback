<div class="pull-right col-md-3 col-md-pull-1" style="border-style:solid;border-width:1px;border-color:#C0C0C0;padding-left:10px;padding-top:8px;" >
			<div class="pull-left">
			<div id="search">
	   			<form class="navbar-form navbar-right" action="<?php echo base_url() . 'home/search'; ?>" method="POST">
			      <div class="form-group">
			        <div class="input-group">
			          <input class="form-control" name="query" id="search--input" type="search" placeholder="<?php echo $lang['label_search']; ?>">
			          <span class="input-group-btn">
			            <button type="submit" class="btn" id="search--button"><span class="fui-search"></span></button>
			          </span>
			        </div>
			      </div>
			    </form>

			</div>
			<div id="postidea" style="margin-top:10px;">
				<a href="<?php echo base_url() . 'home/postidea'; ?>"><button type="button" class="btn btn-primary btn-xs" id="post-new-idea-button"><?php echo $lang['label_post_new_idea'];?>
					<span class="glyphicon glyphicon-plus" style="padding-left:20px"></span>
				</button></a>
			</div>
			<div id="categories">
				<h6><?php echo $lang['label_categories']; ?></h6>
				<ul class="nav nav-pills nav-stacked">
				 <?php foreach($categories as $cat) { ?>
				 	<li <?php if(!$cat->ideas) echo 'class="disabled"';?>><a href="<?php echo $cat->url; ?>"><?php echo $cat->name; ?><span class="badge"><?php echo $cat->ideas; ?></span></a></li>
				 <?php } ?>
				</ul>
				<br>
			</div>
			</div>
</div>
