<?php $data = get_field('articles'); ?>
<?php foreach ($data as $item) { $article = $item['article'] ?>
	<div class="article-item mb-1">
		<div class="article-link">
			<?php $link = $article['link']; ?>
			<?php if ($link) : ?>
				<h5><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></h5>
			<?php endif; ?>
		</div>
		<p class="mb-0"><?php echo $article['text']; ?></p>
	</div>
<?php } ?>
