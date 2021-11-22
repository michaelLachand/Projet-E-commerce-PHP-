<?php

use App\Session\Session;
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    protected function setUp(): void
    {
        if(session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }

    /** @test */
    public function can_check_if_a_session_is_started()
    {
       $session = new Session();

       $this->assertFalse($session->isStarted());
    }

}