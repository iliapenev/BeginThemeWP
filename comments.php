<?php
/**
 * The template for displaying Comments.
 */
?>

<div id="comments">
    <?php if (post_password_required()) : ?>
        <p class="nopassword"><?php echo 'This post is password protected. Enter the password to view any comments.'; ?></p>
    </div><!-- #comments -->
    <?php
    /* Stop the rest of comments.php from being processed,
     * but don't kill the script entirely -- we still have
     * to fully load the template.
     */
    return;
endif;
?>

<?php
// You can start editing here -- including this comment!
?>

<?php if (have_comments()) : ?>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
        <div class="navigation">
            <div class="nav-previous"><?php previous_comments_link(__('<span class="meta-nav">&larr;</span>Newer Comments')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Previous Comments <span class="meta-nav">&rarr;</span>')); ?></div>
        </div> <!-- .navigation -->
    <?php endif; // check for comment navigation ?>

    <ol class="commentlist">
        <?php
        wp_list_comments('type=comment&callback=mytheme_comment');
        ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // Are there comments to navigate through? ?>
        <div class="navigation">
            <div class="nav-previous"><?php previous_comments_link(__('<span class="meta-nav">&larr;</span> Newer Comments')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Previous Comments <span class="meta-nav">&rarr;</span>')); ?></div>
        </div><!-- .navigation -->
    <?php endif; // check for comment navigation ?>

<?php
else : // or, if we don't have comments:

    /* If there are no comments and comments are closed,
     * let's leave a little note, shall we?
     */
    if (!comments_open()) :
        ?>
        <p class="nocomments"></p>
    <?php endif; // end ! comments_open()  ?>

<?php endif; // end have_comments()  ?>


<?php
$fields = array(
    'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name', 'domainreference') . ' *</label> ' .
    '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . ' /></p>',
    'email' => '<p class="comment-form-email"><label for="email">' . __('Email', 'domainreference') . ' *</label> ' .
    '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . ' /></p>',
    'url' => '<p class="comment-form-url"><label for="url">' . __('Website', 'domainreference') . '</label>' .
    '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>',
);

$comments_args = array(
    'fields' => $fields,
    'comment_notes_after' => '',
);
?>
<?php comment_form($comments_args); ?>

</div><!-- #comments -->