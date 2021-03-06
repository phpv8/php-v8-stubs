<?php declare(strict_types=1);


namespace V8;

/**
 * A compiled JavaScript script, not yet tied to a Context.
 */
class UnboundScript
{
    /**
     * @var Isolate
     */
    private $isolate;

    private function __construct()
    {
    }

    /**
     * @return Isolate
     */
    public function getIsolate(): Isolate
    {
    }

    /**
     * Binds the script to the currently entered context.
     *
     * @param Context $context
     *
     * @return Script
     */
    public function bindToContext(Context $context): Script
    {
    }

    /**
     * @return null|int
     */
    public function getId(): ?int
    {
    }

    /**
     * @return Value|PrimitiveValue|ObjectValue
     */
    public function getScriptName(): Value
    {
    }

    /**
     * Data read from magic sourceURL comments.
     *
     * @return Value|PrimitiveValue|ObjectValue
     */
    public function getSourceURL(): Value
    {
    }

    /**
     * Data read from magic sourceMappingURL comments.
     *
     * @return Value|PrimitiveValue|ObjectValue
     */
    public function getSourceMappingURL(): Value
    {
    }

    /**
     * Returns zero based line number of the code_pos location in the script.
     * -1 will be returned if no information available.
     *
     * @param int $code_pos
     *
     * @return int
     */
    public function getLineNumber(int $code_pos): int
    {
    }
}
