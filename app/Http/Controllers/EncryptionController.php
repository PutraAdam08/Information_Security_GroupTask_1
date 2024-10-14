<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptionController extends Controller
{
    private $des_method = 'des-ede3-cbc';
    private $aes_method = 'aes-256-cbc';
    private $rc4_method = 'rc4';

    private function keyGeneration($length = 16)
    {
        return openssl_random_pseudo_bytes($length);
    }
    public function encryptDes($data)
    {
        $key = $this->keyGeneration();
        $iv_length = openssl_cipher_iv_length($this->des_method);
        $iv = openssl_random_pseudo_bytes($iv_length);
        $encrypted = openssl_encrypt($data, $this->des_method, $key, OPENSSL_RAW_DATA, $iv);
        return ['key' => base64_encode($key), 'encrypted' => base64_encode($iv . $encrypted)];
    }

    public function decryptDes($encrypted, $key)
    {
        $data = base64_decode($encrypted);
        $key = base64_decode($key);
        $iv_length = openssl_cipher_iv_length($this->des_method);
        $iv = substr($data, 0, $iv_length);
        $data = substr($data, $iv_length);
        return openssl_decrypt($data, $this->des_method, $key, OPENSSL_RAW_DATA, $iv);
    }
    public function encrpytAES($data)
    {
        $key = $this->keyGeneration(32);
        $iv_length = openssl_cipher_iv_length($this->aes_method);
        $iv = openssl_random_pseudo_bytes($iv_length);
        $encrypted = openssl_encrypt($data, $this->aes_method, $key, OPENSSL_RAW_DATA, $iv);
        return ['key' => base64_encode($key), 'encrypted' => base64_encode($iv . $encrypted)];
    }
    public function decryptAES($encrypted, $key)
    {
        $data = base64_decode($encrypted);
        $key = base64_decode($key);
        $iv_length = openssl_cipher_iv_length($this->aes_method);
        $iv = substr($data, 0, $iv_length);
        $data = substr($data, $iv_length);
        return openssl_decrypt($data, $this->aes_method, $key, OPENSSL_RAW_DATA, $iv);
    }
}
