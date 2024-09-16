<?php


namespace App\Enums;

enum PaymentMethod: string
{
    case CASH = 'cash';
    case BANK_TRANSFER = 'bank_transfer';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::CASH => 'Cash',
            self::BANK_TRANSFER => 'Bank Transfer',
        };
    }
}