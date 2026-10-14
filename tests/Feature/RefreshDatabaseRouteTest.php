<?php

declare(strict_types=1);

it('does not expose a route that wipes the database', function () {
    $this->get('/refreshDatabase')->assertNotFound();
});
