<?php

namespace Team\Repositories;

interface TeamInterface {
    public function store( $request);

    public function update($id, $request);

    public function delete($id);

    public function changestatus($request);

   
}
