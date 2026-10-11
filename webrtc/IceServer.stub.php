<?php

namespace pmmp\webrtc;

final class IceServer
{
    private function __construct() {}

    public static function stun(string $hostname, int $port = 3478): IceServer {}

    public static function turn(string $hostname, int $port, string $username, string $password, RelayType $relayType = RelayType::UDP): IceServer {}

    public function getHostname(): string {}

    public function getPort(): int {}

    public function getUsername(): ?string {}

    public function getPassword(): ?string {}

    public function getRelayType(): ?RelayType {}

    public function isTurn(): bool {}
}
