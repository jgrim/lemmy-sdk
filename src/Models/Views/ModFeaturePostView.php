<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Data\ModFeaturePost;
use Sunrise\Hydrator\Annotation\Relationship;

final class ModFeaturePostView implements Model
{
    #[Relationship(ModFeaturePost::class)]
    public ModFeaturePost $mod_feature_post;
    #[Relationship(Person::class)]
    public ?Person $moderator = null;
    #[Relationship(Post::class)]
    public Post $post;
    #[Relationship(Community::class)]
    public Community $community;
}
