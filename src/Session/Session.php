<?php

namespace App\Session;

class Session implements SessionInterface
{
    private bool $isStarted = false;

    public function isStarted(): bool
    {
        $this->isStarted = session_status() === PHP_SESSION_ACTIVE;

        return $this->isStarted;
    }

    public function start(): bool
    {
        if($this->isStarted()){
            return true;
        }

        if(session_status() === PHP_SESSION_ACTIVE) {
            $this->isStarted = true;
            return true;
        }

        session_start();
        $this->isStarted = true;
        return true;
    }

    public function has(string $key)
    {
        // TODO: Implement has() method.
    }

    public function get(string $key)
    {
        // TODO: Implement get() method.
    }

    public function set(string $key, mixed $value)
    {
        // TODO: Implement set() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function remove(string $key)
    {
        // TODO: Implement remove() method.
    }
}