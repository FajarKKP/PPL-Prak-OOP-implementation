<?php

namespace Services\Assignment;

use Services\Assignment\AssignmentService;

class ExamService extends AssignmentService
{
    public function timeLeft() {
       #TODO: take time as parameter and return deadline time - current time
        return '2 hours left';
    }
}