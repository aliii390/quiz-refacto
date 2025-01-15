<?php

final class QcmMapper implements MapperContract
{
    public static function mapToObject(array $qcmData): Qcm
    {
        return new Qcm(
            $qcmData['id'],
            $qcmData['name']
        );
    }
}