<?php
namespace Ecompassaro\Produto;

use Zend\Hydrator\HydratorInterface;

class Hydrator implements HydratorInterface
{
    /**
     * Converte um objeto produto em vetor
     * @param produto $object objeto
     * @return array
     */
    public function extract($object)
    {
        return $object->toArray();
    }

    /**
     * Converte um vetor em um objeto produto
     * @param array $data vetor
     * @param Produto $object (prototipo)
     * @return Produto
     */
    public function hydrate(array $data, $object)
    {
        if ($object instanceof Produto) {
            return $object->exchangeArray($data);
        }
    }
}