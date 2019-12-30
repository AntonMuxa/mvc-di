<?php


namespace system\Factory;


class Factory implements FactoryInterface
{
    public function create(string $type, array $arguments = [])
    {
        $data = $this->getClassArgs($type);

        if (!empty($arguments)) {
            $data = array_merge($data, $arguments);
        }

        foreach ($data as $parameterName => $parameter) {
            if($type === $parameter) {
                throw new \Exception("рекурсия");
            }
            if (class_exists($parameter)) {
                $data[$parameterName] = $this->create($parameter);
            }
        }

        return new $type(...array_values($data)); // Pusachev\ObjectManager\Test\TestDTO
    }

    private function getClassArgs($className)
    {
        $reflection = new \ReflectionClass($className);

        $parameters = [];

        foreach ($reflection->getConstructor()->getParameters() as $parameter) {
            if ($parameter->isOptional()) {
                break;
            }
            $parameters[$parameter->getName()] = $parameter->getClass()->getName();
        }

        return $parameters;
    }
}