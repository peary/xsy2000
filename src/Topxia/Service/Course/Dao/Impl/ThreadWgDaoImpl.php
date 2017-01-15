<?php

namespace Topxia\Service\Course\Dao\Impl;

use Topxia\Service\Common\BaseDao;
use Topxia\Service\Course\Dao\ThreadWgDao;


class ThreadWgDaoImpl extends BaseDao implements ThreadWgDao
{
    protected $table = 'course_thread_wg';

    public function getPost($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ? LIMIT 1";
        return $this->getConnection()->fetchAssoc($sql, array($id)) ?: null;
    }

    public function searchThreadPosts($conditions, $orderBy, $start, $limit, $groupBy = '')
    {
        $this->filterStartLimit($start, $limit);
        $builder = $this->createThreadPostSearchQueryBuilder($conditions)
            ->select('*')
            ->orderBy($orderBy[0], $orderBy[1])
            ->setFirstResult($start)
            ->setMaxResults($limit);

        if (!empty($groupBy)) {
            $builder->addGroupBy($groupBy);
        }

        return $builder->execute()->fetchAll() ?: array();
    }

    public function searchThreadPostsCount($conditions, $groupBy = '')
    {
        $builder = $this->createThreadPostSearchQueryBuilder($conditions)
            ->select('COUNT(id)');

        if (!empty($groupBy)) {
            $builder->addGroupBy($groupBy);
        }

        return $builder->execute()->fetchColumn(0);
    }

    public function addPost(array $post)
    {
        $affected = $this->getConnection()->insert($this->table, $post);

        if ($affected <= 0) {
            throw $this->createDaoException('Insert course wg error.');
        }

        return $this->getPost($this->getConnection()->lastInsertId());
    }

    protected function createThreadPostSearchQueryBuilder($conditions)
    {
        $builder = $this->createDynamicQueryBuilder($conditions)
            ->from($this->table, $this->table)
            ->andWhere('updatedTime >= :updatedTime_GE')
            ->andWhere('courseId = :courseId')
            ->andWhere('threadId = :threadId')
            ->andWhere('userId = :userId');

        return $builder;
    }

}