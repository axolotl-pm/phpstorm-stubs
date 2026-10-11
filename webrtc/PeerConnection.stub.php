<?php

namespace pmmp\webrtc;

final class PeerConnection
{
    public function __construct(PeerConnectionOptions $options) {}

    public function setRemoteOffer(string $sdp): void {}

    public function setRemoteAnswer(string $sdp): void {}

    public function createDataChannel(string $label, ?DataChannelOptions $options = null): DataChannel {}

    public function pollDataChannels(): array {}

    public function pollLocalCandidates(): array {}

    public function addRemoteCandidate(IceCandidate $candidate): void {}

    public function getGatheringState(): GatheringState {}

    public function getState(): ConnectionState {}

    public function getFailureState(): ?ConnectionState {}

    public function getSignalingState(): SignalingState {}

    public function isNegotiationNeeded(): bool {}

    public function getLocalDescription(): ?string {}

    public function getLocalFingerprint(): ?string {}

    public function getRemoteDescription(): ?string {}

    public function getRemoteFingerprint(): ?string {}

    public function getLocalAddress(): ?string {}

    public function getRemoteAddress(): ?string {}

    public function getRoundTripTime(): ?int {}

    public function getBytesSent(): int {}

    public function getBytesReceived(): int {}

    public function clearStats(): void {}

    public function close(): void {}
}
