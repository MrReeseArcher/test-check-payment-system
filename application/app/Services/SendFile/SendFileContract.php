<?php
declare(strict_types=1);

interface SendFileContract
{
    public function setFilePath(string $filePath);

    public function sendFile(string $filePath);
}
