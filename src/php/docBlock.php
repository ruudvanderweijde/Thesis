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
     * @param SomeTypeHint $someObject
     * @return string
     * @throws NoNameException
     */
    public function getSomething(SomeTypeHint $someObject)
    {
        if (null === $someObject->getName()) {
            throw new NoNameException();
        }

        return $someObject->getName();
    }
}
