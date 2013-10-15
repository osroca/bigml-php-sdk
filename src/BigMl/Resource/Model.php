<?php
namespace BigMl\Resource;

class Model extends AbstractResource
{
    protected $resource = 'model';

    public function create($data)
    {
        return $this->getClient()->restPost($this->getResource(), $data);
    }

    public function retrieve($id, array $data = array())
    {
        return $this->getClient()->restGet($id, $data);
    }

    public function update($id, $data)
    {
        return $this->getClient()->restPost($id, $data);
    }

    public function delete($id)
    {
        return $this->getClient()->restDelete($id);
    }
}