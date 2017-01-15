<?php

namespace Topxia\Service\Course\Dao;

interface ThreadWgDao
{

	public function getPost($id);

	public function searchThreadPosts($conditions,$orderBy, $start, $limit,$groupBy);

	public function searchThreadPostsCount($conditions,$groupBy);

	public function addPost(array $fields);

}