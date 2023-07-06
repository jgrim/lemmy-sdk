<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\CommentAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Comment;
use JGrim\Lemmy\Sdk\Models\Data\CommentReport;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;

final class CommentReportView implements Model
{
    public CommentReport $comment_report;
    public Comment $comment;
    public Post $post;
    public Community $community;
    public Person $creator;
    public Person $comment_creator;
    public CommentAggregates $counts;
    public bool $creator_banned_from_community;
    public ?int $my_vote = null;
    public ?Person $resolver = null;
}
