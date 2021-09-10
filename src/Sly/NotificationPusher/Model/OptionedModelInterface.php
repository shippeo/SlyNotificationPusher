<?php


namespace Sly\NotificationPusher\Model;


interface OptionedModelInterface
{
    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param string $key Key
     *
     * @return boolean
     */
    public function hasOption($key);

    /**
     * @param string $key Key
     * @param mixed $default Default
     *
     * @return mixed
     */
    public function getOption($key, $default = null);
}