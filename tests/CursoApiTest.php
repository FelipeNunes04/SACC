<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CursoApiTest extends TestCase
{
    use MakeCursoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateCurso()
    {
        $curso = $this->fakeCursoData();
        $this->json('POST', '/api/v1/cursos', $curso);

        $this->assertApiResponse($curso);
    }

    /**
     * @test
     */
    public function testReadCurso()
    {
        $curso = $this->makeCurso();
        $this->json('GET', '/api/v1/cursos/'.$curso->idcurso);

        $this->assertApiResponse($curso->toArray());
    }

    /**
     * @test
     */
    public function testUpdateCurso()
    {
        $curso = $this->makeCurso();
        $editedCurso = $this->fakeCursoData();

        $this->json('PUT', '/api/v1/cursos/'.$curso->idcurso, $editedCurso);

        $this->assertApiResponse($editedCurso);
    }

    /**
     * @test
     */
    public function testDeleteCurso()
    {
        $curso = $this->makeCurso();
        $this->json('DELETE', '/api/v1/cursos/'.$curso->idcurso);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/cursos/'.$curso->idcurso);

        $this->assertResponseStatus(404);
    }
}
