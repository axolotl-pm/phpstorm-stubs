<?php

namespace pmmp\webrtc;

final class DataChannel
{
    private function __construct() {}

    public function getLabel(): string {}

    public function getProtocol(): string {}

    public function getId(): ?int {}

    public function isOpen(): bool {}

    public function isClosed(): bool {}

    public function isUnordered(): bool {}

    public function getMaxRetransmits(): ?int {}

    public function getMaxPacketLifeTime(): ?int {}

    public function getMaxMessageSize(): int {}

    public function getBufferedAmount(): int {}

    public function getAvailableAmount(): int {}

    public function getQueuedMessageCount(): int {}

    public function send(string $data): bool {}

    public function receive(): ?string {}

    public function peek(): ?string {}

    public function close(): void {}
}
