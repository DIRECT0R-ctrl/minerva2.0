<?php
declare(strict_types=1);

require_once __DIR__ . '/../repositories/GradeRepository.php';

final class GradeService
{
    private GradeRepository $repo;

    public function __construct(array $config)
    {
        $this->repo = new GradeRepository($config);
    }

    public function gradeSubmission(
        int $submissionId,
        float $grade,
        string $comment
    ): bool {
        return $this->repo->save($submissionId, $grade, $comment);
    }

    public function getStudentGrades(int $studentId): array
    {
        return $this->repo->findByStudent($studentId);
    }
}
