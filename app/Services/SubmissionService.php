<?php

class SubmissionService
{
    private SubmissionRepository $repo;

    public function __construct(array $config)
    {
        $this->repo = new SubmissionRepository($config);
    }

    public function submitWork($workId, $studentId, $content)
    {
        $this->repo->save($workId, $studentId, $content);
    }
}
