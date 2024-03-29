<?php
namespace Wambo\Demo\Demo\Domain;

use InvalidArgumentException;

class Language
{
    const LANGUAGE_CODE_LENGTH = 2;

    const EN = 'en';
    const DE = 'de';

    const AVAILABLE_LANGUAGES = [self::EN, self::DE];

    private $language;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(string $language)
    {
        if (strlen($language) !== self::LANGUAGE_CODE_LENGTH) {
            throw new InvalidArgumentException('Language code must be 2 letters long');
        }

        if (!in_array($language, self::AVAILABLE_LANGUAGES)) {
            throw new InvalidArgumentException('Language not supported!');
        }

        $this->language = $language;
    }

    public function getValue() : string
    {
        return $this->language;
    }
}
