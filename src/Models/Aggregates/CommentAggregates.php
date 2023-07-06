<?php

namespace JGrim\Lemmy\Sdk\Models\Aggregates;

class CommentAggregates
{
    public int $id;
    public int $comment_id;
    public int $score;
    public int $upvotes;
    public int $downvotes;
    public string $published;
    public int $child_count;
    public int $hot_rank;
}
