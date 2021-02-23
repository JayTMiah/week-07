<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Owner;

class OwnerTest extends TestCase
{
    use RefreshDatabase;

    public function test_Owner_Addition()
    {
        

        // Given
        $owner = Owner::create([
            'first_name' => 'Alfu',
            'last_name' => 'Miah',
            'telephone' => '01234567895',
            'email' => 'email5@email.blah',
            'address_1' => '19501 Mary Ardrey Circle',
            'address_2' => '---',
            'town' => 'Cornelius',
            'postcode' => '28031'
        ]);
        // When
        $ownerNew = Owner::find(1);
        // Then
        $this->assertSame($ownerNew->email, 'email5@email.blah');
    }
}
