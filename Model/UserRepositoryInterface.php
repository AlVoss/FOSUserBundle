<?php

/**
 * (c) Gordon Franke <info@nevalon.de>
 * (c) Thibault Duplessis <thibault.duplessis@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Bundle\DoctrineUserBundle\Model;

interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * Set the repository password encryption algorithm
     * @param string $algorithm
     * @return void
     */
    public function setAlgorithm($algorithm);

    /**
     * Find a user by its username
     * @param   string  $username
     * @return  User or null if user does not exist
     */
    public function findOneByUsername($username);

    /**
     * Find a user by its email
     * @param   string  $email
     * @return  User or null if user does not exist
     */
    public function findOneByEmail($email);

    /**
     * Find a user by its username or email
     * @param   string  $usernameOrEmail
     * @return  User or null if user does not exist
     */
    public function findOneByUsernameOrEmail($usernameOrEmail);

    /**
     * Find a user by its confirmationToken
     * @param   string  $token
     * @return  User or null if user does not exist
     */
    public function findOneByConfirmationToken($token);

    /**
     * Creates and returns a new User instance,
     * Passing the password encryption algorithm
     * to the constructor
     *
     * @return void
     */
    public function createUserInstance();
}