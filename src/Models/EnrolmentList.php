<?php

declare(strict_types=1);

namespace Dotdigital\Models;

use Dotdigital\Models\Enrolment;

class EnrolmentList extends AbstractListModel implements ListInterface
{
    /**
     * @param array<mixed> $listItem
     *
     * @return Enrolment
     * @throws \Exception
     */
    public function getOne(array $listItem)
    {
        return new Enrolment($listItem);
    }
}
