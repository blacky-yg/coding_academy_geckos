<?php
    function remove_session(): void {
        session_unset();
        session_destroy();
        session_reset();
    }
?>