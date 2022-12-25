<?php

namespace App\Services;

use GrahamCampbell\GitHub\Facades\GitHub;

/**
 * This is the github manager class.
 *
 * @method static \Github\Client                                 connection(string|null $name = null)
 * @method static \Github\Client                                 reconnect(string|null $name = null)
 * @method static void                                           disconnect(string|null $name = null)
 * @method static array<string,\Github\Client>                   getConnections()
 * @method static \Github\Api\CurrentUser                        currentUser()
 * @method static \Github\Api\CurrentUser                        me()
 * @method static \Github\Api\Enterprise                         ent()
 * @method static \Github\Api\Enterprise                         enterprise()
 * @method static \Github\Api\Miscellaneous\CodeOfConduct        codeOfConduct()
 * @method static \Github\Api\Miscellaneous\Emojis               emojis()
 * @method static \Github\Api\Miscellaneous\Licenses             licenses()
 * @method static \Github\Api\GitData                            git()
 * @method static \Github\Api\GitData                            gitData()
 * @method static \Github\Api\Gists                              gist()
 * @method static \Github\Api\Gists                              gists()
 * @method static \Github\Api\Miscellaneous\Gitignore            gitignore()
 * @method static \Github\Api\Apps                               apps()
 * @method static \Github\Api\Issue                              issue()
 * @method static static \Github\Api\Issue                              issues()
 * @method static \Github\Api\Markdown                           markdown()
 * @method static \Github\Api\Notification                       notification()
 * @method static \Github\Api\Notification                       notifications()
 * @method static \Github\Api\Organization                       organization()
 * @method static \Github\Api\Organization                       organizations()
 * @method static \Github\Api\Organization\Projects              orgProject()
 * @method static \Github\Api\Organization\Projects              orgProjects()
 * @method static \Github\Api\Organization\Projects              organizationProject()
 * @method static \Github\Api\Organization\Projects              organizationProjects()
 * @method static \Github\Api\Organization\OutsideCollaborators  outsideCollaborators()
 * @method static \Github\Api\PullRequest                        pr()
 * @method static \Github\Api\PullRequest                        pullRequest()
 * @method static \Github\Api\PullRequest                        pullRequests()
 * @method static \Github\Api\RateLimit                          rateLimit()
 * @method static \Github\Api\Repo                               repo()
 * @method static \Github\Api\Repo                               repos()
 * @method static \Github\Api\Repo                               repository()
 * @method static \Github\Api\Repo                               repositories()
 * @method static \Github\Api\Search                             search()
 * @method static \Github\Api\Organization\Teams                 team()
 * @method static \Github\Api\Organization\Teams                 teams()
 * @method static \Github\Api\User                               user()
 * @method static \Github\Api\User                               users()
 * @method static \Github\Api\Authorizations                     authorization()
 * @method static \Github\Api\Authorizations                     authorizations()
 * @method static \Github\Api\Meta                               meta()
 * @method static \Github\Api\GraphQL                            graphql()
 * @method static \Github\Api\AbstractApi                        api(string $name)
 * @method static void                                           authenticate(string $tokenOrLogin, string|null $password = null, string|null $authMethod = null)
 * @method static void                                           setEnterpriseUrl(string $enterpriseUrl)
 * @method static string                                         getApiVersion()
 * @method static void                                           addCache(\Psr\Cache\CacheItemPoolInterface $cachePool, array $config = [])
 * @method static void                                           removeCache()
 * @method static \Psr\Http\Message\ResponseInterface|null       getLastResponse()
 * @method static \Http\Client\Common\HttpMethodsClientInterface getHttpClient()
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
class GithubService extends GitHub
{
    //
}
