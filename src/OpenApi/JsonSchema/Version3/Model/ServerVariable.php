<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Model;

class ServerVariable extends \ArrayObject
{
    /**
     * @var string[]
     */
    protected $enum;
    /**
     * @var string
     */
    protected $default;
    /**
     * @var string
     */
    protected $description;

    /**
     * @return string[]
     */
    public function getEnum(): ?array
    {
        return $this->enum;
    }

    /**
     * @param string[] $enum
     *
     * @return self
     */
    public function setEnum(?array $enum): self
    {
        $this->enum = $enum;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefault(): ?string
    {
        return $this->default;
    }

    /**
     * @param string $default
     *
     * @return self
     */
    public function setDefault(?string $default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}