<?php
declare(strict_types = 1);
namespace Pagemachine\Formlog\Domain\FormLog;

/*
 * This file is part of the Pagemachine TYPO3 Formlog project.
 */

interface FilterInterface
{
    /**
     * Returns whether the filter is set
     *
     * @return bool
     */
    public function isEmpty(): bool;
}
