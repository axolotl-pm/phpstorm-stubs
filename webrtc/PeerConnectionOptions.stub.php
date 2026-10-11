<?php

namespace pmmp\webrtc;

final class PeerConnectionOptions
{
    private function __construct() {}

    public static function create(): PeerConnectionOptions {}

    public function setMaxMessageSize(int $bytes): PeerConnectionOptions {}

    public function setMaxReceiveQueueSize(int $bytes): PeerConnectionOptions {}

    public function getMaxReceiveQueueSize(): int {}

    public function setMaxReceiveQueueMessages(int $count): PeerConnectionOptions {}

    public function getMaxReceiveQueueMessages(): int {}

    public function setMaxSendQueueSize(int $bytes): PeerConnectionOptions {}

    public function getMaxSendQueueSize(): int {}

    public function setMaxRemoteDescriptionSize(int $bytes): PeerConnectionOptions {}

    public function getMaxRemoteDescriptionSize(): int {}

    public function setMaxPendingDataChannels(int $count): PeerConnectionOptions {}

    public function getMaxPendingDataChannels(): int {}

    public function setIceServers(IceServer ...$servers): PeerConnectionOptions {}

    public function setPortRange(int $begin, int $end): PeerConnectionOptions {}

    public function setMtu(int $bytes): PeerConnectionOptions {}

    public function setBindAddress(?string $address): PeerConnectionOptions {}

    public function setCertificate(string $certPemFile, string $keyPemFile, ?string $keyPemPass = null): PeerConnectionOptions {}

    public function setIceTcpEnabled(bool $enable): PeerConnectionOptions {}

    public function setIceUdpMuxEnabled(bool $enable): PeerConnectionOptions {}

    public function setIceTransportPolicy(TransportPolicy $policy): PeerConnectionOptions {}

    public function getIceTransportPolicy(): TransportPolicy {}

    public function getMaxMessageSize(): int {}

    public function getIceServers(): array {}

    public function getPortRangeBegin(): int {}

    public function getPortRangeEnd(): int {}

    public function getMtu(): int {}

    public function getBindAddress(): ?string {}

    public function getCertificatePemFile(): ?string {}

    public function getKeyPemFile(): ?string {}

    public function getKeyPemPass(): ?string {}

    public function isIceTcpEnabled(): bool {}

    public function isIceUdpMuxEnabled(): bool {}
}
