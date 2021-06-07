<?php

namespace App\Repository\Interfaces;
interface MovieRepositoryInterface {
    public function detail($id);
    public function watch($id);
    public function getAll();
    public function find($id);
    public function create(array $attributes);
    public function update($id, array $attributes );
    public function delete($id);
    public function getwithTrashed();
    public function getonlyTrashed();

}