<?php

declare(strict_types=1);

/**
 * This code was auto-generated by {this script}[https://github.com/cucumber/common/blob/main/messages/jsonschema/scripts/codegen.rb]
 */

namespace Cucumber\Messages;

use JsonSerializable;
use Cucumber\Messages\DecodingException\SchemaViolationException;

/**
 * Represents the PickleStep message in Cucumber's message protocol
 * @see https://github.com/cucumber/common/tree/main/messages#readme
 *
 * An executable step */
final class PickleStep implements JsonSerializable
{
    use JsonEncodingTrait;

    public function __construct(
        public readonly ?PickleStepArgument $argument = null,

        /**
         * References the IDs of the source of the step. For Gherkin, this can be
         * the ID of a Step, and possibly also the ID of a TableRow
         * @param list<string> $astNodeIds
         */
        public readonly array $astNodeIds = [],

        /**
         * A unique ID for the PickleStep
         */
        public readonly string $id = '',
        public readonly string $text = '',
    ) {
    }

    /**
     * @throws SchemaViolationException
     *
     * @internal
     */
    public static function fromArray(array $arr): self
    {
        self::ensureArgument($arr);
        self::ensureAstNodeIds($arr);
        self::ensureId($arr);
        self::ensureText($arr);

        return new self(
            isset($arr['argument']) ? PickleStepArgument::fromArray($arr['argument']) : null,
            array_map(fn (mixed $member) => (string) $member, $arr['astNodeIds']),
            (string) $arr['id'],
            (string) $arr['text'],
        );
    }

    /**
     * @psalm-assert array{argument?: array} $arr
     */
    private static function ensureArgument(array $arr): void
    {
        if (array_key_exists('argument', $arr) && !is_array($arr['argument'])) {
            throw new SchemaViolationException('Property \'argument\' was not array');
        }
    }

    /**
     * @psalm-assert array{astNodeIds: array} $arr
     */
    private static function ensureAstNodeIds(array $arr): void
    {
        if (!array_key_exists('astNodeIds', $arr)) {
            throw new SchemaViolationException('Property \'astNodeIds\' is required but was not found');
        }
        if (array_key_exists('astNodeIds', $arr) && !is_array($arr['astNodeIds'])) {
            throw new SchemaViolationException('Property \'astNodeIds\' was not array');
        }
    }

    /**
     * @psalm-assert array{id: string|int|bool} $arr
     */
    private static function ensureId(array $arr): void
    {
        if (!array_key_exists('id', $arr)) {
            throw new SchemaViolationException('Property \'id\' is required but was not found');
        }
        if (array_key_exists('id', $arr) && is_array($arr['id'])) {
            throw new SchemaViolationException('Property \'id\' was array');
        }
    }

    /**
     * @psalm-assert array{text: string|int|bool} $arr
     */
    private static function ensureText(array $arr): void
    {
        if (!array_key_exists('text', $arr)) {
            throw new SchemaViolationException('Property \'text\' is required but was not found');
        }
        if (array_key_exists('text', $arr) && is_array($arr['text'])) {
            throw new SchemaViolationException('Property \'text\' was array');
        }
    }
}