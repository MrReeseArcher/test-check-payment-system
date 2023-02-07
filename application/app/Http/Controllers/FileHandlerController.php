<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use CheckPaymentSystemService;
use Illuminate\Http\Client\Request;
use SendFileContract;

class FileHandlerController extends Controller
{
    public function __construct(
        private readonly CheckPaymentSystemService $checkPaymentSystemService,
        private readonly SendFileContract $sendFileContract
    )
    {
    }

    public function checkPaymentSystem(Request $request)
    {
        $file = $request->input('file');
        $header = $request->header('fileLink');

        $resultFilePath = $this->checkPaymentSystemService
            ->setFilePath($file)
            ->definePaymentSystem()
            ->getFilePath();

        $this->sendFileContract
            ->setFilePath($resultFilePath)
            ->sendFile($header);

        return response();
    }
}
