<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // Llamada al seed de las MUJERES
		//self::seedMujeres();
		$this->command->info('Tabla MUJERES inicializada con datos!');
        
        // Llamada al seed de las ZONAS
		//self::seedZonas();
		$this->command->info('Tabla ZONAS inicializada con datos!');
		
		// Llamada al seed de las AREAS
		//self::seedAreas();
        $this->command->info('Tabla AREAS inicializada con datos!');
        
        // Llamada al seed de las PREGUNTAS
		//self::seedPreguntas();
    	$this->command->info('Tabla PREGUNTAS inicializada con datos!');

		// Llamada al seed de las PETICIONES
		//self::seedPeticiones();
        $this->command->info('Tabla PETICIONES inicializada con datos!');
        
        // Llamada al seed de los USUARIOS
		//self::seedUsuarios();
		$this->command->info('Tabla USUARIOS inicializada con datos!');
    }


    // INSERTAMOS EN LA BASE DE DATOS    
    private function seedUsuarios(){
        // Borramos la tabla
        DB::table('users')->delete();

		$admin = new User;
		$admin->name = "admin";
		$admin->email = "admin@gmail.com";
		$admin->password = bcrypt("adminadmin");
		$admin->save();
		
		$this->command->info('Usuario nuevo agregado correctamente!');	
    }   

}
