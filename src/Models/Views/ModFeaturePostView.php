<?php

namespace JGrim\Lemmy\Sdk\Models\Views;

use JGrim\Lemmy\Sdk\Contracts\Model;
use JGrim\Lemmy\Sdk\Models\Data\Community;
use JGrim\Lemmy\Sdk\Models\Data\Person;
use JGrim\Lemmy\Sdk\Models\Data\Post;
use JGrim\Lemmy\Sdk\Models\Request\ModFeaturePost;

final class ModFeaturePostView implements Model
{
    #[\Sunrise\Hydrator\Annotation\Relationship(ModFeaturePost::class)]
    public ModFeaturePost $mod_feature_post;
    #[\Sunrise\Hydrator\Annotation\Relationship(Person::class)]
    public ?Person $moderator = null;
    #[\Sunrise\Hydrator\Annotation\Relationship(Post::class)]
    public Post $post;
    #[\Sunrise\Hydrator\Annotation\Relationship(Community::class)]
    public Community $community;
}
