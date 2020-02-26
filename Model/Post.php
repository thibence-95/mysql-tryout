<?php


class Post
{
    private $firstName;
    private $lastName;
    private $userName;
    private $linkedin;
    private $github;
    private $email;
    private $lang;
    private $avatar;
    private $video;
    private $quote;
    private $quoteAuth;

    public function __construct(string $firstName, string $lastName, string $userName, $linkedin, string $github,
                                string $email, string $lang, string $avatar, string $video, string $quote, string $quoteAuth)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->email = $email;
        $this->lang = $lang;
        $this->avatar = $avatar;
        $this->video = $video;
        $this->quote = $quote;
        $this->quoteAuth = $quoteAuth;

    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->github;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @return string
     */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @return string
     */
    public function getQuote(): string
    {
        return $this->quote;
    }

    /**
     * @return string
     */
    public function getQuoteAuth(): string
    {
        return $this->quoteAuth;
    }

}