<?php

declare(strict_types=1);

class CheckPaymentSystemService
{
    private string $filePath;

    public function __construct(
        private readonly FindPaymentSystemService $findPaymentSystemService
    )
    {
    }

    public function setFilePath(string $filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }

    public function definePaymentSystem(): static
    {
        // TODO foreach card list
        $cardNumber = '2222222222222222';

        $paymentSystem = $this->findPaymentSystemService->findPaymentSystem($cardNumber);

        $this->saveToFile();

        return $this;
    }

    private function saveToFile(): void
    {
        // TODO save to file
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }

}
