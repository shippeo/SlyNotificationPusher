<?php


namespace Sly\NotificationPusher\Model;


interface ParameteredModelInterface
{
    /**
     * @return array
     */
    public function getParameters();

    /**
     * @param string $key Key
     *
     * @return boolean
     */
    public function hasParameter($key);

    /**
     * @param string $key Key
     * @param mixed $default Default
     *
     * @return mixed
     */
    public function getParameter($key, $default = null);
}