<?php
declare(strict_types=1);

require_once __DIR__ . '/../repositories/AttendanceRepository.php';

final class AttendanceService
{
    private AttendanceRepository $repo;

    public function __construct(array $config)
    {
        $this->repo = new AttendanceRepository($config);
    }

    public function mark(
        int $studentId,
        int $classId,
        string $status
    ): bool {
        $date = date('Y-m-d');
        return $this->repo->save($studentId, $classId, $date, $status);
    }

    public function getStudentAttendance(int $studentId): array
    {
        return $this->repo->getByStudent($studentId);
    }
}
