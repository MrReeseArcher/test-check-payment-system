<?php
declare(strict_types=1);

class SendFileOnLink implements SendFileContract
{
    private string $filePath;

    public function setFilePath(string $filePath): static
    {
        $this->filePath = $filePath;

        return $this;
    }

    public function sendFile(string $sendLink): void
    {
        // TODO: Implement sendFile() method.
    }
}
