<?php   foreach($posts as $post) : ?>
<h3>
    <?php 
        echo $post['title'] ?>
</h3>
<small>Posted on:
    <span class="font-weight-bold">
        <?php echo $post['created_at'] ?></span></small> <br>
<?php echo $post['body']; ?>

<p><a href="<?php echo base_url('posts/'.$post['slug']); ?>">read more</a></p>

<?php endforeach; ?>