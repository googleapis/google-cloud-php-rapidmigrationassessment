<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/rapidmigrationassessment/v1/api_entities.proto

namespace Google\Cloud\RapidMigrationAssessment\V1\Collector;

use UnexpectedValueException;

/**
 * -- Using suggestion from API Linter Analyzer for nesting enum --
 * -- https://linter.aip.dev/216/nesting --
 * State of a Collector (server_side).
 * States are used for internal purposes and named to keep
 * convention of legacy product:
 * https://cloud.google.com/migrate/stratozone/docs/about-stratoprobe.
 *
 * Protobuf type <code>google.cloud.rapidmigrationassessment.v1.Collector.State</code>
 */
class State
{
    /**
     * Collector state is not recognized.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Collector started to create, but hasn't been completed MC source creation
     * and db object creation.
     *
     * Generated from protobuf enum <code>STATE_INITIALIZING = 1;</code>
     */
    const STATE_INITIALIZING = 1;
    /**
     * Collector has been created, MC source creation and db object creation
     * completed.
     *
     * Generated from protobuf enum <code>STATE_READY_TO_USE = 2;</code>
     */
    const STATE_READY_TO_USE = 2;
    /**
     * Collector client has been registered with client.
     *
     * Generated from protobuf enum <code>STATE_REGISTERED = 3;</code>
     */
    const STATE_REGISTERED = 3;
    /**
     * Collector client is actively scanning.
     *
     * Generated from protobuf enum <code>STATE_ACTIVE = 4;</code>
     */
    const STATE_ACTIVE = 4;
    /**
     * Collector is not actively scanning.
     *
     * Generated from protobuf enum <code>STATE_PAUSED = 5;</code>
     */
    const STATE_PAUSED = 5;
    /**
     * Collector is starting background job for deletion.
     *
     * Generated from protobuf enum <code>STATE_DELETING = 6;</code>
     */
    const STATE_DELETING = 6;
    /**
     * Collector completed all tasks for deletion.
     *
     * Generated from protobuf enum <code>STATE_DECOMMISSIONED = 7;</code>
     */
    const STATE_DECOMMISSIONED = 7;
    /**
     * Collector is in error state.
     *
     * Generated from protobuf enum <code>STATE_ERROR = 8;</code>
     */
    const STATE_ERROR = 8;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::STATE_INITIALIZING => 'STATE_INITIALIZING',
        self::STATE_READY_TO_USE => 'STATE_READY_TO_USE',
        self::STATE_REGISTERED => 'STATE_REGISTERED',
        self::STATE_ACTIVE => 'STATE_ACTIVE',
        self::STATE_PAUSED => 'STATE_PAUSED',
        self::STATE_DELETING => 'STATE_DELETING',
        self::STATE_DECOMMISSIONED => 'STATE_DECOMMISSIONED',
        self::STATE_ERROR => 'STATE_ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


