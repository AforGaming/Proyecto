Iniciar Tinker:
php artisan tinker


Crear usuario con Tinker:
$user = new App\User;
$user->name = 'nombre';
$user->email = 'un@mail.com';
$user->password = Hash::make('12345');
$user->save();

$user = new App\User;
$user->name = 'Aaron';
$user->email = 'aaron@mail.com';
$user->password = Hash::make('12345');
$user->save();