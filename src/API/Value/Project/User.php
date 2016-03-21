<?php

namespace Marek\Toggl\API\Value\Project;

use Marek\Toggl\API\Value\ValueObject;

/**
 * Class User
 * @package Marek\Toggl\API\Value\Project
 *
 * @property-read int $id
 * @property-read int $pid
 * @property-read int $uid
 * @property-read int $wid
 * @property-read boolean $manager
 * @property-read float $rate
 * @property-read \DateTime $lastUpdatedAt
 * @property-read string $fullName
 */
class User extends ValueObject
{
    /**
     * @var int
     */
    public $id;

    /**
     * Project ID
     *
     * @var int
     */
    public $pid;

    /**
     * User ID, who is added to the project
     *
     * @var int
     */
    public $uid;

    /**
     * Workspace ID, where the project belongs to
     *
     * @var int
     */
    public $wid;

    /**
     * Admin rights for this project
     *
     * @var boolean
     */
    public $manager = false;

    /**
     * Hourly rate for the project user (float, not-required, only for pro workspaces) in the currency of the project's client or in workspace default currency.
     *
     * @var float
     */
    public $rate;

    /**
     * Indicates when the project user was last updated
     *
     * @var \DateTime
     */
    public $lastUpdatedAt;

    /**
     * Full name of the user, who is added to the project
     *
     * @var string
     */
    public $fullName;
}