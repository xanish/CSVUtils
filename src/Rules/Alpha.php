<?php

declare(strict_types=1);

namespace Oshomo\CsvUtils\Rules;

use Oshomo\CsvUtils\Contracts\ValidationRuleInterface;

class Alpha implements ValidationRuleInterface
{
    /**
     * Determines if the validation rule passes. This is where we do the
     * actual validation. If the validation passes return true else false.
     *
     * @param mixed $value
     */
    public function passes($value, array $parameters, array $row): bool
    {
        if (null === $value || '' === $value) {
            return true;
        }

        return ctype_alpha($value);
    }

    /**
     * Get the validation error message. Specify the message that should
     * be returned if the validation fails. You can make use of the
     * :attribute and :value placeholders in the message string.
     */
    public function message(): string
    {
        return 'The :attribute value :value may only contain letters on line :line.';
    }
}
