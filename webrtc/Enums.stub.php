<?php

namespace pmmp\webrtc;

enum GatheringState: int
{
    case NOT_STARTED = 0;
    case IN_PROGRESS = 1;
    case COMPLETE = 2;
}

enum ConnectionState: int
{
    case NOT_STARTED = 0;
    case CONNECTING = 1;
    case CONNECTED = 2;
    case DISCONNECTED = 3;
    case FAILED = 4;
    case CLOSED = 5;
}

enum RelayType: int
{
    case UDP = 0;
    case TCP = 1;
    case TLS = 2;
}

enum SignalingState: int
{
    case STABLE = 0;
    case HAVE_LOCAL_OFFER = 1;
    case HAVE_REMOTE_OFFER = 2;
    case HAVE_LOCAL_PRANSWER = 3;
    case HAVE_REMOTE_PRANSWER = 4;
}

enum TransportPolicy: int
{
    case ALL = 0;
    case RELAY = 1;
}
