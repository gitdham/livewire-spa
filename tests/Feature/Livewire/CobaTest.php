<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Coba;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CobaTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Coba::class);

        $component->assertStatus(200);
    }
}
