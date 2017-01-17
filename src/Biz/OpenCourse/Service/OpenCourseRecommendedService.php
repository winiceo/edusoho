<?php
namespace Biz\OpenCourse\Service;

interface OpenCourseRecommendedService
{
    public function addRecommendedCourses($openCourseId, $recommendCourseIds, $origin);

    public function findRecommendedCoursesByOpenCourseId($openCourseId);

    public function updateOpenCourseRecommendedCourses($openCourseId, $activeCourseIds);

    /**
     * @param $conditions
     * @return mixed
     * @before searchRecommendCount
     */
    public function countRecommends($conditions);

    public function searchRecommends($conditions, $orderBy, $start, $limit);

    public function recommendedCoursesSort($recommendCourses);

    public function getRecommendedCourseByCourseIdAndType($openCourseId, $recommendCourseId, $type);

    public function findRandomRecommendCourses($courseId, $num = 3);

    public function deleteRecommendCourse($recommendId);
    
    protected function deleteBatchRecommendCourses($recommendIds);
}