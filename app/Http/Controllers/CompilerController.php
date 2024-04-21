<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class CompilerController extends Controller
{

    public function compile(Request $request)
    {
        $pythonCode = $request->input('code');
        $userInput = $request->input('user_input');

        // Simpan kode Python ke dalam file temporary
        $fileName = tempnam(sys_get_temp_dir(), 'python_code_');
        file_put_contents($fileName, $pythonCode);

        //path python server
        $pythonCommand = 'C:\Users\Inspiron\AppData\Local\Programs\Python\Python312\python.exe';
        
        // Eksekusi kode Python
        $process = new Process([$pythonCommand, $fileName]);
        $process->setInput($userInput);
        $process->run();

        // Periksa apakah eksekusi berhasil
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Dapatkan output dari eksekusi
        $output = $process->getOutput();

        // Konversi tipe data Python ke tipe data PHP
        $output = $this->convertOutput($output);
        
        // Hapus file temporary
        unlink($fileName);

        return response()->json(['output' => $output]);
    }

    private function convertOutput($output)
    {
        // Konversi tipe data Python ke tipe data PHP
        $output = str_replace(["<class 'int'>", "<class 'float'>", "<class 'str'>", "<class 'bool'>"], ['integer', 'float', 'string', 'boolean'], $output);

        $output = str_replace("<br>", "", $output);

        return $output;
    }
}
