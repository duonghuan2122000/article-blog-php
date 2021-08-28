<?php

/**
 * Lớp session
 * @author CreatedBy: dbhuan (28/08/2021)
 */
class Session
{
    /**
     * Hàm bắt đầu session
     * @author CreatedBy: dbhuan (28/08/2021)
     */
    public function start()
    {
        session_start();
    }

    /**
     * Hàm lưu session
     * @author CreatedBy: dbhuan (28/08/2021)
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Hàm lấy dữ liệu session
     * @author CreatedBy: dbhuan (28/08/2021)
     */
    public function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    /**
     * Hàm xóa session
     * @author CreatedBy: dbhuan (28/08/2021)
     */
    public function destroy($key)
    {
        $_SESSION[$key] = null;
    }
}
