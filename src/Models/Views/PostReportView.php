<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Aggregates\PostAggregates;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Data\PostReport;

final class PostReportView implements Model
{
    public PostReport $post_report;
    public Post $post;
    public Community $community;
    public Person $creator;
    public Person $post_creator;
    public bool $creator_banned_from_community;
    public ?int $my_vote = null;
    public PostAggregates $counts;
    public ?Person $resolver = null;
}
