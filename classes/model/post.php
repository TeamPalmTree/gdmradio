<?php

class Model_Post extends \Orm\Model
{

    protected static $_properties = array(
        'id',
        'posted_on',
        'title',
        'image',
        'text',
        'user_id',
    );

    protected static $_has_many = array(
        'post_comments',
    );

    public function user_posted_on()
    {
        return Helper::server_datetime_string_to_user_datetime_string($this->posted_on);
    }

    public function summary()
    {
        // get the first paragraph end index
        $first_paragraph_end = strpos($this->text, '</p>') + 4;
        return substr($this->text, 0, $first_paragraph_end);
    }

    public function populate($input)
    {

        // initialize
        if (is_null($this->id))
        {
            // set poster
            $this->user_id = Auth::get_user_id()[1];
            // set posted on
            $this->posted_on = Helper::server_datetime_string();
        }

        // set other properties
        $this->title = $input['title'];
        $this->text = $input['text'];
        $this->image = $input['image'];

    }

    public static function view_commentable($id)
    {

        // get post
        $post = Model_Post::query()
            ->where('id', $id)
            ->get_one();
        // set post user
        $post->username = \Promoter\Model\Promoter_User::username($post->user_id);
        // set post date
        $post->user_posted_on = $post->user_posted_on();

        // get post comments
        $post_comments = Model_Post_Comment::query()
            ->where('post_id', $post->id)
            ->order_by('commented_on', 'DESC')
            ->get();
        // set post comments
        $post->post_comments = array_values($post_comments);

        $user_ids = array();
        // get all user ids
        foreach ($post->post_comments as $comment)
            $user_ids[] = $comment->user_id;
        // resolve usernames
        if (count($user_ids) > 0)
            $usernames = \Promoter\Model\Promoter_User::usernames($user_ids);
        // set usernames and comment date for each comment
        foreach ($post->post_comments as $comment)
        {
            $comment->username = $usernames[$comment->user_id];
            $comment->user_commented_on = $comment->user_commented_on();
        }

        // success
        return $post;

    }

    public static function recent()
    {
        return Model_Post::query()
            ->order_by('posted_on', 'desc')
            ->rows_limit(3)
            ->get();
    }

    public static function viewable_recent()
    {

        // get recent posts
        $posts = self::recent();
        // gather user ids
        $user_ids = Helper::extract_values('user_id', $posts);
        // get usernames
        $usernames = \Promoter\Model\Promoter_User::usernames($user_ids);
        // set user time and username
        foreach ($posts as $post)
        {
            $post->user_posted_on = $post->user_posted_on();
            $post->username = $usernames[$post->user_id];
            $post->summary = $post->summary();
        }

        // success
        return $posts;

    }

    public static function paged($page, $per_page)
    {

        // calculate the rows offset
        $rows_offset = ($page - 1) * $per_page;
        // get posts
        $posts = Model_Post::query()
            ->rows_offset($rows_offset)
            ->rows_limit($per_page)
            ->order_by('posted_on', 'DESC')
            ->get();
        // success
        return $posts;

    }

    public static function viewable_paged($page, $per_page)
    {

        // get paged posts
        $posts = self::paged($page, $per_page);
        // update posted on, set summary
        foreach ($posts as $post)
        {
            $post->user_posted_on = $post->user_posted_on();
            $post->summary = $post->summary();
        }

        // success
        return $posts;

    }

    public static function viewable_creatable()
    {
        // create post
        return Model_Post::forge();
    }

}