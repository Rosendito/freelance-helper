<?php

namespace App\Services;

use GrahamCampbell\GitHub\GitHubFactory;
use GrahamCampbell\GitHub\GitHubManager;
use Illuminate\Contracts\Config\Repository;

class GithubService extends GitHubManager
{
    protected string $token;

    /**
     * Create a new github manager instance.
     *
     * @param Repository $config
     * @param GitHubFactory    $factory
     * @param string $token
     *
     * @return void
     */
    public function __construct(Repository $config, GitHubFactory $factory, string $token)
    {
        parent::__construct($config, $factory);
        $this->token = $token;
    }

    /**
     * Create the connection instance.
     *
     * @param array $config
     *
     * @return \Github\Client
     */
    protected function createConnection(array $config)
    {
        $config['token'] = $this->token;

        return $this->factory->make($config);
    }
}
