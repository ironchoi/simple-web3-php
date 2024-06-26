<?php

namespace Tests\Fixtures;

use Tests\TestCase;

class BytesFixture extends TestCase
{
    public static function validBytesEncoderData(): array
    {
        return [
            [
                'bytes5',
                '0x0000001010',
                '0000001010000000000000000000000000000000000000000000000000000000',
            ],
            [
                'bytes',
                '0x0000001010',
                '00000000000000000000000000000000000000000000000000000000000000050000001010000000000000000000000000000000000000000000000000000000',
            ],
            [
                'bytes',
                '0x3a1bd524db9d52a12c4c60bb3f08e4ed34f380964a6882d46097f6fe4eff98af80552fddf116d4afb1a2676508d68eb62f13e23e1e696c2a800d384470c628c748cee4ad2260d26584cd6a06c4a0cccca37b',
                '00000000000000000000000000000000000000000000000000000000000000523a1bd524db9d52a12c4c60bb3f08e4ed34f380964a6882d46097f6fe4eff98af80552fddf116d4afb1a2676508d68eb62f13e23e1e696c2a800d384470c628c748cee4ad2260d26584cd6a06c4a0cccca37b0000000000000000000000000000',
            ],
        ];
    }

    public static function invalidBytesEncoderData(): array
    {
        return [
            ['bytes', 'blem'],
            ['bytes', '--123'],
            ['bytes1', '0x0000001010'],
        ];
    }

    public static function validBytesDecoderData(): array
    {
        return [
            [
                'bytes5',
                '0x0000001010000000000000000000000000000000000000000000000000000000',
                '0x0000001010',
                '0X',
            ],
            [
                'bytes5',
                '0x0000001010000000000000000000000000000000000000000000000000000000',
                '0x0000001010',
                '0X',
            ],
            [
                'bytes',
                '0x00000000000000000000000000000000000000000000000000000000000000050000001010000000000000000000000000000000000000000000000000000000',
                '0x0000001010',
                '0x',
            ],
            [
                'bytes2',
                '0x01020000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000002',
                '0x0102',
                '0x0000000000000000000000000000000000000000000000000000000000000002',
            ],
        ];
    }

    public static function invalidBytesDecoderData(): array
    {
        return [
            ['bytes32', '0x0000001010'],
        ];
    }
}
