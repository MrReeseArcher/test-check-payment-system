<?php
declare(strict_types=1);

class SendFileToEmail implements SendFileContract
{
    private string $filePath;

    public function setFilePath(string $filePath): static
    {
        $this->filePath = $filePath;

        return $this;
    }

    public function sendFile(string $filePath): void
    {
        // TODO: Implement sendFile() method.
    }
}
