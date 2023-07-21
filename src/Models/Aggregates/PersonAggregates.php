<?php
declare(strict_types=1);

namespace JGrim\Lemmy\Sdk\Models\Aggregates;

use JGrim\Lemmy\Sdk\Contracts\Model;

final class PersonAggregates implements Model
{
    public int $id;
    public int $person_id;
    public int $post_count;
    public int $post_score;
    public int $comment_count;
    public int $comment_score;
}
