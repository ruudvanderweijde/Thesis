namespace Thesis;

/**
 * Class Example
 * @package Thesis
 */
class Example
{
    /**
     * This is a description of the method getSomething
     *
     * @param SomeTypeHint $someTypeHint
     * @return bool
     * @throws CustomException
     */
    public function getSomething(SomeTypeHint $someTypeHint)
    {
        if ($someTypeHint->getType() == 'something') {
            throw new CustomException(sprintf('%s is not supported', $someTypeHint->getType()));
        }

        return true;
    }
}
