<p>
    <?php echo $post->title; ?>
</p>
<div class="thumbs_container">
    <button class="btn <?php echo ($post->vote_status == 1) ? "btn-success" : "btn-default"; ?> likeBtn"
            data-id="<?php echo $post->id; ?>">
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <span class="like_count">(<?php echo $post->like_count; ?>)</span>
    </button>
    <button class="btn <?php echo ($post->vote_status == -1) ? "btn-danger" : "btn-default"; ?> dislikeBtn"
            data-id="<?php echo $post->id; ?>">
        <span class="glyphicon glyphicon-thumbs-down"></span>
        <span class="dislike_count">(<?php echo $post->dislike_count; ?>)</span>
    </button>
</div>