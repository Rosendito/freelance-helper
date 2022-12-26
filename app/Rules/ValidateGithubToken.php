<?php

namespace App\Rules;

use Exception;
use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class ValidateGithubToken implements Rule
{
    /**
     * User owner of github token
     *
     * @var User
     */
    protected User $user;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @todo Check token permissions https://github.com/orgs/community/discussions/25259
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $api = $this->user->getGithubApi($value);

        try {
            // Check if token is valid
            $api->me()->repositories();
        } catch(Exception $error) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.github_token');
    }
}
