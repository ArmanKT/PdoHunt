<?php


/**
 * PDO_Hunt - PowerFull Query Builder & PDO Class
 *
 * @class    Cache
 * @author   Arman Khan Tonmoy (@ArmanKT) <info@arman.pw>
 * @web      <http://arman.pw>
 * @url      <https://github.com/ArmanKT/PdoHunt>
 * @license  The MIT License (MIT) - <http://opensource.org/licenses/MIT>
 */
 
namespace Arman;

interface Face
{
    /**
     * @param null $type
     * @param null $argument
     *
     * @return mixed
     */
    public function get($type = null, $argument = null);

    /**
     * @param null $type
     * @param null $argument
     *
     * @return mixed
     */
    public function getAll($type = null, $argument = null);

    /**
     * @param array $data
     * @param bool  $type
     *
     * @return mixed
     */
    public function update(array $data, $type = false);

    /**
     * @param array $data
     * @param bool  $type
     *
     * @return mixed
     */
    public function insert(array $data, $type = false);

    /**
     * @param bool $type
     *
     * @return mixed
     */
    public function delete($type = false);
}
