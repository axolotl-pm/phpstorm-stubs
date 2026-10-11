<?php

namespace pmmp\webrtc;

final class DataChannelOptions
{
    private function __construct() {}

    public static function create(): DataChannelOptions {}

    public function setUnordered(bool $unordered): DataChannelOptions {}

    public function setMaxRetransmits(?int $count): DataChannelOptions {}

    public function setMaxPacketLifeTime(?int $milliseconds): DataChannelOptions {}

    public function setProtocol(string $protocol): DataChannelOptions {}

    public function setNegotiated(bool $negotiated): DataChannelOptions {}

    public function setId(?int $id): DataChannelOptions {}

    public function isUnordered(): bool {}

    public function getMaxRetransmits(): ?int {}

    public function getMaxPacketLifeTime(): ?int {}

    public function getProtocol(): string {}

    public function isNegotiated(): bool {}

    public function getId(): ?int {}
}
