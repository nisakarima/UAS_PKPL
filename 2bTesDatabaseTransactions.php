<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '220',
            'nidn' => '0511078401',
            'nama' => 'Lisna Zahrotun\'in, S.T.,M.Cs.',
            'jabfung' => 'Lektor',
            'email_dosen' => '220@tif.uad.ac.id',
            'avatar' => 'lisna.jpeg'
        ]);

        $this->assertEquals('220', $dosen->nipy);
        $this->assertEquals('0511078401', $dosen->nidn);
        $this->assertEquals('Lisna Zahrotun\'in, S.T.,M.Cs.', $dosen->nama);
        $this->assertEquals('Lektor', $dosen->jabfung);
        $this->assertEquals('220@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('lisna.jpeg', $dosen->avatar);
    }
}
