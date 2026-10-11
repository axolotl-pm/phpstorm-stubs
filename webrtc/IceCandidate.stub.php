<?php

namespace pmmp\webrtc;

final class IceCandidate
{
    private function __construct() {}

    public static function create(string $candidate, ?string $mid = null): IceCandidate {}

    public function getCandidate(): string {}

    public function getMid(): string {}
}
